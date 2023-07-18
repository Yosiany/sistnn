<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\producto;
use App\Models\ciudad;

class vencimiento extends Model
{
    use HasFactory;

    protected $table='vencimiento';

    public function producto()
    {
        return $this->belongsTo(producto::class, 'id_producto');
    }
    public function ciudad()
    {
        return $this->belongsTo(ciudad::class, 'id_ciudad');
    }

    protected $primaryKey="id_fecven";
    public $timestamps=false;
  
    protected $fillable=[
        'cantidad',
        'fec_vencimiento',
        'detalle',
        'id_producto',
        'id_ciudad'
    ];

    protected $guarded=[
        
    ];

    

}
