<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Producto
 *
 * @property $id
 * @property $nombre_generico
 * @property $nombre_comercial
 * @property $precio
 * @property $restriccion
 * @property $id_estante
 *
 * @property Estante $estante
 * @property Lote[] $lotes
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Producto extends Model
{
    
    static $rules = [
		'nombre_generico' => 'required',
		'nombre_comercial' => 'required',
		'precio' => 'required',
		'restriccion' => 'required',
		'id_estante' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nombre_generico','nombre_comercial','precio','restriccion','id_estante'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function estante()
    {
        return $this->hasOne('App\Models\Estante', 'id', 'id_estante');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function lotes()
    {
        return $this->hasMany('App\Models\Lote', 'id_producto', 'id');
    }
    

}
