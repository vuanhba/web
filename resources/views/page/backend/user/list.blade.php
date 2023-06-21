@extends('page.backend.index')
@section('title',' Users')
@section('content')

@include('page.backend.user.mess')

 <h1>{{$pageTitle}}</h1>
 <a href="{{route('user.create')}}"> <button type="button" class="btn btn-primary">Add New User</button></a> <br><br>
    <table id="example" class="table table-striped" style="width:100%">
        <thead>
        
           

                
           
            <tr>
                <th>ST</th>
                <th>FullName</th>
                <th>Email</th>
                <th>Address</th>
                <th>Roles</th>
                <th>created_at</th>
                <th rowspan="2">Option</th>
                

               
            </tr>
        </thead>
      
        <tbody>
            @foreach ($users as $key => $item)
           
            
            <tr>
                <td>{{$key+1}}</td>
                <td>{{$item->full_name}}</td>
                <td>{{$item->email}}</td>
                <td>{{$item->address}}</td>
                <td>{{$item->role->name}}</td>
                <td>{{$item->created_at}}</td>
                <td><a href="{{ route('user.delete', ['id' => $item->id]) }}"> <button type="button" class="btn btn-primary">Delete</button></a></td>
                <td><a href="{{ route('user.edit', ['id' => $item->id]) }}"> <button type="button" class="btn btn-primary">edit</button></a></td>


             </tr>
                @endforeach
        </tbody>
      
    </table>
 
@endsection

