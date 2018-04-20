@extends('admin.admin')

@section('title', 'Edit Articles')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <h3>Edit Articles</h3>

            @include('shared.errors')

            {{--new article form--}}
            <form action="{{ route('article.update', $article->id) }}" method="post">
                {{ csrf_field() }}
                {{ method_field('PATCH') }}
                <input type="text" class="form-control" name="title" placeholder="Add A Title" value="{{ $article->title }}" style="margin-bottom: 20px;">
                <input type="text" class="form-control" name="intro" placeholder="Add An Introduction" value="{{ $article->intro }}" style="margin-bottom: 20px;">
                <textarea name="content" rows="20" style="width:100%;">{{ $article->content }}</textarea>
                <!-- <div class="form-group" style="margin-top: 20px;">
                    <label for="picture">Picture</label>
                    <input type="file" id="picture" name="picture">
                </div> -->
                <button type="submit" class="btn btn-default">Save</button>
            </form>

        </div>
    </div>
</div>
@endsection
