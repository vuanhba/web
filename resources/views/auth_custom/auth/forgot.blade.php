
@extends('layout.clients.master');
@section('content')
<div class="container">
    <div class="row align-items-start justify-content-between">    
        <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
            <h4>Please enter your email address to reset your password</h4>

            <form class="border p-3 rounded" method="POST" action="">
                @csrf			
                <div class="form-group">
                    <label>Email</label>
                    <input type="email" name="email" class="form-control" placeholder="Email*"   value="{{ old('email') }}" autocomplete="email" autofocus >
                   
                            @error('email')
                            <span class="col-md-9 col-lg-10" style="color: red">{{$message}}</span>
                         @enderror
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-md full-width bg-dark text-light fs-md ft-medium">Submid</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection