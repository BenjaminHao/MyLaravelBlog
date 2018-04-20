<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title', 'Backend') - Benjamin Hao's Homepage</title>

    <!-- Styles -->
    <link href="/css/app.css" rel="stylesheet">
    @yield('styles')

    <!-- Scripts -->
    <script>
        window.Laravel = <?php echo json_encode([
                'csrfToken' => csrf_token(),
        ]); ?>
    </script>
</head>
<body>
    {{--LeftSide--}}
    <div class="z-admin-menu">
        <div class="header">Backend</div>
        <ul CLASS="list">

            <li><a href="{{ route('admin') }}"><span class="glyphicon glyphicon-cog"></span>Panel</a></li>

            <li><a href="#article-admin" data-toggle="collapse"><span class="glyphicon glyphicon-cog"></span>Articles</a></li>
            <ul id="article-admin" class="collapse">
                <li><a href="{{ route('article.create') }}">New Article</a></li>
                <li><a href="{{ route('article.index') }}">Article list</a></li>
            </ul>


            <li><a href="#collapse2" data-toggle="collapse"><span class="glyphicon glyphicon-cog"></span>Menu3</a></li>
            <ul id="collapse2" class="collapse">
                <li><a href="">Menu31</a></li>
                <li><a href="">Menu32</a></li>
                <li><a href="">Menu33</a></li>
                <li><a href="">Menu31</a></li>
                <li><a href="">Menu32</a></li>
                <li><a href="">Menu33</a></li>
                <li><a href="">Menu31</a></li>
                <li><a href="">Menu32</a></li>
                <li><a href="">Menu33</a></li>
                <li><a href="">Menu31</a></li>
                <li><a href="">Menu32</a></li>
                <li><a href="">Menu33</a></li>
                <li><a href="">Menu31</a></li>
                <li><a href="">Menu32</a></li>
                <li><a href="">Menu33</a></li>
                <li><a href="">Menu31</a></li>
                <li><a href="">Menu32</a></li>
                <li><a href="">Menu33</a></li>
                <li><a href="">Menu31</a></li>
                <li><a href="">Menu32</a></li>
                <li><a href="">Menu33</a></li>
            </ul>
        </ul>
    </div>
    {{--RightSide--}}
    <div class="z-admin-box">
        <div class="header">

        </div>
        <div class="content">
            @include('shared.messages')
            @yield('content')
        </div>

    </div>
</body>
<!-- Scripts -->
<script src="/js/app.js"></script>
@yield('scripts')
</html>
