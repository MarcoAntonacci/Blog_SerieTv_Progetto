<x-layout>



    <section class="container my-5">
        <div class="row">
            <div class="col-12 col-md-3">
              <div class="card" style="width: 18rem;">
                  <img class="card-img-top" src="{{Storage::url($review->img)}}" alt="Card image cap">
                  <div class="card-body">
                    <h5 class="card-title fs-3 fw-bold ">{{$review->title}}</h5>
                    <p class="card-text">{{$review->description}}</p>
                    <a href="{{route('review.auth', ['auth'=>$review->user->id])}}" class="card-text">{{$review->user->name}}</a>
                    <a href="{{route('review.index')}}" class="btn btn-color rounded-pill">Torna indietro</a>

                    @if ($review->user->name == Auth::user()->name)
                    <a href="{{route('review.edit', compact('review'))}}" class="btn btn-color rounded-pill">Modifica</a>

                    <form method="POST" action="{{route('review.destroy', compact('review'))}}">
                    @csrf
                    @method('delete')
                    <button type="submit" class="btn btn-color rounded-pill mt-1">Cancella</button>
                  </form>
                  @endif
                  </div>
                </div>
          </div>
           </div>
         </section>



</x-layout>