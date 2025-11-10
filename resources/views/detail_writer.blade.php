@extends('layouts.app')
@section('title', 'Articles by ' . $writer->name)
@section('content')

    <?php
        $image_file = 'default.jpg'; 

        if ($writer->slug == 'raka-putra-wicaksono') {
            $image_file = 'MenA.png';
        } elseif ($writer->slug == 'bia-mecca-annisa') {
            $image_file = 'WomenA.jpg';
        } elseif ($writer->slug == 'abi-firmansyah') {
            $image_file = 'MenB.jpg';
        }
    ?>

    <div class="d-flex align-items-center mb-5 p-3 bg-white rounded shadow-sm">
        <img src="{{ asset('img/writers/' . $image_file) }}" 
             alt="{{ $writer->name }}" 
             style="width: 100px; height: 100px; object-fit: cover;"
             class="rounded-circle me-4 border border-3 border-success">
        <div>
            <h3 class="mb-0 fw-bold text-dark">{{ $writer->name }}</h3>
            <p class="text-primary fs-6">{{ $writer->specialty }}</p>
        </div>
    </div>

    <h2 class="mb-4">Artikel Ditulis Oleh {{ $writer->name }}</h2>

    @foreach ($posts as $post)
        <div class="article-box">
            <div class="article-thumb">
                <p class="m-0">Image Placeholder</p>
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