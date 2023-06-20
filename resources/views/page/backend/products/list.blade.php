@extends('page.backend.index')

@section('content')

<div class="container mb-3">
	<div class="row" style="align-items: center;">
		<div class="col-4">
			<h1 id="message">Product list</h1>
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

<div class="container mb-3" style="padding: 0px;">
	<div class="row py-3" style="align-items: center; border: 1px solid #e1e1e1;">
		<div class="form-group col-md-4">
			<label for="price">Giá</label>
			<div class="input-group">
				<div class="input-group-prepend">
					<span class="input-group-text">VNĐ</span>
				</div>
				<input type="number" class="form-control" id="price" name="price">
			</div>
		</div>
		<div class="form-group col-md-4">
			<label for="id_category">Danh mục sản phẩm</label>
			<select class="form-control" id="id_category" name="id_category">
				<option value="">-- Chọn danh mục --</option>
				@php
                    $uniqueCategories = [];
                @endphp

                @foreach ($data as $category)
                    @if ($category->getCate() && !in_array($category->getCate()->id, $uniqueCategories))
                        <option value="{{ $category->getCate()->id }}" {{ isset($category) && $category->getCate()->id == $category->id ? 'selected' : '' }}>
                            {{ $category->getCate()->name }}
                        </option>
                        @php
                            $uniqueCategories[] = $category->getCate()->id;
                        @endphp
                    @endif
                @endforeach
			</select>
		</div>
		<div class="form-group col-md-4">
			<label for="nameTitle">Tìm kiếm</label>
			<input type="text" class="form-control" id="nameTitle" name="nameTitle">
		</div>
		<div class="form-group col-md-4">
			<label for="status">Trạng thái sản phẩm</label>
			<select class="form-control" id="status" name="status">
				<option value="">-- Chọn trạng thái --</option>
				<option value="1">Hoạt động</option>
				<option value="0">Đã ẩn</option>
			</select>
		</div>
		<div class="form-group col-md-4">
			<label for="color">Màu sắc</label>
			<input type="text" class="form-control" id="color" name="color">
		</div>

		<div class="form-group col-md-4">
			<label for="material">Chất liệu</label>
			<input type="text" class="form-control" id="material" name="material">
		</div>

		<div class="form-group col-md-4">
			<label for="title">Tìm kiếm</label>
			<input type="text" class="form-control" id="title" name="title">
		</div>

		<div class="form-group col-md-4">
			<label for="image">Hình ảnh</label>
			<input type="file" class="form-control-file" id="image" name="image">
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