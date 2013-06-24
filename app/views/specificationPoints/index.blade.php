@extends('layouts.scaffold')

@section('main')

<h1>All SpecificationPoints</h1>

<p>{{ link_to_route('specificationPoints.create', 'Add new specificationPoint') }}</p>

@if ($specificationPoints->count())
    <table class="table table-striped table-bordered">
        <thead>
            <tr>
                <th>Unit_id</th>
				<th>Description</th>
				<th>Parent_id</th>
				<th>Order</th>
            </tr>
        </thead>

        <tbody>
            @foreach ($specificationPoints as $specificationPoint)
                <tr>
                    <td>{{{ $specificationPoint->unit_id }}}</td>
					<td>{{{ $specificationPoint->description }}}</td>
					<td>{{{ $specificationPoint->parent_id }}}</td>
					<td>{{{ $specificationPoint->order }}}</td>
                    <td>{{ link_to_route('specificationPoints.edit', 'Edit', array($specificationPoint->id), array('class' => 'btn btn-info')) }}</td>
                    <td>
                        {{ Form::open(array('method' => 'DELETE', 'route' => array('specificationPoints.destroy', $specificationPoint->id))) }}
                            {{ Form::submit('Delete', array('class' => 'btn btn-danger')) }}
                        {{ Form::close() }}
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@else
    There are no specificationPoints
@endif

@stop