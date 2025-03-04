<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WebDevelopment extends Model
{
    use HasFactory;
    protected $table='web_dev';
    protected $fillable = ['title', 'descripation', 'img'];

}
