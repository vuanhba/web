@extends('page.backend.index')

@section('content')

<div class="container mb-3">
	<div class="row" style="align-items: center;">
		<div class="col-4">
			<h1>Product list</h1>
		</div>
		
		<div class="btn_form col-8">
			@include('page.backend.form.btn_form' , [
			'url_add' => 'products/add',
			'url_edit' => 'products/editProduct',
			'url_delete' => 'test',
			'url_duplicate' => 'test',
			'url_list' => 'test',
			'url_apply' => 'test'
			])
		</div>
	</div>
</div>	
<div class="container" style="overflow: auto;">
	@include('page.backend.form.list' , [
	'nameTitle' => ['name' , 'price' , 'image' , 'title' , 'material' , 'color' , 'status' , 'id_category'],
	'list' => ['name' , 'price' , 'image' , 'title' , 'material' , 'color' , 'status' , 'id_category'],
	'url' =>'products/editProduct',
	'url_delete'=>'products/deleteProduct'
	])
</div>

@endsection