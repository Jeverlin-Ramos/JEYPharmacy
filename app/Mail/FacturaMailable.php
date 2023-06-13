<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class FacturaMailable extends Mailable
{
    use Queueable, SerializesModels;

    public $pedido;
    public $Usuario;
    public $detallesCarrito;

    /**
     * Create a new message instance.
     *
     * @param  mixed  $pedido
     */
    public function __construct($pedido, $Usuario,  $detallesCarrito)
    {
        $this->pedido = $pedido;
        $this->Usuario = $Usuario;
        $this->detallesCarrito = $detallesCarrito;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject('Factura de compra')
                    ->view('factura.index')
                    ->with(['pedido' => $this->pedido]);
    }
}
