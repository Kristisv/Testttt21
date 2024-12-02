<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Konferencijų Sistema')</title>
    <link href="https://cdn.jsdelivr.net/npm/bulma@0.9.4/css/bulma.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
</head>
<body>
<nav class="navbar is-light">
    <div class="navbar-brand">
        <a class="navbar-item" href="{{ route('home') }}">
            Konferencijų Sistema
        </a>
        <button class="navbar-burger" data-target="navbarMenu" aria-label="menu" aria-expanded="false">
            <span aria-hidden="true"></span>
            <span aria-hidden="true"></span>
            <span aria-hidden="true"></span>
        </button>
    </div>
    <div id="navbarMenu" class="navbar-menu">
        <div class="navbar-start">
            <a class="navbar-item" href="{{ route('home') }}">Pagrindinis</a>
            <a class="navbar-item" href="{{ route('admin.dashboard') }}">Administratoriaus Puslapis</a>
        </div>
    </div>
</nav>

<div class="container mt-4">
    @if (session('success'))
        <div class="notification is-success">{{ session('success') }}</div>
    @endif

    @if (session('error'))
        <div class="notification is-danger">{{ session('error') }}</div>
    @endif

    @yield('content')
</div>

<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bulma@0.9.4/js/bulma.min.js"></script>
<script src="{{ mix('js/app.js') }}"></script>
</body>
</html>
