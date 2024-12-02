@extends('app')

@section('title', __('messages.post_author'))

@section('content')
    <div class="container my-5">
        <h1 class="title has-text-centered">{{ $post['title'] }}</h1>
        <p class="subtitle">{{ __('messages.author') }}: {{ $post['author']['first_name'] }} {{ $post['author']['last_name'] }}</p>
    </div>
@endsection
