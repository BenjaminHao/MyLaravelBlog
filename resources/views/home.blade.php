@extends('layouts.app')

@section('title', 'Home Page')

@section('content')
<div class="row">
    <div class="col-md-9">
        <!-- slides -->
        @include('shared.slides')

        <!-- new articles -->
        <div class="z-panel">
            <div class="z-panel-header" style="text-align: left;">
                New Articles
            </div>
            <div class="z-panel-body">
                @foreach ($articles_new as $article)
                    @include('shared.article')
                @endforeach
            </div>
        </div>
    </div>

    <div class="col-md-3">
        <!-- author info -->
        @include('shared.author_info')

        <!-- hot article -->
        @include('shared.article_hot')

        <!-- new comment -->
        @include('shared.comment_new')
    </div>
</div>
@endsection
