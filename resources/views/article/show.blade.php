@extends('layouts.app')

@section('title', 'Index')

@section('content')
<div class="row">
    <div class="col-md-9">
        <!-- 文章信息 -->
        <div class="z-panel">
            <div class="z-panel-header">
                <h3>{{ $article->title }}</h3>
                <span>View：{{ $article->view }}</span>
                <span>Comment：{{ $article->comment }}</span>
                <span>Created At: {{ $article->created_at }}</span>
            </div>
            <div class="z-panel-body" style="padding:20px;">
                <img src="/img/article/2.jpg" style="width: 100%; margin-bottom:20px;">
                {!! $article->content !!}
            </div>
        </div>
    </div>

    <div class="col-md-3">
        <!-- author info -->
        @include('shared.author_info')

        <!-- Hot article  -->
        @include('shared.article_hot')

        <!-- new comment -->
        @include('shared.comment_new')
    </div>
</div>
@endsection
