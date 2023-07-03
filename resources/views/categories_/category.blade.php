@extends('layouts.main')

@section('styles') 
    <style>
        @media screen and (max-width: 600px) {
            .thumb-book {
            }
            .img-book {
                align-self: center;
                max-width: 150px;
            }
            .con-thumb {
                display: flex; 
                flex-direction: row; 
                flex-wrap: wrap; 
                justify-content: center; 
                margin-right: 10px; 
                margin-left: 10px; 
            }
            .thumb-book a {
                position: relative;
                display: flex;
                flex-direction: column;
                align-items: center;
                text-align: center;
            }
            .thumb-book div {
                position: absolute;
                top: 90%;
                left: 0;
                right: 0;
                transform: translateY(-80%);
                margin: 0;
                padding: 5px; /* Ubah padding menjadi 5px */
                background-color: rgba(255, 255, 255, 0.516);
                color: #000;
                display: flex;
                flex-direction: column;
                align-items: flex-start;
            }
        }

        @media screen and (min-width: 601px) and (max-width: 1024px) {
            .thumb-book {
                margin: 10px;
            }
            .img-book {
                align-self: center;
                max-width: 200px;
                height: 285px;
            }
            .con-thumb {
                display: flex; 
                flex-direction: row; 
                flex-wrap: wrap; 
                justify-content: center; 
                background-color: #ffffff00;
                max-width: 768px;
                margin: 0 auto;
            }
            .thumb-book a {
                position: relative;
                display: flex;
                flex-direction: column;
                align-items: center;
                text-align: center;
            }
            .thumb-book div {
                position: absolute;
                top: 90%;
                left: 0;
                right: 0;
                transform: translateY(-80%);
                margin: 0;
                padding: 5px; /* Ubah padding menjadi 5px */
                background-color: rgba(255, 255, 255, 0.741);
                color: #000;
                display: flex;
                flex-direction: column;
                align-items: flex-start;
            }
        }

        @media screen and (min-width: 1025px) {
            .thumb-book {
                margin: 10px;
            }
            .img-book {
                align-self: center;
                max-width: 200px;
                height: 285px;
            }
            .con-thumb {
                display: flex; 
                flex-direction: row; 
                flex-wrap: wrap; 
                justify-content: center; 
                background-color: #ffffff00;
                max-width: 960px;
                margin: 0 auto;
            }
            .thumb-book a {
                position: relative;
                display: flex;
                flex-direction: column;
                align-items: center;
                text-align: center;
            }
            .thumb-book div {
                position: absolute;
                top: 90%;
                left: 0;
                right: 0;
                transform: translateY(-80%);
                margin: 0;
                padding: 5px; /* Ubah padding menjadi 5px */
                background-color: rgba(255, 255, 255, 0.741);
                color: #000;
                display: flex;
                flex-direction: column;
                align-items: flex-start;
            }
        }
    </style>
@endsection

@section('container')
@include('partials.menu-category')

    <h1 class="text-center">Buku dalam kategori: <strong>{{ $category->name }}</strong></h1>
    <div class="con-thumb">
        @foreach ($book as $book)
            <div class="thumb-book m-2">
                <a href="/books/{{ $book->id }}">
                    <img class="rounded img-thumbnail default-image img-book" src="{{ asset('img/' . $book->thumbnail_url) }}" alt="{{ $book->title }}">
                    <div>
                        <h5 style="text-align: start;"><strong>{{ $book->title }}</strong></h5>
                        <h6 style="text-align: start;">{{ $book->author }}</h6>
                        <p style="text-align: start;">Status: 
                            @if ($book->borrowed_by == 0)
                                Tersedia
                            @else
                                Dipinjam
                            @endif
                        </p>
                    </div>
                </a>
            </div>
        @endforeach
    </div>
@endsection


@section('scripts')
<script>
    document.addEventListener('DOMContentLoaded', function() {
        var defaultImages = document.querySelectorAll('.default-image');

        defaultImages.forEach(function(img) {
            img.addEventListener('error', function() {
                this.src = 'img/default-book.svg';
                this.style.display = 'block';
            });
        });
    });
</script>
@endsection
    