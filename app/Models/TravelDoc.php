<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TravelDoc extends Model
{
    use HasFactory;
    protected $table="travel_doc";
    protected $fillable=[

'title', 'descripation', 'img'
  ];
}
