@extends('backend.app')

@section('title', 'Page Title')

@section('content')
<div class="col-md-10">
	<a><i class="glyphicon glyphicon-arrow-left"></i> Quay lai</a>
	<div class="row">
		
		<div class="col-sm-9">
			<div class="content-box-large">

				<span>Tiêu đề:</span>
				<input type="text" class="form-control" name="">
				<textarea id="ckeditor_standard"></textarea> </br>
				<span>Từ khóa:</span>
				<input type="" name="" placeholder="Nhập từ khóa SEO" class="form-control"></br>
				<span>Mô tả trang:</span>
				<textarea rows="4" cols="50" placeholder="Nhập mô tả trang" class="form-control"></textarea>
			</div>
		</div>
		<div class="col-sm-3">
			<div class="content-box-large">
				<span>Trang cha: </span>
				<select class="form-control">
					<option>(no parent)</option>
				</select>

				<button class="btn btn-success btn-add" > Thêm mới  </button>

			</div>
		</div>
	</div>
</div>
@endsection