<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ciudad extends Model
{
    use HasFactory;

  // a que tabla hace referencia
  protected $table='ciudad';
  protected $primaryKey="id_ciudad";
  public $timestamps=false;

  protected $fillable=[
      'nombre'
  ];

  protected $guarded=[
      
  ];

}
