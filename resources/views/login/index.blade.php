@extends('layouts.main')

@section('styles')
   <link rel="stylesheet" href="css/login.css">
   <style>
      footer {
         position: fixed
      }
   </style>
@endsection

@section('container')

@if(session()->has('success'))
<div class="alert alert-success d-flex align-items-center" role="alert">
   <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"/></svg>
   <div>
     {{ session('success') }}
   </div>
 </div>
 @endif

 @if(session()->has('loginError'))
<div class="alert alert-danger d-flex align-items-center" role="alert">
   <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"/></svg>
   <div>
     {{ session('loginError') }}
   </div>
 </div>
 @endif

<div class="wrapper">
  <div class="card-switch">
      <label class="switch">
         <div class="flip-card__inner">
            <div class="flip-card__front">
               <div class="title">Log in</div>
               <form class="flip-card__form" action="/login" method="POST">
                  @csrf
                  <input class="flip-card__input form-control @error('email') is-invalid @enderror" name="username" id="username" placeholder="UserName or Email" type="text" autofocus required value="{{ old('email') }}">
                  @error('email')
                     {{ message }}
                  @enderror
                  <input class="flip-card__input form-control" name="password" id="password" placeholder="Password" type="password" required>
                  <input class="flip-card__btn form-control" type="submit" value="Let's Go">
               </form>
               <p>Haven't account? <a href="/register">Register</a></p>
            </div>
         </div>
      </label>
  </div>   
</div>
@endsection