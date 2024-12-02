@extends('layouts.app')

@section('title', 'Konferencijos peržiūra')

@section('content')
    <h1>{{ $conference->title }}</h1>
    <p>{{ $conference->description }}</p>
    <p><strong>Data ir laikas:</strong> {{ \Carbon\Carbon::parse($conference->date_time)->format('Y-m-d H:i') }}</p>
    <p><strong>Vieta:</strong> {{ $conference->location }}</p>
    <a href="{{ route('conferences.index') }}" class="btn btn-primary">Atgal į sąrašą</a>
@endsection
