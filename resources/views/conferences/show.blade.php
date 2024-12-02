@extends('layouts.app')

@section('title', __('messages.conference_details'))

@section('content')
    <div class="container mt-5">
        <h1 class="title">{{ $conference->title }}</h1>
        <p>{{ $conference->description }}</p>
        <p><strong>{{ __('messages.date_time') }}:</strong> {{ \Carbon\Carbon::parse($conference->date_time)->format('Y-m-d H:i') }}</p>
        <p><strong>{{ __('messages.location') }}:</strong> {{ $conference->location }}</p>

        <a href="{{ route('conferences.index') }}" class="button is-primary mt-4">{{ __('messages.back_to_list') }}</a>
    </div>
@endsection
