<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class UserModel extends Authenticatable
{
    protected $table = "user_accounts";
    public $timestamps = false;

    protected $fillable = ['userName','email','password','role','dob','contact','Address','bio','states','image'];

    protected $attributes = ["role" => "user"];
    protected $hidden = [
        "password" => "remember_token"
    ];

    protected function casts(): array
    {
        return [
            'password' => 'hashed',
        ];
    }

}
