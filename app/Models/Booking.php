<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;
    protected $fillable =[
        'name',
        'sex',
        'address',
        'age',
        'is_paid',
        'mobile_num'
    ];
}
