@extends('layouts.app')

@section('content')
    <div class="container my-5">
        <h1 class="title is-1">Welcome to the Conferences Page!</h1>

        @if (auth()->check())
            @if (auth()->user()->role === 'client')
                <section class="section">
                    <h2 class="title is-3">Client Information</h2>
                    <p class="content">You can view the upcoming conferences.</p>
                </section>
            @elseif (auth()->user()->role === 'employee')
                <section class="section">
                    <h2 class="title is-3">Employee Information</h2>
                    <p class="content">You can see the list of all conferences.</p>
                </section>
            @elseif (auth()->user()->role === 'admin')
                <section class="section">
                    <h2 class="title is-3">Administrator</h2>
                    <p class="content">You have the ability to edit conferences.</p>
                </section>
            @endif
        @endif
    </div>
@endsection
