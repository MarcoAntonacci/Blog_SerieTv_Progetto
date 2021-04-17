<x-layout>

    <div class="container my-5">
        <div class="row">
            <div class="col-12 col-md-6 offset-md-3 mt-5">
                <h2>Login</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-md-4 offset-4">
                <form method="POST" action="{{route('login')}}">
                    @csrf
                    <div class="form-group">
                      <label for="exampleInputEmail1">Email address</label>
                      <input type="email" name="email" class="form-control mt-3" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">                     
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1" class="mt-2">Password</label>
                      <input type="password"  name="password" class="form-control mt-3" id="exampleInputPassword1" placeholder="Password">
                    </div>
                    <button type="submit" class="btn btn-color rounded-pill mt-4">Submit</button>
                  </form> 
            </div>
        </div>
    </div>
</x-layout>