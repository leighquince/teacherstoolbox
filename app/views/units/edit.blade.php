@extends('layouts.scaffold')

@section('main')

<h1>Edit Unit</h1>
{{ Form::model($unit, array('method' => 'PATCH', 'route' => array('units.update', $unit->id))) }}
    <ul>
        <li>
            {{ Form::label('specification_id', 'Specification_id:') }}
            {{ Form::input('number', 'specification_id') }}
        </li>

        <li>
            {{ Form::label('title', 'Title:') }}
            {{ Form::text('title') }}
        </li>

        <li>
            {{ Form::label('code', 'Code:') }}
            {{ Form::text('code') }}
        </li>

        <li>
            {{ Form::submit('Update', array('class' => 'btn btn-info')) }}
            {{ link_to_route('units.show', 'Cancel', $unit->id, array('class' => 'btn')) }}
        </li>
    </ul>
{{ Form::close() }}

@if ($errors->any())
    <ul>
        {{ implode('', $errors->all('<li class="error">:message</li>')) }}
    </ul>
@endif

@stop