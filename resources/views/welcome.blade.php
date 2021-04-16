<x-layout>

    <header>
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
          </ol>
          <div class="carousel-inner" role="listbox">
            <!-- Slide One - Set the background image for this slide in the line below -->
            <div class="carousel-item active" style="background-image: url('https://cdn.hipwallpaper.com/i/59/5/iwKCbM.jpg')">
              <div class="carousel-caption d-none d-md-block">
                <h1 class="display-1 fw-bold">Serie Tv Addicted</h1>
                <p class="lead"></p>
              </div>
            </div>
            <!-- Slide Two - Set the background image for this slide in the line below -->
            <div class="carousel-item" style="background-image: url('https://static.techspot.com/images2/news/bigimage/2015/07/2015-07-17-image-13-j.webp')">
              <div class="carousel-caption d-none d-md-block">
                <h2 class="display-4">Second Slide</h2>
                <p class="lead">This is a description for the second slide.</p>
              </div>
            </div>
            <!-- Slide Three - Set the background image for this slide in the line below -->
            <div class="carousel-item" style="background-image: url('https://source.unsplash.com/szFUQoyvrxM/1920x1080')">
              <div class="carousel-caption d-none d-md-block">
                <h2 class="display-4">Third Slide</h2>
                <p class="lead">This is a description for the third slide.</p>
              </div>
            </div>
          </div>
          <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
              </a>
          <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
              </a>
        </div>
      </header>
      

      <section class="container my-5">
          <div class="row">
              @foreach ($articles as $article)
                  
              
            <div class="col-12 col-md-3">
                <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="{{Storage::url($article->img)}}" alt="Card image cap">
                    <div class="card-body">
                      <h5 class="card-title fs-3 fw-bold ">{{$article->title}}</h5>
                      <p class="card-text">{{$article->description}}</p>
                      <a href="{{route('dettaglio' , compact('article'))}}" class="btn btn-primary">Scopri di più</a>
                    </div>
                  </div>
            </div>
            @endforeach
          </div>
          
      </section>


        <section class="container">
          <div class="row">
            <div class="col-12 text-center">
              <h2 class="display-3 fw-bold">Se anche tu sei un amante di Serie Tv, inserisci qui la tua preferita!</h2>
              <a href="{{route('article.create')}}" class="btn btn-primary my-5">Inserisci</a>
            </div>
          </div>
        </section>

</x-layout>