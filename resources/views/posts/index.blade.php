@extends('layouts.app')

@section('content')
    <h1>POST</h1>
    @if(count($posts) > 0)
        @foreach ($posts as  $post)
            <div class="card">
                <div class="card-body">
                    <h3 class="card-title"><a href='/posts/{{$post->id}}'>{{ $post->title }}</a></h3>
                    <small>Written on {{$post->created_at}} </small>    
                </div>
            </div>            
        @endforeach
        {{ $posts->links() }}
    @else
        <p>No posts found</p>
    @endif
@endsection