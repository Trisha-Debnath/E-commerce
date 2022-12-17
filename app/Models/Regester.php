<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Regester extends Model
{
    use HasFactory;
    protected $fillable=['emain','password'];
}
