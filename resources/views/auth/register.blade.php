<x-layout>

    <div class="container my-5">
        <div class="row">
            <div class="col-12 col-md-6 offset-md-3 mt-5">
                <h2>Registrati</h2>
            </div>
        </div>
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
            <div class="col-12 col-md-4 offset-4">
                <form method="POST" action="{{route('register')}}">
                    @csrf
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" name="name" class="form-control mt-3" id="name"  placeholder="Enter name">                     
                      </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Email address</label>
                        <input type="email" name="email" class="form-control mt-3" id="exampleInputEmail1"  placeholder="Enter email">                     
                      </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1" class="mt-2">Password</label>
                      <input type="password"  name="password" class="form-control mt-3" id="exampleInputPassword1" placeholder="Password">
                    </div>
                    <div class="form-group">
                        <label for="password_confirmation" class="mt-2">Password Confirmation</label>
                        <input type="password"  name="password_confirmation" class="form-control mt-3" id="password_confirmation" placeholder="Password">
                      </div>
                    <button type="submit" class="btn btn-color rounded-pill mt-4">Submit</button>
                  </form> 
            </div>
        </div>
    </div>
</x-layout>