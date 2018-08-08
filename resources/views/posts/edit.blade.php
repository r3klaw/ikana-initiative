{{-- @extends('layouts.app')


@section('content')
<a href="/posts" class="btn btn-default">Go back</a>
   <h1>Edit posts</h1>
   {!! Form::open(['action' => ['PostsController@update', $post->id], 'method' => 'POST']) !!}
    <div class="form-group">
        {{Form::label('name', 'Name')}}
        {{Form::text('title','',['class' => 'form-control','placeholder'=>'Name'])}}
    </div>
    <div class="form-group">
        {{Form::label('age', 'Age')}}
        {{Form::text('title','',['class' => 'form-control','placeholder'=>'Age'])}}
    </div>
    <div class="form-group">
        {{Form::label('id_number', 'Id_number')}}
        {{Form::text('title','',['class' => 'form-control','placeholder'=>'ID number'])}}
    </div>
    <div class="form-group">
        {{Form::label('ward', 'Ward')}}
        {{Form::text('title','',['class' => 'form-control','placeholder'=>'Ward'])}}
    </div>
    <div class="form-group">
        {{Form::label('voting', 'Voting')}}
        {{Form::text('title','',['class' => 'form-control','placeholder'=>'Voting Centre'])}}
    </div>
    <div class="form-group">
        {{Form::label('group', 'Group')}}
        {{Form::text('title','',['class' => 'form-control','placeholder'=>'Group Representing'])}}
    </div>
    {{-- <div class="form-group">
            {{form::label('body', 'Body')}}
            {{form::textarea('body',$post->body,['id' => 'article-ckeditor', 'class' => 'form-control','placeholder'=>'Body text area'])}}
        </div> --}}
        {{form::hidden('_method', 'PUT')}}
        {{form::submit('Submit',['class'=>'btn btn-primary'])}}
{!! Form::close() !!}
@endsection --}}