<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Student extends Model
{
    use SoftDeletes;
    protected $fillable = ['nama','nama_arab','nis','usercode','email','kota','tgl_lahir','phone','alamat','program_id','status'];
    
}
