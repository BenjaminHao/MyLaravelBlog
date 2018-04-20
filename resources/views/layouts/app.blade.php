<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title', 'Benjamin Hao\'s Homepage') - Benjamin Hao's Homepage</title>

    <!-- Styles -->
    <link href="/css/app.css" rel="stylesheet">

    <!-- Scripts -->
    <script>
        window.Laravel = <?php echo json_encode([
            'csrfToken' => csrf_token(),
        ]); ?>
    </script>
</head>
<body>

    @include('layouts._header')

    <div class="container">
        @include('shared.messages')
        @yield('content')
        @include('layouts._footer')
    </div>

    <!-- Scripts -->
    <script src="/js/app.js"></script>
</body>
</html>
