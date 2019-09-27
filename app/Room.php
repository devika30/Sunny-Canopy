<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
     //table name
    protected $table='rooms';
    //primary key
    public $primaryKey='id';
    //timestamps
    public $timestamps=true;
}
