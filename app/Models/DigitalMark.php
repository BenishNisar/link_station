<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DigitalMark extends Model
{
    use HasFactory;
    protected $table="digital_market";
    protected $fillable=[

'title', 'descripation', 'img'
  ];
}
