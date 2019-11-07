<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Hardware extends Model
{
    protected $table = 'hardwares';
    protected $fillable = ['name','description', 'category', 'image','model_number','location', 'status'];
}
