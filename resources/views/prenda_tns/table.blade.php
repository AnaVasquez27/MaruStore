<div class="table-responsive">
    <table class="table" id="prendaTns-table">
        <thead>
            <tr>
                <th>Id Prendas</th>
        <th>Id Tn</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($prendaTns as $prendaTn)
            <tr>
                <td>{{ $prendaTn->id_prendas }}</td>
            <td>{{ $prendaTn->id_tn }}</td>
                <td>
                    {!! Form::open(['route' => ['prendaTns.destroy', $prendaTn->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('prendaTns.show', [$prendaTn->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('prendaTns.edit', [$prendaTn->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
