@extends('layout.clients.master');
@section('content')


<div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 mfliud">
    <form class="border p-3 rounded">
        
        <div class="row">
            <div class="form-group col-md-6">
                <label>First Name *</label>
                <input type="text" class="form-control" placeholder="First Name">
            </div>
            <div class="form-group col-md-6">
                <label>Last Name</label>
                <input type="text" class="form-control" placeholder="Last Name">
            </div>
        </div>
        
        <div class="form-group">
            <label>Email *</label>
            <input type="text" class="form-control" placeholder="Username*">
        </div>
        
        <div class="row">
            <div class="form-group col-md-6">
                <label>Password *</label>
                <input type="password" class="form-control" placeholder="Password*">
            </div>
            
            <div class="form-group col-md-6">
                <label>Confirm Password *</label>
                <input type="password" class="form-control" placeholder="Confirm Password*">
            </div>
        </div>
        
        <div class="form-group">
            <p>By registering your details, you agree with our Terms & Conditions, and Privacy and Cookie Policy.</p>
        </div>
        
        <div class="form-group">
            <div class="d-flex align-items-center justify-content-between">
                <div class="flex-1">
                    <input id="ddd" class="checkbox-custom" name="ddd" type="checkbox">
                    <label for="ddd" class="checkbox-custom-label">Sign me up for the Newsletter!</label>
                </div>		
            </div>
        </div>
        
        <div class="form-group">
            <button type="submit" class="btn btn-md full-width bg-dark text-light fs-md ft-medium">Create An Account</button>
        </div>
    </form>
</div>
@endsection