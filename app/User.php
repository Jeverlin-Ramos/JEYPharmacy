<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Class User
 *
 * @property $id
 * @property $name
 * @property $email
 * @property $email_verified_at
 * @property $fecha_nacimiento
 * @property $telefono
 * @property $password
 * @property $rol
 * @property $remember_token
 * @property $created_at
 * @property $updated_at
 *
 * @property CarritoCompra[] $carritoCompras
 * @property Pedido[] $pedidos
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class User extends Model
{
    
    static $rules = [
		'name' => 'required',
		'email' => 'required',
		'fecha_nacimiento' => 'required',
		'telefono' => 'required',
		'rol' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['name','email','fecha_nacimiento','telefono','rol'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function carritoCompras()
    {
        return $this->hasMany('App\CarritoCompra', 'Id_usuario', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function pedidos()
    {
        return $this->hasMany('App\Pedido', 'id_usuario', 'id');
    }
    

}
