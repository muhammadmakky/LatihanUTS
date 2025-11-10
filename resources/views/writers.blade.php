@extends('layouts.app')
@section('title', 'Our Writers')
@section('content')
    
    <h1 class="mb-5 text-dark fw-bold border-bottom pb-2">Our Writers:</h1>
    
    <div class="row text-center">
        @foreach ($writers as $writer)
            <div class="col-md-4 mb-5">
                <a href="{{ route('writer.show', $writer->slug) }}" class="text-decoration-none text-dark">
            
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

                    <img src="{{ asset('img/writers/' . $image_file) }}" 
                         alt="{{ $writer->name }}" 
                         class="writer-circle mx-auto d-block mb-3">
                    
                    <h5 class="mb-1 fw-bold"></h5>
                    <p class="text-primary"></p>
                </a>
            </div>
        @endforeach
    </div>

@endsection