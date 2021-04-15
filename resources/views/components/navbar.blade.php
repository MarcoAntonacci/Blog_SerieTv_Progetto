<nav class="navbar navbar-expand-lg navbar-light bg-dark">
    <a class="navbar-brand" href="{{route('home')}}">Serie Tv Addicted</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
  
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ms-auto">
          @guest
        <li class="nav-item active">
          <a class="nav-link active" href="{{route('home')}}">Home<span class="sr-only"></span></a>
        </li>
        <li class="nav-item active">
          <a class="nav-link active" href="{{route('login')}}">Login<span class="sr-only"></span></a>
        </li>
        <li class="nav-item active">
          <a class="nav-link active" href="{{route('register')}}">Register<span class="sr-only"></span></a>
        </li>
         @else
        <li class="nav-item">
          <a class="nav-link" href="{{route('article.create')}}">Inserisci Articolo</a>
        </li>
        <li>
          <a href="#" class="nav-link dropdown-toggle" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Ciao, {{Auth::user()->name}}
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a href="{{route('logout')}}" class="dropdown-item" onclick="event.preventDefault();document.getElementById('form-logout').submit();">Logout</a></li>
          <form method="POST" action="{{route('logout')}}" style="display:none" id="form-logout">
          @csrf
          </form>
          </ul>
        </li>
         @endguest
      </ul> 
    </div>
  </nav>