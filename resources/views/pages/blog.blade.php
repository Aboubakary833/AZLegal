@extends('layouts.main')
@section('title') Blog @endsection
@section('main')
    <div class="container-fluid py-4 d-flex justify-content-center align-items-center bg__third">
        <h1 class="text__semibold text-white">Blog</h1>
    </div>
    <div class="container my-4 pb-4">
        <div class="row g-4">
            @forelse ($articles as $article)
            <x-article-card :article="$article" />
            @empty
                <p class="text-center">
                    <small>Auncun article disponible!</small>
                </p>
            @endforelse
        </div>
    </div>


@endsection