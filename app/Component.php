<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Component extends Model
{
    //
	
    protected $fillable = ['name', 'description', 'category', 'model_number', 'quantity1', 'location'];
}
