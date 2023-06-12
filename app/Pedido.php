<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Pedido
 *
 * @property $id
 * @property $id_usuario
 * @property $Fecha_pedido
 * @property $Direccion
 * @property $Estado_pedido
 * @property $Opcion_pago
 * @property $Subtotal
 * @property $itbis
 * @property $Total
 * @property $Titular_tarjeta
 * @property $Numero_tarjeta
 * @property $CVV
 * @property $Fecha_expiracion
 * @property $Monto_efectivo
 * @property $Cambio
 * @property $Comentarios
 * @property $created_at
 * @property $updated_at
 *
 * @property DetallesPedido[] $detallesPedidos
 * @property EstadoPedido $estadoPedido
 * @property User $user
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Pedido extends Model
{
    
    static $rules = [
		'id_usuario' => 'required',
		'Fecha_pedido' => 'required',
		'Direccion' => 'required',
		'Estado_pedido' => 'required',
		'Opcion_pago' => 'required',
		'Subtotal' => 'required',
		'itbis' => 'required',
		'Total' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['id_usuario','Fecha_pedido','Direccion','Estado_pedido','Opcion_pago','Subtotal','itbis','Total','Titular_tarjeta','Numero_tarjeta','CVV','Fecha_expiracion','Monto_efectivo','Cambio','Comentarios'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function detallesPedidos()
    {
        return $this->hasMany('App\DetallesPedido', 'Id_pedido', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function estadoPedido()
    {
        return $this->hasOne('App\Models\EstadoPedido', 'id', 'Estado_pedido');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function user()
    {
        return $this->hasOne('App\User', 'id', 'id_usuario');
    }
    

}
