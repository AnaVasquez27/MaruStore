<div class="table-responsive">
    <table class="table" id="tallasEnLetras-table">
        <thead>
            <tr>
                <th>Letra</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($tallasEnLetras as $tallasEnLetras)
            <tr>
                <td>{{ $tallasEnLetras->letra }}</td>
                <td>
                    {!! Form::open(['route' => ['tallasEnLetras.destroy', $tallasEnLetras->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('tallasEnLetras.show', [$tallasEnLetras->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('tallasEnLetras.edit', [$tallasEnLetras->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
