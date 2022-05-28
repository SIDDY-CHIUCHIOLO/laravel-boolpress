@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12 py-2 edit-messsage">
                @if(session('message'))
                    <div class="alert alert-success">
                        <p>{{session('message')}}</p>
                    </div>
                @endif
            </div>
            <table class="table table-dark table-hover col-12">
                <thead>
                    <tr>
                        <th class="fw-bold text-primary fs-2">TITLE</th>
                        <th class="fw-bold text-primary fs-2">AUTHOR</th>
                        <th class="fw-bold text-primary fs-2">CREATED</th>
                        <th class="text-center">
                            <a href="{{route('admin.posts.create')}}">
                                <button class="btn btn-warning fw-bold">NUOVO POST</button>
                            </a>
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($posts as $post)
                        <tr>
                            <th>
                                <a href="{{route('admin.posts.show', $post)}}">{{$post->title}}</a>
                            </th>
                            <th>
                                {{$post->author}}
                            </th>
                            <th>
                                {{$post->created_at}}
                            </th>
                            <th class="d-flex justify-content-center">
                                <a class="me-2" href="{{route('admin.posts.edit', $post)}}">
                                    <button class="btn btn-primary">Edit</button>
                                </a>
                                <form action="{{route("admin.posts.destroy", $post)}}" method="POST" class="delete" post-model="{{$post->model}}">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger"> Elimina </button>
                                </form>
                            </th>
                        </tr>
                    @empty
                        <tr>
                            <th colspan="3">Non ci sono post da mostrare</th>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
@endsection