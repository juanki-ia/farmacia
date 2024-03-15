<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Cliente
 *
 * @property $id
 * @property $ci
 * @property $nombre
 * @property $apellidos
 * @property $correoElectronico
 * @property $nit
 * @property $telefono
 * @property $id_Nivel
 *
 * @property Nivel $nivel
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Cliente extends Model
{
    
    static $rules = [
		'ci' => 'required|unique:clientes|min:6|max:8',
		'nombre' => 'required|min:3|max:50',
		'apellidos' => 'required|min:3|max:50',
    'correoElectronico' => 'required|unique:clientes|min:6|max:40',
    'nit' => 'min:6|max:9',
    'telefono' => 'required|min:7|max:8',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['ci','nombre','apellidos','correoElectronico','nit','telefono'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */

    

}
