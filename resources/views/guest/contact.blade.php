@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-6">
                <h1 class="text-center fw-bold text-dark mb-5">Contact</h1>
                <form class="border border-3 border-primary rounded p-3 bg-info" action="{{ route('guest.contactEmailStore')}}" method="POST">
                    @csrf
                    @method('POST')

                    <div class="mb-3">
                        <label for="guestName" class="form-label">Inserisci il tuo nome</label>
                        <input type="text" name="guestName" id="title" class="form-control">
                    </div>

                    <div class="mb-3">
                        <label for="guestEmail" class="form-label">Inserisci l'email dove vuoi essere contattato</label>
                        <input type="text" name="guestEmail" id="title" class="form-control">
                    </div>

                    <div class="mb-3 d-flex flex-column">
                        <label for="mailMessage" class="form-label">Inserisci il contenuto del messaggio</label>
                        <textarea name="mailMessage" id="guestMessage" rows="5"></textarea>
                    </div>
                    <button class="btn btn-primary text-white" type="submit">invia messaggio</button>
                </form>
            </div>
        </div>
    </div>
@endsection
