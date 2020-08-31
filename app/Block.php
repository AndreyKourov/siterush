<?php

namespace App;

//use Illuminate\Database\Eloquent\Model;
use \Esensi\Model\Model;

class Block extends Model
{
    protected $primaryKey='id';
    protected $table='blocks';
    protected $fillable = ['title', 'optionid', 'content', 'imagepath', 'created_at', 'update_at'];

    protected $rules = [
        'title'=>['required', 'max:200'],
        'topicid'=>['required'],
        'content'=>['required']
    ];
}
