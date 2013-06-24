@extends('layouts.scaffold')

@section('main')

<h1>All Specifications</h1>

<p>{{ link_to_route('specifications.create', 'Add new specification') }}</p>

@if ($specifications->count())
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
            @foreach ($specifications as $specification)
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
            @endforeach
        </tbody>
    </table>
@else
    There are no specifications
@endif

@stop