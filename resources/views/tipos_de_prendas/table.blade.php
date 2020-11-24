<div class="table-responsive">
    <table class="table" id="tiposDePrendas-table">
        <thead>
            <tr>
                <th>Nombre</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($tiposDePrendas as $tiposDePrendas)
            <tr>
                <td>{{ $tiposDePrendas->nombre }}</td>
                <td>
                    {!! Form::open(['route' => ['tiposDePrendas.destroy', $tiposDePrendas->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('tiposDePrendas.show', [$tiposDePrendas->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('tiposDePrendas.edit', [$tiposDePrendas->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
