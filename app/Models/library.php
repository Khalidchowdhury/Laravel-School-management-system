<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class library extends User
{
    use HasFactory;
    protected $table = 'libraries';
    protected $fillable = ['book_name', 'department', 'language', 'type', 'status'];
}
