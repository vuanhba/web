@extends('page.backend.index')
@section('title',' Edit User')
@section('content')
    
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="row">
                <div class="col-sm-8 m-auto">
                    <div class="card">
                        <div class="card-body">
                            <div class="title-header option-title">
                                <h5>{{$pageTitle}}</h5>
                            </div>
                            <div class="tab-content" id="pills-tabContent">
                                <div class="tab-pane fade show active" id="pills-home" role="tabpanel">
                                    <form  action="{{ route('user.update', $user->id) }}" method="post" class="theme-form theme-form-2 mega-form">
                                        @csrf
                                                @method('PUT')
                                        <div class="card-header-1">
                                            <h5>Product Information</h5>
                                        </div>

                                        <div class="row">
                                            <div class="mb-4 row align-items-center">
                                                <label
                                                    class="form-label-title col-lg-2 col-md-3 mb-0">Full
                                                    Name</label>
                                                <div class="col-md-9 col-lg-10">
                                                    <input class="form-control" type="text" name="full_name" value="{{ $user->full_name}}"/>

                                                    @error('full_name')
                                                    <span class="col-md-9 col-lg-10" style="color: red">{{$message}}</span>
                                                 @enderror
                                                </div>
                                                
                                            </div>

                                            
                                            <div class="mb-4 row align-items-center">
                                                <label
                                                    class="col-lg-2 col-md-3 col-form-label form-label-title">Email
                                                    Address</label>
                                                <div class="col-md-9 col-lg-10">
                                                    <input class="form-control" type="email" name="email" value="{{ $user->email}}">
                                                    @error('email')
                                                    <span class="col-md-9 col-lg-10" style="color: red">{{$message}}</span>
                                                     @enderror
                                                </div>
                                            </div>

                                            <div class="mb-4 row align-items-center">
                                                <label
                                                    class="col-lg-2 col-md-3 col-form-label form-label-title">Password</label>
                                                <div class="col-md-9 col-lg-10">
                                                    <input class="form-control" type="password" name="password" value="{{ $user->password}}">
                                                    @error('password')
                                                    <span class="col-md-9 col-lg-10" style="color: red">{{$message}}</span>
                                                     @enderror
                                                </div>
                                            </div>
                                            <div class="mb-4 row align-items-center">
                                                <label
                                                class="col-lg-2 col-md-3 col-form-label form-label-title">Roles</label>
                                                <div class="col-md-9 col-lg-10">
                                                    <select class="form-control" name="id_role" id=""   style="width: 100%">
                                                        @foreach ($role as $item)
                                                        <option value="{{$item->id}}" {{$user->id_role === $item->id ? 'selected' : ''}}>{{$item->name}}</option>
  
                                                        @endforeach
        
                                                    </select>

                                                </div>
                                            
                                        </div>

                                        </div>
                                    <button type="submit" class="btn btn-light" style="text-align: center">Submid</button>
                                   
 
                                    </form>
                                </div>

                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection