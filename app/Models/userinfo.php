<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class userinfo extends Model
{
    use HasFactory;
    protected $fillable = ['id','name',  'age', 'address', 'gender','phonenum','user_id' ];
}
