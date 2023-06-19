@extends('page.backend.index')

@section('content')
    <div class="container">
        <h1>Edit Products</h1>
        @include('page.backend.form.form' , [
            'action' => 'products/updateProduct',
            'method' => 'POST',
            'titleType' => 'text',
            'titleValue' => old('title'),
            'inputCount' => 8,
            'inputNames' => ['name', 'price' , 'image' , 'title' , 'material' , 'color' , 'status' , 'id_category' , 'weight' , 'dimension'],
            'TitleNames' => ['name', 'price' , 'image' , 'title' , 'material' , 'color' , 'status' , 'Danh mục' , 'weight' , 'dimension'],
            'inputTypes' => ['text', 'number', 'file', 'text', 'text', 'text', 'number', 'number', 'number' , 'number' , 'number'],
            'buttonText' => 'Update Product'
        ])
    </div>

@endsection