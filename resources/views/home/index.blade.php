@extends('layouts.app')

@section('content')
    <div class="container my-5">
        <h1 class="mb-4 has-text-centered">{{ __('messages.conference_list') }}</h1>

        <div class="table-container">
            <table class="table is-bordered is-striped is-fullwidth">
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
                @foreach($conferences as $conference)
                    <tr>
                        <td>{{ $conference->title }}</td>
                        <td>{{ $conference->description }}</td>
                        <td>{{ \Carbon\Carbon::parse($conference->date_time)->format('Y-m-d H:i') }}</td>
                        <td>{{ $conference->location }}</td>
                        <td>
                            <div class="buttons">
                                <a href="{{ route('conferences.edit', $conference->id) }}" class="button is-warning is-light">{{ __('messages.edit') }}</a>
                                <a href="{{ route('conferences.show', $conference->id) }}" class="button is-info is-light">{{ __('messages.view') }}</a>
                                <form action="{{ route('conferences.destroy', $conference->id) }}" method="POST" style="display: inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="button is-danger is-light">{{ __('messages.delete') }}</button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>

        <a href="{{ route('conferences.create') }}" class="button is-success">{{ __('messages.create_new_conference') }}</a>
    </div>
@endsection
