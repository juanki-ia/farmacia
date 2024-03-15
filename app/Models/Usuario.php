<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Usuario
 *
 * @property $id
 * @property $name
 * @property $email
 * @property $email_verified_at
 * @property $password
 * @property $estado
 * @property $remember_token
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Usuario extends Model
{
    
    static $rules = [
		'name' => 'required|min:3|max:40',
		'email' => 'required|unique:usuarios|max:40',
		'estado' => 'required|max:15',
    'password' => 'required|min:8|max:15',
    'id_privilegio' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['name','email','estado','password','id_privilegio'];
    
    public function setPasswordAttribute($value){
      $this->attributes['password'] = bcrypt($value);
    }
    
    

}
