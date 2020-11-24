<div class="table-responsive">
    <table class="table" id="productosVendidos-table">
        <thead>
            <tr>
                <th>Id Factura</th>
                <th>Id Producto</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($productosVendidos as $productosVendidos)
            <tr>
                <td>{{ $productosVendidos->id_factura }}</td>
                <td>{{ $productosVendidos->productos[0]->id_prendas }} {{ $productosVendidos->productos[0]->id_color }}</td>
                <td>
                    {!! Form::open(['route' => ['productosVendidos.destroy', $productosVendidos->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('productosVendidos.show', [$productosVendidos->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('productosVendidos.edit', [$productosVendidos->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('¿Estás seguro?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
