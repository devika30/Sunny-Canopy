<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
     //table name
     protected $table='bookings';
     //primary key
     public $primaryKey='id';
     //timestamps
     public $timestamps=false;

     public function room()
     {
          return $this->belongsTo('App\Room');
     }
}
