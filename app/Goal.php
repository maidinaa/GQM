<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Goal extends Model
{
    protected $table = 'goal';
    protected $fillable= ['id','kode_goal','deskripsi_goal'];
}
