<div class="table-responsive">
    <table class="table" id="mPLteams-table">
        <thead>
            <tr>
                <th>Yourname</th>
        <th>Birthdate</th>
        <th>Address</th>
        <th>Teamname</th>
        <th>Teamrole</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($mPLteams as $mPLteams)
            <tr>
                <td>{{ $mPLteams->yourName }}</td>
            <td>{{ $mPLteams->Birthdate }}</td>
            <td>{{ $mPLteams->Address }}</td>
            <td>{{ $mPLteams->teamName }}</td>
            <td>{{ $mPLteams->teamRole }}</td>
                <td width="120">
                    {!! Form::open(['route' => ['mPLteams.destroy', $mPLteams->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('mPLteams.show', [$mPLteams->id]) }}" class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('mPLteams.edit', [$mPLteams->id]) }}" class='btn btn-default btn-xs'>
                            <i class="far fa-edit"></i>
                        </a>
                        {!! Form::button('<i class="far fa-trash-alt"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
