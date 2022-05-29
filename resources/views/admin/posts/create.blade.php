@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12">
                <h1 class="text-center fw-bold text-dark mb-5">Crea un nuovo Post</h1>
            </div>

            <div class="col-6">
                <form class="border border-3 border-primary rounded p-3 bg-info" action="{{route('admin.posts.store')}}" method="POST">
                    @csrf

                    <div class="mb-3">
                        <label for="title" class="form-label">Inserisci il titolo</label>
                        <input type="text" name="title" id="title" class="form-control">
                        @error('title')
                            <div class="alert alert-danger">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                
                    
                    <div class="mb-3">
                        <label for="author" class="form-label">Inserisci l'autore</label>
                        <input type="text" name="author" id="author" class="form-control">
                        @error('author')
                            <div class="alert alert-danger">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                
                    
                    <div class="mb-3">
                        <label for="content" class="form-label">Inserisci il contenuto</label>
                        <input type="text" name="content" id="content" class="form-control">
                        @error('content')
                            <div class="alert alert-danger">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                
                    
                    <div class="mb-3">
                        <label for="image_url" class="form-label">Inserisci l'url dell'immagine</label>
                        <input type="text" name="image_url" id="image_url" class="form-control">
                        @error('image_url')
                            <div class="alert alert-danger">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <button type="submit" class="btn btn-dark text-white">Pubblica</button>
                    
                </form>
            </div>
        </div>
    </div>
@endsection
    
