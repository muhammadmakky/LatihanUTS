@extends('layouts.app')
@section('title', $category->name)
@section('content')
    
    <h1 class="mb-5 text-dark fw-bold border-bottom pb-2">{{ $category->name }}</h1>

    @foreach ($posts as $post)
        <div class="article-box">
            <div class="article-thumb">
                <p class="m-0">{{ strtoupper(substr($post->category->name, 0, 3)) }} ARTIKEL</p>
                <small class="text-white-50 mt-1">{{ $post->category->name }}</small>
            </div>

            <div class="flex-grow-1">
                <h4 class="mb-1 text-dark fw-bold">{{ $post->title }}</h4>
                <small class="text-muted d-block mb-2">
                    <span class="fw-bold">{{ $post->published_at->format('d M Y') }}</span> by {{ $post->writer->name }}
                </small>
                <p class="card-text mb-3 text-secondary">{{ $post->excerpt }}</p>
                <a href="{{ route('post.show', $post->slug) }}" class="read-more-btn float-end">read more...</a>
            </div>
        </div>
    @endforeach

@endsection