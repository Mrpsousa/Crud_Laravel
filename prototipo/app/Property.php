<?php

namespace LaraDev;

use Illuminate\Database\Eloquent\Model;

class Property extends Model
{
     protected $table = "properties";

     protected $fillable = ['title', 'name', 'descript', 'rental_price', 'sale_price'];

     public  $timestamps = false;
}
