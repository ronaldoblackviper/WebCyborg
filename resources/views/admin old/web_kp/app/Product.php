<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'produk'; 
    protected $fillable = ['imagePath','title','description','price'];  

}
