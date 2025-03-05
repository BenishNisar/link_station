<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OfficeDet extends Model
{
    use HasFactory;
    protected $table="office_details";
    protected $fillable=[

        'location','email', 'contact'
          ];


}
