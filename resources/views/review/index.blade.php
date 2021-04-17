<x-layout>


    <section class="container my-5">
        <div class="row justify-content-around">
            @foreach ($reviews as $review)
                
            
          <div class="col-12 col-md-3">
              <div class="card my-3" style="width: 21rem;">
                  <img class="card-img-top" src="{{Storage::url($review->img)}}" alt="Card image cap">
                  <div class="card-body">
                    <h5 class="card-title fs-3 fw-bold ">{{$review->title}}</h5>
                    <p class="card-text">{{$review->description}}</p>
                    <a href="{{route('review.show' , compact('review'))}}" class="btn btn-color rounded-pill">Scopri di più</a>
                  </div>
                </div>
          </div>
          @endforeach
        </div>
        
    </section>

</x-layout>