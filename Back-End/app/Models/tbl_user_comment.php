<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tbl_user_comment extends Model
{
    use HasFactory;
    protected $table = 'tbl_user_comment';
    public $timestamps = false;
}
