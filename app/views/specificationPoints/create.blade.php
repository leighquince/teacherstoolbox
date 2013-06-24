@extends('layouts.scaffold')

@section('main')

<h1>Create SpecificationPoint</h1>

{{ Form::open(array('route' => 'specificationPoints.store')) }}
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
            {{ Form::submit('Submit', array('class' => 'btn')) }}
        </li>
    </ul>
{{ Form::close() }}

@if ($errors->any())
    <ul>
        {{ implode('', $errors->all('<li class="error">:message</li>')) }}
    </ul>
@endif

@stop


