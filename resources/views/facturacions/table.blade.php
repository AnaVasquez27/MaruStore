<div class="table-responsive">
    <table class="table" id="facturacions-table">
        <thead>
            <tr>
                <th>Id Cliente</th>
                <th>Fecha</th>
                <th>Total A Pagar</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($facturacions as $facturacion)
            <tr>
                <td>{{ $facturacion->id_cliente }}</td>
                <td>{{ $facturacion->fecha }}</td>
                <td>{{ $facturacion->total_a_pagar }}</td>
                <td>
                    {!! Form::open(['route' => ['facturacions.destroy', $facturacion->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('facturacions.show', [$facturacion->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('¿Estás seguro?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
