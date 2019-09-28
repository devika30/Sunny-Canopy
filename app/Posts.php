<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Posts extends Model
{
            //Table Name
            protected $table='posts';
            //Primary Key
            public $primary_key='id';
            //Timestamp
            public $timestamp=true;
}
