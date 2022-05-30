@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 py-2 edit-messsage">
                @if(session('message'))
                    <div class="alert alert-success">
                        <p>{{session('message')}}</p>
                    </div>
                @endif
            </div>
            <div class="col-12">
                <h1 class="text-center">THANKS YOU FOR YOUR EMAIL!</h1>
            </div>            
        </div>
    </div>

@endsection