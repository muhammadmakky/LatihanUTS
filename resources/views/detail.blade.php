@extends('layouts.app')
@section('title', $post->title)
@section('content')
    
    <h1 class="display-5">{{ $post->title }}</h1> [cite: 23]
    <small class="text-muted mb-4 d-block">
        {{ $post->published_at->format('d M Y') }} by: {{ $post->writer->name }} [cite: 23]
    </small>
    
    <div class="content-body mt-4">
        {!! $post->body !!} [cite: 23]
    </div>

@endsection