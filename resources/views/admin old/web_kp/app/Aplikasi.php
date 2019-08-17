<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Aplikasi extends Model
{
    protected $table = 'aplikasi'; 
    protected $fillable = ['imagePath','title','description','price'];  
}
