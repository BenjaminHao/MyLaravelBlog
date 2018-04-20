@extends('admin.admin')

@section('title', '编辑文章')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <h3>编辑文章</h3>

            @include('shared.errors')

            {{--新增文章表单--}}
            <form action="{{ route('article.update', $article->id) }}" method="post">
                {{ csrf_field() }}
                {{ method_field('PATCH') }}
                <input type="text" class="form-control" name="title" placeholder="请填写标题" value="{{ $article->title }}" style="margin-bottom: 20px;">
                <input type="text" class="form-control" name="intro" placeholder="请填写简介" value="{{ $article->intro }}" style="margin-bottom: 20px;">
                <textarea name="content" rows="20" style="width:100%;">{{ $article->content }}</textarea>
                <!-- <div class="form-group" style="margin-top: 20px;">
                    <label for="picture">上传封面图片</label>
                    <input type="file" id="picture" name="picture">
                </div> -->
                <button type="submit" class="btn btn-default">保存</button>
            </form>

        </div>
    </div>
</div>
@endsection
