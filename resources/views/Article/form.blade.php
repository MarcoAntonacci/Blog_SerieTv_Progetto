<x-layout>





<section class="container mt-5">
    <div class="row">
        <div class="col-12 ">
            <h2 class="fs-2 fw-bold">CREA IL TUO ARTICOLO</h2>
        </div>
    </div>
</section>

<section class="container my-5">
    <div class="row">
            @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <div class="col-12 md-6 ">
            <form method="POST" action="{{route('article.store')}}" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                  <label for="exampleInputEmail1" class="form-label text-color fs-4">Titolo</label>
                  <input type="text" name="title" class="form-control"  value="{{old('title')}}">
                </div>
                <div class="mb-3 mt-5">
                    <label for="image" class="form-label text-color fs-4">Immagine</label>
                    <input type="file"  name="img" class="form-control" id="image">
                </div>
                    <div class="mb-3">
                <textarea name="description" id="description" cols="50" rows="5"> {{old('description')}}</textarea>
                    </div>
                    <button type="submit" class="btn btn-color rounded-pill">Crea</button>
                </form>
            </div>
    </div>
</section>








</x-layout>