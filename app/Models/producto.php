<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class producto extends Model
{
    use HasFactory;
     // a que tabla hace referencia
  protected $table='producto';
  protected $primaryKey="id_producto";
  public $timestamps=false;


  protected $fillable=[
      'nombre_producto',
      'formato_producto',
      'precio',
      'sabor_producto'
  ];

  protected $guarded=[
      
  ];




}
