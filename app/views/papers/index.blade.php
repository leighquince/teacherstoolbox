@extends('layouts.scaffold')

@section('main')

<h1>All Papers</h1>

<p>{{ link_to_route('papers.create', 'Add new paper') }}</p>

@if ($papers->count())
    <table class="table table-striped table-bordered">
        <thead>
            <tr>
                <th>Year</th>
				<th>Month</th>
				<th>Unit_id</th>
            </tr>
        </thead>

        <tbody>
            @foreach ($papers as $paper)
                <tr>
                    <td>{{{ $paper->year }}}</td>
					<td>{{{ $paper->month }}}</td>
					<td>{{{ $paper->unit_id }}}</td>
                    <td>{{ link_to_route('papers.edit', 'Edit', array($paper->id), array('class' => 'btn btn-info')) }}</td>
                    <td>
                        {{ Form::open(array('method' => 'DELETE', 'route' => array('papers.destroy', $paper->id))) }}
                            {{ Form::submit('Delete', array('class' => 'btn btn-danger')) }}
                        {{ Form::close() }}
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@else
    There are no papers
@endif

@stop