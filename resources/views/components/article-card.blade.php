<div class="col-12 col-sm-6 col-lg-4">
    <div class="card border-0 article-card" style="border: .1px solid #eee !important;">
        <div class="card-header border-0 p-0">
            <img src="{{ asset('assets/images/article_image.jpg') }}" alt="Article image" width="100%" class="rounded-top">
        </div>
        <div class="card-body border-0">
            <h5 class="text__semibold">{{ $title }}</h5>
            <p>{{ strip_tags($content) }}</p>
            <small>Publié le {{ $publication_date }}</small> 
        </div>
        <div class="card-footer border-0 pt-0 pb-3 d-flex justify-content-center align-items-center">
            <a href="{{ route('article', $uid) }}" class="text-decoration-none text__semibold text__primary article_card_link">Voir l'article</a>
        </div>
    </div>
</div>