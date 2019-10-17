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
    public $timestamps=false;

    public function booking()
    {
        return $this->hasmany('App\Booking');
    }

}
