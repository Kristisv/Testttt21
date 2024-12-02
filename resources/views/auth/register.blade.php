@extends('layouts.app')

@section('content')
    <div class="container">
        <h1 class="title">{{ __('messages.registration') }}</h1>

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <div class="field">
                <label for="name" class="label">{{ __('messages.name') }}</label>
                <div class="control">
                    <input type="text" class="input" id="name" name="name" required autofocus>
                </div>
            </div>

            <div class="field">
                <label for="email" class="label">{{ __('messages.email') }}</label>
                <div class="control">
                    <input type="email" class="input" id="email" name="email" required>
                </div>
            </div>

            <div class="field">
                <label for="password" class="label">{{ __('messages.password') }}</label>
                <div class="control">
                    <input type="password" class="input" id="password" name="password" required>
                </div>
            </div>

            <div class="field">
                <label for="password_confirmation" class="label">{{ __('messages.repeat_password') }}</label>
                <div class="control">
                    <input type="password" class="input" id="password_confirmation" name="password_confirmation" required>
                </div>
            </div>

            <div class="field">
                <label for="role" class="label">{{ __('messages.role') }}</label>
                <div class="control">
                    <div class="select">
                        <select name="role" required>
                            <option value="client">{{ __('messages.client') }}</option>
                            <option value="employee">{{ __('messages.employee') }}</option>
                            <option value="admin">{{ __('messages.administrator') }}</option>
                        </select>
                    </div>
                </div>
            </div>

            <button type="submit" class="button is-primary">{{ __('messages.register') }}</button>
        </form>
    </div>
@endsection
