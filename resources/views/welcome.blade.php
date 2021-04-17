<x-layout>

  <header class="masthead">
    <div class="container h-100">
      <div class="row h-100 align-items-center">
        <div class="col-12 text-center">
          <h1 class="display-2 fw-bold">NETFLICS</h1>
          <p class="lead fs-2 text-color ">Il blog sulle serie TV</p>
        </div>
      </div>
    </div>
  </header>
  
      <section class="my-5">
        <div class="row mx-3">
          <h5 class="text-color display-3 fw-bold ">TV shows</h5>
          <p class="text-color fs-2  ">Queste sono le serie TV scelte da voi:</p>
        </div>
      </section>
    
      <section class="container my-5">
          <div class="row ms-4">
              @foreach ($articles as $article)
                  
              
            <div class="col-12 col-md-3 my-3 ">
                <div class="card text-center" style="width: 18rem;">
                    <img class="card-img-top" src="{{Storage::url($article->img)}}" alt="Card image cap">
                    <div class="card-body">
                      <h5 class="card-title fs-3 fw-bold ">{{$article->title}}</h5>
                      <p class="card-text">{{$article->description}}</p>
                      <a href="{{route('dettaglio' , compact('article'))}}" class="btn btn-color rounded-pill">Scopri di più</a>
                    </div>
                  </div>
            </div>
            @endforeach
          </div>
          
      </section>


        <section class="container my-5">
          <div class="row">
            <div class="col-12 col-md-6 text-left">
              <h2 class="fs-2 fw-bold text-color mb-5">Se anche tu sei un amante di Serie Tv, inserisci qui la tua preferita!</h2>
              <img src="https://images.unsplash.com/photo-1489599849927-2ee91cede3ba?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80" alt="" class="img-fluid">
              <a href="{{route('article.create')}}" class="btn btn-color rounded-pill my-5">Inserisci</a>
            </div>
            <div class="col-12 col-md-6 text-left">
              <h2 class="fs-2 fw-bold text-color mb-5">Ti piacerebbe dare un'occhiata alle nostre recensioni?</h2>
              <img src="https://images.unsplash.com/photo-1485846234645-a62644f84728?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1340&q=80" alt="" class="img-fluid">
              <a href="{{route('review.index')}}" class="btn btn-color rounded-pill my-5">Clicca qui</a>
            </div>
             
          </div>
        </section>

     

</x-layout>