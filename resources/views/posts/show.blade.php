@extends('app')

@section('title', $post['title'])

@section('content')
    <div class="container my-5">
        <h1 class="title is-2">{{ $post['title'] }}</h1>
        <div class="content">
            <p>{{ $post['content'] }}</p>
        </div>
        <p class="has-text-right">
            <small class="has-text-grey">{{ __('messages.published_at') }}: {{ \Carbon\Carbon::parse($post['created_at'])->format('M d, Y') }}</small>
        </p>
    </div>
@endsection
