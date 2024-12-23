<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class law_FirmsModel extends Model
{
    protected $fillable = ["law_frim","firmImage","firmHeading","firmPara"];
    protected $table = "law_firms";
    public $timestamps = false;

    public function lawyers(){
        return $this->hasMany(lawyersModel::class,"areasId","id");
    }

}
