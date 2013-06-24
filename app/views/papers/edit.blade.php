@extends('admin.layouts.base')

@section('content')

<h1>Edit Paper</h1>
{{ Form::model($paper, array('method' => 'PATCH', 'route' => array('papers.update', $paper->id))) }}
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
            {{ Form::submit('Update', array('class' => 'btn btn-info')) }}
            {{ link_to_route('papers.show', 'Cancel', $paper->id, array('class' => 'btn')) }}
        </li>
    </ul>
{{ Form::close() }}

@if ($errors->any())
    <ul>
        {{ implode('', $errors->all('<li class="error">:message</li>')) }}
    </ul>
@endif

@stop