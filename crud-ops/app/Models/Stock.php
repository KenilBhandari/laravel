<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Stock extends Model
{
   protected $table = 'stocks'; 
    public $timestamps = true; 

    protected $fillable = [
       'name', 'price', 'mkt_cap', 'dividend'
    ];
}
