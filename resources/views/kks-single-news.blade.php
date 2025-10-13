@extends('layouts.app')

@section('title', $news->news_name)

@section('content')
<div class="container py-5">
    <h1 class="text-primary text-center mb-4 bold">{{ $news->news_name }}</h1>
    <div class="text-center mb-4">
        <img src="{{ asset('storage/' . $news->news_photo) }}" class="img-fluid" alt="{{ $news->news_name }}">
    </div>
    <p>{{ $news->news_description }}</p>
    <a href="{{ route('news.index') }}" class="btn btn-primary mt-3">Back to All News</a>
</div>
@endsection
