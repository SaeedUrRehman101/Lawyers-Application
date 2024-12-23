<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class bookAppointmentModel extends Model
{
    protected $table = 'book_appointment';
    protected $fillable = ['userId','lawyerId','userName','email','contact','message','slots','service'];

    public $timestamps =  false;

}
