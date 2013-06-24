@extends('layouts.scaffold')

@section('main')

<h1>Edit SpecificationPoint</h1>
{{ Form::model($specificationPoint, array('method' => 'PATCH', 'route' => array('specificationPoints.update', $specificationPoint->id))) }}
    <ul>
        <li>
            {{ Form::label('unit_id', 'Unit_id:') }}
            {{ Form::input('number', 'unit_id') }}
        </li>

        <li>
            {{ Form::label('description', 'Description:') }}
            {{ Form::text('description') }}
        </li>

        <li>
            {{ Form::label('parent_id', 'Parent_id:') }}
            {{ Form::input('number', 'parent_id') }}
        </li>

        <li>
            {{ Form::label('order', 'Order:') }}
            {{ Form::input('number', 'order') }}
        </li>

        <li>
            {{ Form::submit('Update', array('class' => 'btn btn-info')) }}
            {{ link_to_route('specificationPoints.show', 'Cancel', $specificationPoint->id, array('class' => 'btn')) }}
        </li>
    </ul>
{{ Form::close() }}

@if ($errors->any())
    <ul>
        {{ implode('', $errors->all('<li class="error">:message</li>')) }}
    </ul>
@endif

@stop