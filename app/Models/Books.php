<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Books extends Model
{
    protected $table = 'Books';
    public $timestamps = false;
    protected $fillable = ['title'];
}
