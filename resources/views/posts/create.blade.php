@extends('layouts.app')


@section('content')
<a href="/posts" class="btn btn-primary">Go back</a>
   <h1>Personal Details</h1>
   {!! Form::open(['action' => 'PostsController@store','method' => 'POST']) !!}
    <div class="form-group">
        {{Form::label('name', 'Name')}}
        {{Form::text('name','',['class' => 'form-control','placeholder'=>'Full Name'])}}
    </div>
    <div class="form-group">
        {{Form::label('age', 'Age')}}
        {{Form::text('age','',['class' => 'form-control','placeholder'=>'Age'])}}
    </div>
    <div class="form-group">
        {{Form::label('id number', 'ID number')}}
        {{Form::text('id_number','',['class' => 'form-control','placeholder'=>'ID number'])}}
    </div>
    <div class="form-group">
        {{Form::label('ward', 'Ward')}}
        {{Form::text('ward','',['class' => 'form-control','placeholder'=>'Ward'])}}
    </div>
    <div class="form-group">
        {{Form::label('voting', 'Voting')}}
        {{Form::text('voting','',['class' => 'form-control','placeholder'=>'Voting Centre'])}}
    </div>
    <div class="form-group">
        {{Form::label('group', 'Group')}}
        {{Form::text('group','',['class' => 'form-control','placeholder'=>'Group Representing'])}}
    </div>
    {{-- <div class="form-group">
            {{Form::label('body', 'Body')}}
            {{Form::textarea('body','',['id' => 'article-ckeditor', 'class' => 'form-control','placeholder'=>'Body text area'])}}
        </div> --}}
        {{form::submit('Submit',['class'=>'btn btn-primary'])}}
{!! Form::close() !!}
@endsection