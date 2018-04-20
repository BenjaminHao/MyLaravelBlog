@extends('admin.admin')

@section('title', 'Create A New Article')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <h3>Create a new article</h3>

            @include('shared.errors')

            {{--new article form--}}
            <form action="{{ route('article.store') }}" method="post">
                {{ csrf_field() }}
                <input type="text" class="form-control" name="title" placeholder="Add A Title" style="margin-bottom: 20px;">
                <input type="text" class="form-control" name="intro" placeholder="Add An Introduction" style="margin-bottom: 20px;">
                <textarea name="content" rows="20" style="width:100%;"></textarea>
                <!-- <div class="form-group" style="margin-top: 20px;">
                    <label for="picture">Picture</label>
                    <input type="file" id="picture" name="picture">
                </div> -->
                <button type="submit" class="btn btn-default">Post Article</button>
            </form>

        </div>
    </div>
</div>
@endsection
