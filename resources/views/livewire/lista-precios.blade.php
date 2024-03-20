<style>
    th {
        border: 1px solid black;
        padding: 4px 2px;
        text-align: center;
        background-color: #f2f2f2;
        /* color de fondo gris claro */
        box-shadow: 2px 2px 4px rgba(0, 0, 0, 0.2);
        /* sombra */
    }

    td {
        border: 1px solid black;
        padding: 4px 2px;
        text-align: center;
    }

    tr:nth-child(odd) td {
        background-color: #f9f9f9;
        /* color de fondo blanco */
        box-shadow: 1px 1px 2px rgba(0, 0, 0, 0.1);
        /* sombra ligeramente más suave */
    }
</style>

<div style="padding: 10px;">
    <table style="width: 100%; border-collapse: collapse;">
        <thead>
            <tr>
                <th style="border-left-width: 3px; border-top-width: 3px;">CÓDIGO</th>
                <th style="border-top-width: 3px;">NOMBRE</th>
                <th style="border-top-width: 3px;">PRESENTACIÓN</th>
                <th style="border-right-width: 3px; border-top-width: 3px;">PRECIO DE VENTA</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($productos as $index => $product)
            <tr style="border: 1px solid black; @if ($index === count($productos) - 1) border-bottom-width: 4px; @endif">
                <td style="border-left-width: 3px;">{{ $product->code }}</td>
                <td>{{ $product->name }}</td>
                <td>{{ $product->presentation }}</td>
                <td style="border-right-width: 3px;">{{ $product->sale_price }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>