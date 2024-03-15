<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Reposicione
 *
 * @property $id
 * @property $descripcion
 * @property $fecha_creacion
 * @property $observacion
 * @property $id_proveedor
 * @property $id_usuario
 *
 * @property Proveedore $proveedore
 * @property Usuario $usuario
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Reposicione extends Model
{
    
    static $rules = [
		'descripcion' => 'required',
		'fecha_creacion' => 'required',
		'observacion' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['descripcion','fecha_creacion','observacion','id_proveedor','id_usuario'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function proveedore()
    {
        return $this->hasOne('App\Models\Proveedore', 'id', 'id_proveedor');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function usuario()
    {
        return $this->hasOne('App\Models\Usuario', 'id', 'id_usuario');
    }
    

}
