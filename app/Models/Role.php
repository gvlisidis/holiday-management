<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Role extends Model
{
    use HasFactory;

    protected $guarded = ['id', 'created_at', 'updated_at'];

    const SUPER_ADMIN = 1;
    const ADMIN = 2;
    const USER = 3;

    public function users(): HasMany
    {
        return $this->hasMany(User::class);
    }
}
