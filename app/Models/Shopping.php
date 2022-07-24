<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Shopping extends Model
{
      //use HasFactory;
      protected $table="shopping";
      protected $primaryKey="id";
      protected $fillable=['id', 'idProduct', 'idUser'];
      public $timestamps = false;
}
