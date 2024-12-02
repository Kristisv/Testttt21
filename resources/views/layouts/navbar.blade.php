<nav class="navbar is-dark">
    <div class="navbar-menu">
        <div class="navbar-start">
            <a class="navbar-item" href="{{ route('home') }}">{{ __('messages.home') }}</a>
            <a class="navbar-item" href="{{ route('conferences.index') }}">{{ __('messages.conferences') }}</a>
        </div>

        <div class="navbar-end">
            @auth
                <div class="navbar-item">
                    <a href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="button is-light">
                        {{ __('messages.logout') }}
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </div>
            @else
                <a class="navbar-item" href="{{ route('login') }}">{{ __('messages.login') }}</a>
                <a class="navbar-item" href="{{ route('register') }}">{{ __('messages.register') }}</a>
            @endauth
        </div>
    </div>
</nav>
