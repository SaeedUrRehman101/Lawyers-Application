<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;


class lawyersModel extends Authenticatable
{
    use HasFactory;
    // protected $guard = 'lawyers';
    // protected $guard = 'lawyerAuth';
    protected $table = "lawyers_detail";
    protected $fillable = ['lawyerName','lawyer_dob','email','contact','province','address','areas','working_Place','designation','education','qualification','experience','about','password','image','barLicense','Court_Enrollment_No','role'];
    // protected $fillable = ['lawyerName','contact','email','password','image','designation','qualification','province','address','barLicense','Court_Enrollment_No','role'];
    public $timestamps = false;
    // protected $attributes = ["role" => "lawyer"];
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
