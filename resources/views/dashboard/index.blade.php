@extends('layouts.main')

@section('container')
        <h1>Solusi Orang Stress</h1>
        <p>Chat Psikolog, kunjungi rumah sakit, konsultasi, cek lab dan update informasi seputar mental,<br> semua bisa di Halodoc!</p>
        
        <div style="display: flex; ">
            <div class="card" style="width: 18rem; margin-right:30px; box-shadow: 0px 2px 5px rgb(0 0 0 / 42%);">
                <img src="img/chat.png" class="card-img-top" alt="..." style="max-width: 40%; margin-top:10px; align-self: center;">
                <div class="card-body">
                    <h5 class="card-title">Chat Psikolog</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="btn btn-primary button">Chat</a>
                </div>
            </div>
            <div class="card" style="width: 18rem; margin-right:30px; box-shadow: 0px 2px 5px rgb(0 0 0 / 42%);">
                <img src="img/janji.png" class="card-img-top" alt="..." style="max-width: 40%; margin-top:10px; align-self: center;">
                <div class="card-body">
                    <h5 class="card-title">Buat Janji</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="btn btn-primary button">Buat</a>
                </div>
            </div>
            <div class="card" style="width: 18rem; margin-right:30px; box-shadow: 0px 2px 5px rgb(0 0 0 / 42%);">
                <img src="img/konsul.png" class="card-img-top" alt="..." style="max-width: 40%; margin-top:10px; align-self: center">
                <div class="card-body">
                    <h5 class="card-title">konsultasi Gratis</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="btn btn-primary button">Konsultasi</a>
                </div>
            </div>
        </div>
@endsection