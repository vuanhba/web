@extends('page.backend.index')

@section('content')
    <div class="container">
        <h1>Edit Brand</h1>
        @include('page.backend.form.form' , [
            'action' => 'products/brands/update',
            'method' => 'POST',
            'titleType' => 'text',
            'titleValue' => old('title'),
            'inputCount' => 3,
            'inputNames' => ['name', 'image' , 'deprecation'],
            'TitleNames' => ['name', 'image' , 'deprecation'],
            'inputTypes' => ['text', 'file' , 'textarea'],
            'buttonText' => 'Update Brand'
        ])
    </div>

@endsection