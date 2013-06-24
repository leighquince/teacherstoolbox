@extends('layouts.scaffold')

@section('main')

<h1>Edit Specification</h1>
{{ Form::model($specification, array('method' => 'PATCH', 'route' => array('specifications.update', $specification->id))) }}
    <ul>
        <li>
            {{ Form::label('name', 'Name:') }}
            {{ Form::text('name') }}
        </li>

        <li>
            {{ Form::label('board', 'Board:') }}
            {{ Form::text('board') }}
        </li>

        <li>
            {{ Form::label('code', 'Code:') }}
            {{ Form::text('code') }}
        </li>

        <li>
            {{ Form::label('level', 'Level:') }}
            {{ Form::text('level') }}
        </li>

        <li>
            {{ Form::submit('Update', array('class' => 'btn btn-info')) }}
            {{ link_to_route('specifications.show', 'Cancel', $specification->id, array('class' => 'btn')) }}
        </li>
    </ul>
{{ Form::close() }}

@if ($errors->any())
    <ul>
        {{ implode('', $errors->all('<li class="error">:message</li>')) }}
    </ul>
@endif

@stop