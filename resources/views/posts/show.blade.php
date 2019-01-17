@extends('layouts.app')

@section('content')
    <a href="/posts" class="btn btn-primary">Back</a>
    <h1>{{$post->title}}</h1>
    <div>
        {!!$post->body!!}
    </div>
    <small>Written on {{$post->created_at}} by {{$post->user->name}}</small>
    <hr>
    <a href="/posts/{{$post->id}}/edit" class="btn btn-outline-secondary">Edit</a>
    {!!Form::open(['action'=>['PostController@destroy',$post->id],'method'=>'POST','class'=>'float-right'])!!}
        {{Form::hidden('_method','DELETE')}}
        {{Form::submit('Delete',['class'=>'btn btn-danger'])}}
    {!!Form::close()!!}
@endsection