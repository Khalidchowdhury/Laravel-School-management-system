<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fees extends Model
{
    use HasFactory;
    protected $table = 'fees';
    protected $fillable = [
        'fees_id', 
        'name', 
        'class', 
        'shift', 
        'gender', 
        'amount', 
        'paid', 
        'due',
        'sDate',
        'eDate'
    ];
    protected $hidden = [
        'amount',
        'paid',
        'due',    
    ];
}

