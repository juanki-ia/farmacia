<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Proveedore
 *
 * @property $id
 * @property $nit
 * @property $nombre
 * @property $direccion
 * @property $telefono
 * @property $ciudad
 * @property $pais
 * @property $tipo_proveedor
 *
 * @property Reposicione[] $reposiciones
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Proveedore extends Model
{
    
    static $rules = [
		'nit' => 'required',
		'nombre' => 'required',
		'direccion' => 'required',
		'telefono' => 'required',
		'ciudad' => 'required',
		'pais' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nit','nombre','direccion','telefono','ciudad','pais'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function reposiciones()
    {
        return $this->hasMany('App\Models\Reposicione', 'id_proveedor', 'id');
    }
    

}
