@extends('app')

@section('title', __('messages.article_list'))

@section('content')
    <div class="container my-5">
        <h1 class="title has-text-centered">{{ __('messages.article_list') }}</h1>
        <div class="content">
            <ul>
                @foreach($posts as $post)
                    <li>
                        <p class="is-size-5">{{ $post['title'] }}</p>
                    </li>
                @endforeach
            </ul>
        </div>
    </div>
@endsection
