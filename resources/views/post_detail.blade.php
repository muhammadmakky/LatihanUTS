@extends('layouts.app')
@section('title', $post->title)
@section('content')

    <article class="bg-white p-4 p-md-5 rounded shadow-sm">
        <h1 class="mb-3 text-dark fw-bold"></h1>
        <small class="text-muted d-block mb-4">
            <a href="{{ route('writer.show', $post->writer->slug) }}" class="text-decoration-none text-primary"></a>
            <a href="{{ route('category.show', $post->category->slug) }}" class="text-decoration-none text-primary"></a>
        </small>

        <div class="mb-5 rounded" style="height: 350px; background-color: #f0f0f0; display: flex; align-items: center; justify-content: center; background-image: url('https://via.placeholder.com/1200x350/505050/FFFFFF?text=DETAIL+ILLUSTRATION'); background-size: cover;">
            <p class="text-white-50 fw-light fs-4">Materi Lengkap</p>
        </div>

        <div class="mt-4 content-body fs-6" style="line-height: 1.8;">
        </div>
    </article>

@endsection