<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <script src="{{ asset('js/app.js') }}" defer></script>
    <title>Laravel app - @yield('title')</title>
</head>
<body>
    <div class="d-flex flex-column flex-md-row aling-items-center p-3 px-md-4 bg-white border-buttom shadow-sm mb-3">
        <h5 class="my-0 mr-md-auto font-wight-normal">Laravel app</h5>
        <nav class="my-2 my-md-0 mr-md-3 mb-3">
            <a class="p-2 text-dark" href="{{ route('home.index') }}">Home</a>
            <a class="p-2 text-dark" href="{{ route('home.contact') }}">Contact</a>
            <a class="p-2 text-dark" href="{{ route('posts.index') }}">Blog post</a>
            <a class="p-2 text-dark" href="{{ route('posts.create') }}">Add blog post</a>
        </nav>
    </div>
    <div class="container">
        @if (session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
        @endif
        @yield('content')
    </div>
</body>
</html>