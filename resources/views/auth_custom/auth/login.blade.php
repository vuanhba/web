@extends('layout.clients.master');
@section('content')
    

<section class="middle">
    <div class="container">
        @if (session('message'))
            <div class="alert alert-danger">
                {{ session('message') }}
            </div>
        @endif
        <div class="row align-items-start justify-content-between">
            
            <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                <form class="border p-3 rounded" method="POST" action="{{ route('clients.login') }}">
                    @csrf			
                    <div class="form-group">
                        <label>Email</label>
                        <input type="email" name="email" class="form-control" placeholder="Email*"   value="{{ old('email') }}" autocomplete="email" autofocus >
                       
                                @error('email')
                                <span class="col-md-9 col-lg-10" style="color: red">{{$message}}</span>
                             @enderror
                    </div>
                    
                    <div class="form-group">
                        <label>Password *</label>
                        <input type="password" class="form-control" placeholder="Password*"     name="password"autocomplete="current-password">
                        @error('password')
                        <span class="col-md-9 col-lg-10" style="color: red">{{$message}}</span>
                     @enderror
                    </div>
                    
                    <div class="form-group">
                        <div class="d-flex align-items-center justify-content-between">
                            <div class="flex-1">
                                <input id="dd" class="checkbox-custom"  type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}>
                                <label for="dd" class="checkbox-custom-label">Remember Me</label>
                            </div>
                            @if(Route::has('clients.forgot-password'))	
                            <div class="eltio_k2">
                                <a href="{{route('clients.forgot-password')}}">Lost Your Password?</a>
                            </div>	
                            @endif
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <button type="submit" class="btn btn-md full-width bg-dark text-light fs-md ft-medium">Login</button>
                    </div>
                </form>
            </div>
            
         
            
        </div>
    </div>
</section>
@endsection