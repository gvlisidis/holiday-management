<?php

namespace Database\Factories;

use App\Models\Company;
use Illuminate\Database\Eloquent\Factories\Factory;

class CompanyFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Company::class;

    public function definition(): array
    {
        return [
            'name' => $this->faker->company,
            'address' => $this->faker->streetAddress,
            'postcode' => $this->faker->postcode,
            'phone' => $this->faker->phoneNumber,
        ];
    }
}
