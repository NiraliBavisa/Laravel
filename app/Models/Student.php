<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $fillable = [
        'fname',
        'lname',
        'email',
        'password',
    ];
}
