<div class="z-article">
    <div class="row">
        <div class="col-md-4 picture">
            <a href="{{ route('article.show', $article->id) }}"><img src="/img/article/2.jpg"></a>
        </div>
        <div class="col-md-8 content">
            <a href="{{ route('article.show', $article->id) }}"><h5>{{ $article->title }}</h5></a>
            <span>View：{{ $article->view }}</span>
            <span>Commit：{{ $article->comment }}</span>
            <span>CreatedAt: {{ $article->created_at }}</span>
            <p>{{ $article->intro}}</p>
        </div>
    </div>
</div>
