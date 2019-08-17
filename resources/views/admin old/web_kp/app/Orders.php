<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Orders extends Model
{
    protected $table = 'orders'; 
    protected $fillable = ['id','user_id','cart','address','name','payment_id'];  

}
