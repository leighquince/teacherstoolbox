@extends('layouts.scaffold')

@section('main')

<h1>Show Specification</h1>

<p>{{ link_to_route('specifications.index', 'Return to all specifications') }}</p>

<table class="table table-striped table-bordered">
    <thead>
        <tr>
            <th>Name</th>
				<th>Board</th>
				<th>Code</th>
				<th>Level</th>
        </tr>
    </thead>

    <tbody>
        <tr>
            <td>{{{ $specification->name }}}</td>
					<td>{{{ $specification->board }}}</td>
					<td>{{{ $specification->code }}}</td>
					<td>{{{ $specification->level }}}</td>
                    <td>{{ link_to_route('specifications.edit', 'Edit', array($specification->id), array('class' => 'btn btn-info')) }}</td>
                    <td>
                        {{ Form::open(array('method' => 'DELETE', 'route' => array('specifications.destroy', $specification->id))) }}
                            {{ Form::submit('Delete', array('class' => 'btn btn-danger')) }}
                        {{ Form::close() }}
                    </td>
        </tr>
    </tbody>
</table>

@stop