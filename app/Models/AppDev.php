<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AppDev extends Model
{
    use HasFactory;
    protected $table="app_dev";
    protected $fillable=[

'title', 'descripation', 'img'
  ];
}
