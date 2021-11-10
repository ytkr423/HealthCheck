<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Crud extends Model
{
    use HasFactory;
    protected $table = "cruds";
    protected $dates = ['created_at','updated_at'];
    protected $fillable = [
        'name',
        'phone',
        'email',
    ];
}
