@extends('backend.app')

@section('title', 'Page Title')

@section('content')
<div class="col-md-10">
	<div class="header-pages">
		<ul>
			<li>
				<select class="form-control action">
					<option>Chọn thao tác</option>
					<option>Sửa</option>
					<option>Xóa</option>
				</select>
			</li>
			<li>
				<button class="btn btn-default action_excute" >Áp dụng </button>
			</li>
			<li class="pull-right"><a href="/fs/cpanel/pages/add" class="btn btn-success btn-add-pages">+ Thêm mới </a></li></li>
		</ul>	
	</div>
	<div class="wrapper-pages">
		<table class="table table-striped">
			<thead>
				<tr>
					<th class="text-center"><input type="checkbox" name=""></th>
					<th>Tiêu đề</th>
					<th class="text-center">Tác giả</th>
					<th class="text-center">Trạng thái</th>
					<th class="text-center">Ngày đăng</th>
					<th></th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td class="text-center "><input type="checkbox" name=""></td>
					<td><a href="">GIỚI THIỆU </a></td>
					<td class="text-center">admin </td>
					<td class="text-center">On </td>
					<td class="text-center"><p>Cập nhật lần cuối </p>05/09/2018</td>
					<td class="text-center">
						<div class="action-items">
							<a href=""><i class="glyphicon glyphicon-pencil" aria-hidden="true"></i></a>
							<a href=""><i class="glyphicon glyphicon-trash"></i>	</a>
						</div>
					</td>
				</tr>

			</tbody>
		</table>
	</div>
</div>
@endsection