@extends('admin.layouts.base')

@section('content')

<h1>Create Paper</h1>

{{ Form::open(array('route' => 'papers.store')) }}
    <ul>
        <li>
            {{ Form::label('year', 'Year:') }}
            {{ Form::input('number', 'year') }}
        </li>

        <li>
            {{ Form::label('month', 'Month:') }}
            {{ Form::text('month') }}
        </li>

        <li>
            {{ Form::label('unit_id', 'Unit_id:') }}
            {{ Form::input('number', 'unit_id') }}
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


