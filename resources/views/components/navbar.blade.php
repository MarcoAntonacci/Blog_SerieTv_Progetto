<nav class="navbar navbar-expand-lg navbar-color sticky-top">
    <a class="navbar-brand text-color-2 mx-3 fs-2" href="{{route('home')}}">Netflics</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon ">
        <i class="fas fa-bars text-color-2"></i>
      </span>
    </button>
  
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ms-auto">
          @guest
        <li class="nav-item active">
          <a class="nav-link active a-color fs-5" href="{{route('home')}}">Home<span class="sr-only"></span></a>
        </li>
        <li class="nav-item active">
          <a class="nav-link active a-color fs-5" href="{{route('login')}}">Login<span class="sr-only"></span></a>
        </li>
        <li class="nav-item active">
          <a class="nav-link active a-color fs-5" href="{{route('register')}}">Register<span class="sr-only"></span></a>
        </li>
         @else
        <li class="nav-item">
          <a class="nav-link a-color fs-5 mx-2" href="{{route('article.create')}}">Inserisci Articolo</a>
        </li>
        <li class="nav-item">
          <a class="nav-link a-color fs-5 mx-2" href="{{route('review.create')}}">Inserisci Recensione</a>
        </li>
        <li>
          <a href="#" class="nav-link dropdown-toggle a-color fs-5 mx-2" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Ciao, {{Auth::user()->name}}
          </a>
          <ul class="dropdown-menu bg-dark" aria-labelledby="navbarDropdown">
            <li><a href="{{route('logout')}}" class="dropdown-item text-color-2 fs-5" onclick="event.preventDefault();document.getElementById('form-logout').submit();">Logout</a></li>
          <form method="POST" action="{{route('logout')}}"  id="form-logout">
          @csrf
          </form>
          </ul>
        </li>
         @endguest
      </ul> 
    </div>
  </nav>
