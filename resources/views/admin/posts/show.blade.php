@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="card col-4 py-2 bg-dark text-white">
                <h1 class="card-title fw-bold text-center mb-3">{{$post->title}}</h1>
                <img src="{{$post->image_url}}" alt="{{$post->title}}">
                <div class="card-body">
                    <p class="card-text">Author: {{$post->author}}</p>
                    <p class="card-text">Created: {{$post->created_at}}</p>
                    <p class="card-text">Content: {{$post->content}}</p>
                </div>
            </div>
        </div>
    </div>
@endsection