<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CustomerBac extends Model
{
    use HasFactory;
    protected $table="customer";
    protected $fillable=[

'title', 'descripation', 'img'
  ];
}
