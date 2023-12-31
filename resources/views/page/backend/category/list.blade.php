@extends('page.backend.index')

@section('content')

<div class="container mb-3">
	<div class="row" style="align-items: center;">
		<div class="col-4">
			<h1>Product list</h1>
		</div>
		
		<div class="btn_form col-8">
			@include('page.backend.form.btn_form' , [
			'url_add' => 'products/categories/add',
			'url_edit' => 'products/categories/editProduct',
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
	'nameTitle' => ['name', 'image' , 'decription'],
	'list' => ['name' ,'image'  , 'decription'],
	'url' =>'products/categories/edit',
	'url_delete'=>'products/deleteProduct'
	])
</div>

@endsection