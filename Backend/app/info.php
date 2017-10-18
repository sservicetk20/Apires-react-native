<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class info extends Model
{
  protected $table = "info"; 
  protected $fillable = ['nombre', 'informacion','telefono','admin','created_at','updated_at'];
}
