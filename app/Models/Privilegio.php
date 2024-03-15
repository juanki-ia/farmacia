<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Privilegio
 *
 * @property $id
 * @property $ver
 * @property $crear
 * @property $modificar
 * @property $eliminar
 * @property $actualizar
 * @property $updated_at
 * @property $created_at
 *
 * @property Puesto[] $puestos
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Privilegio extends Model
{
    
    static $rules = [
    'nombre' => 'required|unique:privilegios|min:3|max:50',
		'ver' => 'required',
		'crear' => 'required',
		'modificar' => 'required',
		'eliminar' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nombre','ver','crear','modificar','eliminar'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function puestos()
    {
        return $this->hasMany('App\Models\Puesto', 'id_Privilegio', 'id');
    }
    

}
