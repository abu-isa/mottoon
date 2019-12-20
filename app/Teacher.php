<?php

namespace App;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class teacher extends Model
{
    use SoftDeletes;
    protected $fillable = ['nama', 'nip', 'phone', 'email', 'alamat'];
}
