<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Empleado
 *
 * @property $id
 * @property $Imagen
 * @property $Nombre
 * @property $Numero_tel
 * @property $Email
 * @property $Direccion
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Empleado extends Model
{
    
    static $rules = [
		'Imagen' => 'required',
		'Nombre' => 'required',
		'Numero_tel' => 'required',
		'Email' => 'required',
		'Direccion' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['Imagen','Nombre','Numero_tel','Email','Direccion'];



}
