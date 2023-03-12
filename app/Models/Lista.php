<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lista extends Model
{
    use HasFactory;

    protected $table = 'lists';

    protected $dates = ['data_inicio'];


    public function user()
    {
        return $this->belongsTo('App\Model\User');
    }
}
