<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    protected $table = 'question';
    protected $fillable= ['kode_qst','deskripsi_qst'];

    public function goal()
    {
        return $this->belongsToMany(Goal::class);
    }
}
