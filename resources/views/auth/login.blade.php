@extends('layouts.app')

@section('content')
    <div class="container">
        <h1 class="title">{{ __('messages.login_section') }}</h1>
        <form method="POST" action="{{ route('login') }}">
            @csrf
            <div class="field">
                <label for="email" class="label">{{ __('messages.email') }}</label>
                <div class="control">
                    <input type="email" name="email" id="email" class="input" required>
                </div>
            </div>
            <div class="field">
                <label for="password" class="label">{{ __('messages.password') }}</label>
                <div class="control">
                    <input type="password" name="password" id="password" class="input" required>
                </div>
            </div>
            <button type="submit" class="button is-primary">{{ __('messages.login') }}</button>
        </form>
    </div>
@endsection
