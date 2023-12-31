@extends('page.backend.index')

@section('content')
    @php 
        foreach($product as $p) {
            $category = $p->getCate()->name;
            
        }
    @endphp
    <div class="container">
        <h1>Add product</h1>
        @include('page.backend.form.form' , [
            'action' => 'products/addProducts',
            'method' => 'POST',
            'titleType' => 'text',
            'titleValue' => old('title'),
            'inputCount' => 8,
            'inputNames' => ['name', 'price' , 'image' , 'title' , 'material' , 'color' , 'status' , 'id_category' , 'weight' , 'dimension'],
            'TitleNames' => ['name', 'price' , 'image' , 'title' , 'material' , 'color' , 'status' , 'Danh mục' , 'weight' , 'dimension'],
            'inputTypes' => ['text', 'number', 'file', 'text', 'text', 'text', 'number', 'number', 'select' , 'number' , 'number'],
            'buttonText' => 'Add Product'
        ])
    </div>

@endsection