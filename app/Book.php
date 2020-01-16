<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $fillable = ['level_id', 'kitab', 'pengarang'];  
}
