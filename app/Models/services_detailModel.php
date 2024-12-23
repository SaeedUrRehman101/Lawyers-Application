<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class services_detailModel extends Model
{
    protected $table = 'services_detail';
    public $timestamps = false;

    protected $fillable = ['serviceHeading','aboutService','serviceFirms','serviceImg'];
}
