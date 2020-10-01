<?php

namespace App;

//use Illuminate\Database\Eloquent\Model;
use \Esensi\Model\Model;

class Option extends Model
{
    protected $primaryKey='id';
    protected $table='options';
    protected $fillable = ['optionname', 'created_at', 'updated_at' ];

    protected $rules = ['optionname'=>['required', 'max: 100', 'unique']];
}
