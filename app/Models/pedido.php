<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pedido extends Model
{
    use HasFactory;
    protected $table='pedido';

    public function producto()
    {
        return $this->belongsTo(producto::class, 'id_producto');
    }
    public function ciudad()
    {
        return $this->belongsTo(ciudad::class, 'id_ciudad');
    }



    protected $primaryKey="id_pedido";
    public $timestamps=false;
  
    protected $fillable=[
        'cantidad',
        'fec_pedido',
        'id_producto',
        'id_ciudad'
    ];
  
    protected $guarded=[
        
    ];

}
