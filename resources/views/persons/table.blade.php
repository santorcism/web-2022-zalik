<div class="table-responsive">
    <table class="table" id="people-table">
        <thead>
        <tr>
            <th>First Name</th>
        <th>Last Name</th>
        <th>Middle Name</th>
            <th colspan="3">Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($persons as $person)
            <tr>
                <td>{{ $person->first_name }}</td>
            <td>{{ $person->last_name }}</td>
            <td>{{ $person->middle_name }}</td>
                <td width="120">
                    {!! Form::open(['route' => ['persons.destroy', $person->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('persons.show', [$person->id]) }}"
                           class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('persons.edit', [$person->id]) }}"
                           class='btn btn-default btn-xs'>
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
