@extends('layouts.app')

@section('title', __('messages.edit_conference'))

@section('content')
    <div class="container mt-5">
        <div class="columns is-centered">
            <div class="column is-half">
                <div class="box">
                    <div class="has-background-dark has-text-white p-4">
                        <h4 class="title is-4">{{ __('messages.edit_conference') }}</h4>
                    </div>

                    <div class="box p-4">
                        <form action="{{ route('conferences.update', $conference->id) }}" method="POST">
                            @csrf
                            @method('PUT')

                            <div class="field mb-3">
                                <label for="title" class="label">{{ __('messages.title') }}</label>
                                <div class="control">
                                    <input type="text" name="title" id="title" class="input" value="{{ $conference->title }}" required>
                                </div>
                            </div>

                            <div class="field mb-3">
                                <label for="description" class="label">{{ __('messages.description') }}</label>
                                <div class="control">
                                    <textarea name="description" id="description" class="textarea" required>{{ $conference->description }}</textarea>
                                </div>
                            </div>

                            <div class="field mb-3">
                                <label for="date_time" class="label">{{ __('messages.date_time') }}</label>
                                <div class="control">
                                    <input type="datetime-local" name="date_time" id="date_time" class="input" value="{{ \Carbon\Carbon::parse($conference->date_time)->format('Y-m-d\TH:i') }}" required>
                                </div>
                            </div>

                            <div class="field mb-3">
                                <label for="location" class="label">{{ __('messages.location') }}</label>
                                <div class="control">
                                    <input type="text" name="location" id="location" class="input" value="{{ $conference->location }}" required>
                                </div>
                            </div>

                            <div class="field">
                                <div class="control">
                                    <button type="submit" class="button is-primary">{{ __('messages.update_conference') }}</button>
                                </div>
                            </div>
                        </form>

                        <form action="{{ route('conferences.destroy', $conference->id) }}" method="POST" style="margin-top: 20px;">
                            @csrf
                            @method('DELETE')
                            <div class="field">
                                <div class="control">
                                    <button type="submit" class="button is-danger" onclick="return confirm('{{ __('messages.delete_confirmation') }}')">{{ __('messages.delete_conference') }}</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
