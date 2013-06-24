@extends('layouts.scaffold')

@section('main')

<h1>Create Unit</h1>

{{ Form::open(array('route' => 'units.store')) }}
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


