<nav class="navbar navbar-expand-lg navbar-light bg-light" style="text-shadow: 0 0 black; box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.1); margin: 10px; margin-bottom:0%">
  <div class="container-fluid" style="margin-right: 50px; margin-left:50px">
    <a class="navbar-brand" href="#">Library | {{ $title }}</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarText">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0" >
        <li class="nav-item">
          <a class="nav-link active" href="/">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/books">Books</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Aplikasi</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">Riwayat</a>
          </li>
      </ul>

      @auth
      <p style="margin-right:20px" class="">Welcome back, {{ auth()->user()->username }}</p>
      <ul class="nav-item dropdown" style="">
        <a class="nav-link dropdown-toggle text-dark" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">Menu</a>
        <ul class="dropdown-menu">
          <li><a class="dropdown-item" href="/profile">Profile</a></li>
          <li><a class="dropdown-item" href="#">blank</a></li>
          <li><hr class="dropdown-divider"></li>
          <form action="/logout" method="post">
            @csrf
            <button type="submit" class="dropdown-item">
              <i class="bi bi-box-arrow-right"></i> Logout
            </button>
          </form>
        </ul>
      </ul>
    </div>   
       @else
       <div>
         <a class="dropdown-item nav-item" href="/login"><i class="bi bi-box-arrow-in-right"></i> Login</a>
       </div>
      @endauth
  </div>
</nav>