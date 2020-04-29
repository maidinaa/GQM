<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tester extends Model
{
    protected $table = 'tester';
    protected $fillable= ['user_id','nama','perusahaan','avatar'];

    public function getAvatar()
    {
        if(!$this->avatar){
            return asset('images/default.png');
        }

        return asset('images/'.$this->avatar);
    }
}

