@extends('layouts.main')
@section('title') Contact @endsection
@section('main')
    <div class="container-fluid py-4 d-flex justify-content-center align-items-center bg__third">
        <h1 class="text__semibold text-white">Contact</h1>
    </div>
    <div class="container mt-4 pb-4">
        <div class="col-12 col-md-8 mx-auto">
            <div class="card border-0 pt-4 bg__primary">
                <div class="card-header border-0">
                    <h2 class="text-center text__third text__semibold">Nous contacter</h2>
                </div>
                <div class="card-body">
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                        {{$message}}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @endif
                    <form action="{{ route('contact') }}" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="fullname">Votre nom complet :</label>
                            <input type="text" name="fullname" id="fullname" placeholder="Entrez votre nom complet" class="form-control @error('fullname') is-invalid @enderror" required>
                            @error('fullname')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="email">Adresse email :</label>
                            <input type="email" name="email" id="email" placeholder="Entrez votre adresse email" class="form-control @error('email') is-invalid @enderror" required>
                            @error('email')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group mt-3">
                            <label for="subject">L'objet de votre message :</label>
                            <input type="text" name="subject" id="subject" placeholder="Entrez le sujet de votre message" class="form-control @error('subject') is-invalid @enderror" required>
                            @error('subject')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group mt-3">
                            <label for="message">Votre message :</label>
                            <textarea name="message" id="message" cols="30" rows="10" placeholder="Ecrivez ici ..." class="form-control @error('message') is-invalid @enderror" required></textarea>
                            @error('message')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group mt-3">
                            <button type="submit" class="btn bg__third text__primary">Envoyer</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection