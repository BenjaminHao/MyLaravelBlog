<!-- hot article -->
<div class="z-panel">
    <div class="z-panel-header">
        Hot Articles
    </div>
    <div class="z-panel-body">
        <ul>
            @foreach ($articles_hot as $article)
                <li><a href="{{ route('article.show', $article->id) }}">{{ $article->title }}</a></li>
            @endforeach
        </ul>
    </div>
</div>
