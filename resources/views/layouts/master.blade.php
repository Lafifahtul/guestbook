<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Guestbook App</title>
    <!-- Include Bootstrap CSS here -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">    

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body>
<div class="container">
    <div class="card">
        <div class="card-body">
    @yield('content')
    <br>
    @if (Auth::check())
    <form method="post" action="{{ route('logout') }}" class="d-inline">
        @csrf
        <button type="submit" class="btn btn-light">Logout</button>
    </form>
@endif
        </div>
    </div>
</div>

    <!-- Include Bootstrap JS here -->
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
</body>
</html>
