@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12">
                <h1 class="text-center fw-bold text-dark mb-5">Modifica il Post</h1>
            </div>
            <div class="col-6">
                <form class="border border-3 border-primary rounded p-3 bg-info" action="{{route('admin.posts.update', ['post'=>$post])}}" method="POST">
                    @csrf
                    @method('PUT')


                    <div class="mb-3">
                        <label for="title" class="form-label">Modifica il titolo</label>
                        <input type="text" name="title" id="title" class="form-control" value="{{$post->title}}">
                        @error('title')
                            <div class="alert alert-danger">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                
                    
                    <div class="mb-3">
                        <label for="author" class="form-label">Modifica l'autore</label>
                        <input type="text" name="author" id="author" class="form-control" value="{{$post->author}}">
                        @error('author')
                            <div class="alert alert-danger">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                
                    
                    <div class="mb-3">
                        <label for="content" class="form-label">Modifica il contenuto</label>
                        <input type="text" name="content" id="content" class="form-control" value="{{$post->content}}">
                        @error('content')
                            <div class="alert alert-danger">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                
                    
                    <div class="mb-3">
                        <label for="image_url" class="form-label">Modifica l'url dell'immagine</label>
                        <input type="text" name="image_url" id="image_url" class="form-control" value="{{$post->image_url}}">
                        @error('image_url')
                            <div class="alert alert-danger">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <button type="submit" class="btn btn-dark text-white">Esegui Modifica</button>

                </form> 
            </div>
        </div>
    </div>
@endsection
    