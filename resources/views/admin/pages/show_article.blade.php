@extends('admin.Layouts.main')
@section('title')
    Blog - Voir un article
@endsection
@section('bigTitle')
    {{$article->title}}
@endsection
@section('pageName')
    Voir l'article
@endsection
@section('main')

    <div class="container">
        <div class="w-75-md mx-auto text-light d-flex justify-content-center align-items-center rounded" style="height: 40vh; background: url({{ asset('assets/images/article_image.jpg') }}) no-repeat; background-size: cover;">
            <h1>{{$article->title}}</h1>
        </div>

        <div class="mt-4">
            {{$article->content}}
        </div>
    </div>


@endsection