<div class="d-flex flex-column flex-md-row comment_box mt-4">
    <div class="d-flex flex-md-column align-items-center comment_author my-1">
        <ion-icon name="person-outline" class="rounded-circle p-1"></ion-icon>
        <span style="text-indent: 5px;">{{ $author }}</span>
    </div>
    <div class="p-3 comment_content">
        <p>{{ $content }}</p>
        <div class="text-end">
            <small>Le {{ $comment_date }}</small>
        </div>
    </div>
</div>