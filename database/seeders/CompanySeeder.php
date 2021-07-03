<?php

namespace Database\Seeders;

use App\Models\Company;
use App\Models\User;
use Illuminate\Database\Seeder;

class CompanySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $company1 = Company::factory()->create();
        $company2 = Company::factory()->create();
        User::factory()->create(['name' => 'George Vlisidis', 'email' => 'gv@mail.com', 'password' => bcrypt('password'), 'role_id' => 1, 'company_id' => $company1->id]);
        User::factory()->create(['name' => 'Zina Skoufa', 'email' => 'zs@mail.com', 'password' => bcrypt('password'), 'role_id' => 1, 'company_id' => $company2->id]);
        User::factory()->count(2)->create(['role_id' => 2, 'company_id' => $company1->id]);
        User::factory()->count(2)->create(['role_id' => 2, 'company_id' => $company2->id]);
        User::factory()->count(10)->create(['role_id' => 3, 'company_id' => $company1->id]);
        User::factory()->count(10)->create(['role_id' => 3, 'company_id' => $company2->id]);
    }
}
