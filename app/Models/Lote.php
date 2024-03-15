<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Lote
 *
 * @property $id
 * @property $fabricante
 * @property $fecha_fabricacion
 * @property $fecha_vencimiento
 * @property $id_producto
 *
 * @property Producto $producto
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Lote extends Model
{
    
    static $rules = [
		'fabricante' => 'required',
		'fecha_fabricacion' => 'required',
		'fecha_vencimiento' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['fabricante','fecha_fabricacion','fecha_vencimiento','id_producto'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function producto()
    {
        return $this->hasOne('App\Models\Producto', 'id', 'id_producto');
    }
    

}
