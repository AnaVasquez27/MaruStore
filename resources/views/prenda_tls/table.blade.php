<div class="table-responsive">
    <table class="table" id="prendaTls-table">
        <thead>
            <tr>
                <th>Id Prendas</th>
        <th>Id Tl</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($prendaTls as $prendaTl)
            <tr>
                <td>{{ $prendaTl->id_prendas }}</td>
            <td>{{ $prendaTl->id_tl }}</td>
                <td>
                    {!! Form::open(['route' => ['prendaTls.destroy', $prendaTl->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('prendaTls.show', [$prendaTl->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('prendaTls.edit', [$prendaTl->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
