@extends('admin.admin')

@section('title', 'Article List')

@section('content')
<table class="z-table">
    <tr>
        <th>Title</th>
        <th>Introduction</th>
        <th>Operation</th>
    </tr>
    @foreach ($articles as $article)
        <tr>
            <td><a href="{{ route('article.edit', $article->id) }}">{{ $article->title }}</a></td>
            <td>{{ $article->intro }}</td>
            <td>
                <!-- Edit button -->
                <a href="{{ route('article.edit', $article->id) }}" style="display: inline-block;"><span class="glyphicon glyphicon-edit"></span></a>
                <!-- Delete button -->
                <form action="{{ route('article.destroy', $article->id) }}" method="post" style="display: inline-block;">
                    {{ csrf_field() }}
                    {{ method_field('DELETE') }}
                    <button type="submit" style="color: #F08080;background-color: transparent;border: none;"><span class="glyphicon glyphicon-minus-sign"></span></button>
                </form>
            </td>
        </tr>
    @endforeach
</table>

{{ $articles->render() }}
@endsection
