@extends('layouts.main')

@section('styles')
   <link rel="stylesheet" href="css/login.css">
@endsection

@section('container')
<div class="wrapper">
  <div class="card-switch">
      <label class="switch">
         <div class="flip-card__inner">
            <div class="flip-card__front">
                <div class="title">Sign up</div>
                <form class="flip-card__form" action="/register" method="POST">
                  @csrf
                   <input class="flip-card__input @error('name') form-control is-invalid @enderror" placeholder="Name" type="name" name="name" id="name" value="{{ old('name') }}">
                     @error('name')
                        <div class="invalid-feedback">
                           {{ $message }}
                        </div>
                     @enderror
                   <input class="flip-card__input @error('username') form-control is-invalid @enderror" placeholder="Username" type="name" name="username" id="username" value="{{ old('username') }}">
                     @error('username')
                        <div class="invalid-feedback">
                           {{ $message }}
                        </div>
                     @enderror
                   <input class="flip-card__input @error('email') form-control is-invalid @enderror" name="email" placeholder="Email" type="email" id="email" value="{{ old('email') }}">
                     @error('email')
                        <div class="invalid-feedback">
                           {{ $message }}
                        </div>
                     @enderror
                   <input class="flip-card__input @error('password') form-control is-invalid @enderror" name="password" placeholder="Password" type="password" id="password">
                   @error('password')
                   <div class="invalid-feedback">
                      {{ $message }}
                   </div>
                @enderror
                   <input type="hidden" name="_token" value="{{ csrf_token() }}">
                   <input type="submit" class="flip-card__btn">
                </form>
                <p>Have account? <a href="/login">Login</a></p>
            </div>
         </div>
      </label>
  </div>   
</div>
@endsection