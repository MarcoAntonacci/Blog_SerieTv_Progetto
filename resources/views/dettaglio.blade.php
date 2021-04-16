<x-layout>



    <section class="container my-5">
        <div class="row">
            <div class="col-12 col-md-3">
              <div class="card" style="width: 18rem;">
                  <img class="card-img-top" src="{{Storage::url($article->img)}}" alt="Card image cap">
                  <div class="card-body">
                    <h5 class="card-title fs-3 fw-bold ">{{$article->title}}</h5>
                    <p class="card-text">{{$article->description}}</p>
                    <a href="{{route('home')}}" class="btn btn-primary">Torna alla home</a>
                  </div>
                </div>
          </div>
           </div>
         </section>



</x-layout>