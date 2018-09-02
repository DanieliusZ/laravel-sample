@extends('layouts.app')
@section('content')
    <h2>Create new PinWin</h2>
    {!! Form::open(["action" => "CardsController@store", "method" => "POST", "class" => "form", "enctype" => "multipart/form-data"]) !!}
    <div class="form-group">
        {{Form::label('title', 'Title')}}
        {{Form::text('title', '', ['class' => 'form-control', 'placeholder' => 'Title'])}}
    </div>
    <div class="form-group">
        {{Form::label('image_url', 'Image URL')}}
        {{Form::text('image_url', '', ['class' => 'form-control', 'placeholder' => 'image URL'])}}
    </div>
    {{Form::submit('Submit', ['class'=>'btn btn-primary'])}}
{!! Form::close() !!}
@endsection