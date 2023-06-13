<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Factura de compra</title>
</head>
<body>
    <h1>Factura de compra</h1>

    <p>Fecha: {{ \Carbon\Carbon::parse($pedido->Fecha_pedido)->format('d-m-Y') }}</p>

    
    <h2>Enviado a:</h2>
    <p>
        <strong>Nombre cliente:</strong> {{ $Usuario->name }}<br>
        <strong>Email cliente:</strong> {{ $Usuario->email }}<br>
        <strong>Teléfono cliente:</strong> {{ $Usuario->telefono }}<br>
    </p>

    <h2>Detalles del pedido:</h2>
    <table>
        <thead>
            <tr>
                <th>Descripción</th>
                <th>Cantidad</th>
                <th>Precio</th>
                <th>Total</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($detallesCarrito as $detalle)
                <tr>
                    <td>{{ $detalle->producto->nombre }}</td>
                    <td>{{ $detalle->Cantidad_producto }}</td>
                    <td>{{ $detalle->Precio_unitario }}</td>
                    <td>{{ $detalle->Cantidad_producto * $detalle->Precio_unitario }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <h2>Total: {{ $pedido->Total }}</h2>

    <p>¡Gracias por su compra!</p>
</body>
</html>