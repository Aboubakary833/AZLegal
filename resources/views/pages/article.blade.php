@extends('layouts.main')
@section('title') Blog - Lorem ipslum @endsection
@section('main')
    <div class="container-fluid py-4 d-flex justify-content-center align-items-center bg__third">
        <h1 class="text__semibold text-white">Blog</h1>
    </div>
    <div class="container my-4 pb-4">
        <div class="w-75-md mx-auto text-light d-flex justify-content-center align-items-center text__semibold article_img" style="background: url({{ asset('assets/images/article_image.jpg') }}) no-repeat; background-size: cover;">
            <h1>{{ $article->title }}</h1>
        </div>
        <div class="w-75-md mt-4">
            <p style="font-size: 19px;"><?=$article->content ;?></p>
        </div>
    </div>
    
    <div class="container border-top py-4">
        <p class="text-gray">Commentaires:</p>
        <div>
            @forelse ($article->comments as $comment)
                <x-comment :data="$comment" />
            @empty
                <p class="text-center">
                    <small>Auncun commentaire. Soyez le premier à commenter!</small>
                </p>
            @endforelse
        </div>
    </div>

    <div class="container mt-4 pb-4">
        <div class="comment_form">
            <h2 class="text__semibold">Faire un commentaire</h2>
            <form action="{{ route('comment') }}" method="POST">
                @csrf
                <input type="hidden" name="uid" value="{{ $article->uuid }}" required>
                <div class="form-group mt-3">
                    <label for="fullname">Nom complet :</label>
                    <input type="text" name="fullname" id="fullname" placeholder="Entrez votre nom complet" class="form-control" required>
                </div>
                <div class="form-group mt-3">
                    <label for="comment">Commentaire :</label>
                    <textarea name="comment" id="comment" placeholder="Votre commentaire ..." class="form-control" rows="5" required></textarea>
                </div>
                <button type="submit" class="btn mt-3 bg__primary">Envoyer</button>
            </form>
        </div>
    </div>

@endsection