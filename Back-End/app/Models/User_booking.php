<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User_booking extends Model
{
    use HasFactory;
    protected $table = 'tbl_bookingmore';
    public $timestamps = false;
}
