@extends('layouts.app')

@section('content')
    <div class="container mt-5">
        <div class="columns is-centered">
            <div class="column is-half">
                <div class="box">
                    <div class="has-text-white p-4">
                        <h4 class="title is-4">{{ __('messages.create_conference') }}</h4>
                    </div>

                    <div class="box p-4">
                        <form action="{{ route('conferences.store') }}" method="POST">
                            @csrf

                            <div class="field mb-3">
                                <label for="title" class="label">{{ __('messages.title') }}</label>
                                <div class="control">
                                    <input type="text" name="title" id="title" class="input" placeholder="{{ __('messages.enter_title') }}" required>
                                </div>
                            </div>

                            <div class="field mb-3">
                                <label for="description" class="label">{{ __('messages.description') }}</label>
                                <div class="control">
                                    <textarea name="description" id="description" class="textarea" placeholder="{{ __('messages.enter_description') }}" rows="4" required></textarea>
                                </div>
                            </div>

                            <div class="field mb-3">
                                <label for="date_time" class="label">{{ __('messages.date_time') }}</label>
                                <div class="control">
                                    <input type="datetime-local" name="date_time" id="date_time" class="input" required>
                                </div>
                            </div>

                            <div class="field mb-3">
                                <label for="location" class="label">{{ __('messages.location') }}</label>
                                <div class="control">
                                    <input type="text" name="location" id="location" class="input" placeholder="{{ __('messages.enter_location') }}" required>
                                </div>
                            </div>

                            <div class="field">
                                <div class="control">
                                    <button type="submit" class="button is-success">{{ __('messages.save_conference') }}</button>
                                    <a href="{{ route('conferences.index') }}" class="button is-light">{{ __('messages.back') }}</a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
