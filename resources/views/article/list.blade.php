@extends('layouts.app')

@section('title', 'Articles')

@section('content')
<div class="row">
    <div class="col-md-9">
        <!-- List of Articles -->
        <div class="z-panel">
            <div class="z-panel-header" style="text-align: left;">
                Articles
            </div>
            <div class="z-panel-body">
                @foreach ($articles as $article)
                    @include('shared.article')
                @endforeach
            </div>
        </div>

        {{ $articles->render() }}
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
