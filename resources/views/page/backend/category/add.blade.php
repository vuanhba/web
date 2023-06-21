@extends('page.backend.index')

@section('content')
    <div class="container">
        <h1>Add Categories</h1>
        @include('page.backend.form.form' , [
            'action' => 'products/categories/addCategories',
            'method' => 'POST',
            'titleType' => 'text',
            'titleValue' => old('title'),
            'inputCount' => 3,
            'inputNames' => ['name', 'image' , 'deprecation'],
            'TitleNames' => ['name', 'image' , 'deprecation'],
            'inputTypes' => ['text', 'file' , 'textarea'],
            'buttonText' => 'Add Categories'
        ])
    </div>

@endsection