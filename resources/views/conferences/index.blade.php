@extends('layouts.app')

@section('title', __('messages.conference_list'))

@section('content')
    <div class="container mt-5">
        <h1 class="title">{{ __('messages.conference_list') }}</h1>

        @if (session('success'))
            <div class="notification is-success">
                {{ session('success') }}
            </div>
        @endif

        <a href="{{ route('conferences.create') }}" class="button is-primary mb-4">{{ __('messages.create_new_conference') }}</a>

        <table class="table is-striped is-fullwidth">
            <thead>
            <tr>
                <th>{{ __('messages.title') }}</th>
                <th>{{ __('messages.description') }}</th>
                <th>{{ __('messages.date_time') }}</th>
                <th>{{ __('messages.location') }}</th>
                <th>{{ __('messages.actions') }}</th>
            </tr>
            </thead>
            <tbody>
            @foreach ($conferences as $conference)
                <tr>
                    <td><a href="{{ route('conferences.show', $conference->id) }}">{{ $conference->title }}</a></td>
                    <td>{{ $conference->description }}</td>
                    <td>{{ \Carbon\Carbon::parse($conference->date_time)->format('Y-m-d H:i') }}</td>
                    <td>{{ $conference->location }}</td>
                    <td>
                        <a href="{{ route('conferences.edit', $conference->id) }}" class="button is-warning is-small">{{ __('messages.edit') }}</a>
                        <a href="{{ route('conferences.show', $conference->id) }}" class="button is-info is-small">{{ __('messages.view') }}</a>
                        <form action="{{ route('conferences.destroy', $conference->id) }}" method="POST" style="display:inline;" onsubmit="return confirm('{{ __('messages.delete_confirmation') }}');">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="button is-danger is-small">{{ __('messages.delete') }}</button>
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection
