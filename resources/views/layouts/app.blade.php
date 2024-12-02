<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ __('messages.conferences') }}</title>
    <link href="https://cdn.jsdelivr.net/npm/bulma@0.9.4/css/bulma.min.css" rel="stylesheet">
</head>
<body>
<nav class="navbar is-dark">
    <div class="navbar-brand">
        <a class="navbar-item" href="#">{{ __('messages.conferences') }}</a>
        <button class="button navbar-burger" data-target="navbarNav" aria-label="menu" aria-expanded="false">
            <span></span>
            <span></span>
            <span></span>
        </button>
    </div>
    <div id="navbarNav" class="navbar-menu">
        <div class="navbar-end">
            <a class="navbar-item" href="{{ route('home') }}">{{ __('messages.home') }}</a>
            <a class="navbar-item" href="{{ route('conferences.index') }}">{{ __('messages.conferences') }}</a>

            @guest
                <a class="navbar-item" href="{{ route('login') }}">{{ __('messages.login') }}</a>
                <a class="navbar-item" href="{{ route('register') }}">{{ __('messages.register') }}</a>
            @else
                <div class="navbar-item">
                    <form action="{{ route('logout') }}" method="POST">
                        @csrf
                        <button type="submit" class="button is-link is-light">{{ __('messages.logout') }}</button>
                    </form>
                </div>
            @endguest
        </div>
    </div>
</nav>

<div class="container">
    @yield('content')
</div>

<script src="https://cdn.jsdelivr.net/npm/bulma@0.9.4/js/bulma.bundle.min.js"></script>
</body>
</html>
