<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bayu extends Model
{
    //protected $table = 'bayus';
    //protected $primarykey = 'id';
    //public $timestamps = true;
    protected $fillable = ['author', 'title', 'body', 'keyword' ];
    
}
