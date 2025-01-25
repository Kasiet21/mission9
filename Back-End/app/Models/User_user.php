<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User_user extends Model
{
    use HasFactory;
    protected $table = 'tbl_signup';
    public $timestamps = false;
}
