@extends('admin.layout.index')
@section('content')
<!-- Page Container START -->
            <!-- Page Container START -->
            <div class="page-container">
                <!-- Content Wrapper START -->
                <div class="main-content">
                    <div class="container-fluid">
                        <div class="page-header">
                            <h2 class="header-title">Thêm giải đấu</h2>
                            <div class="header-sub-title">
                                <nav class="breadcrumb breadcrumb-dash">
                                    <a href="#" class="breadcrumb-item"><i class="ti-home p-r-5"></i>Home</a>
                                    <a class="breadcrumb-item" href="#">Giải đấu</a>
                                    <span class="breadcrumb-item active">Thêm</span>
                                </nav>
                            </div>
                        </div>  
				<div class="col-md-4">
					@if(count($errors) >0)
						<div class="alert alert-danger">
							@foreach ($errors -> all() as $key)
								{{$key}}<br>
							@endforeach
						</div>
					@endif

					@if(session('notifi'))
						<div class="alert alert-success">
							{{session('notifi')}}
						</div>

					@endif
                                        <div class="form-group">
                                        	<form action="admin/tournament/add" method="POST">
                                        		<input type="hidden" name="_token" value="{{csrf_token()}}"/>
                                            <label class="control-label">Thêm giải đấu</label>
                                            <div class="fix">
                                                <label>Giải đấu</label>
                                                <input placeholder="Nhập tên giải đấu" name="name" type="text" class="form-control" >
                                                <label>Mùa giải</label>
                                                <input placeholder="Nhập mùa giải" name="year" type="text" class="form-control" >
                                                <button class="btn btn-gradient-info ">Thêm</button>
                                                </div>
                                                </form>
                                        </div>

            </div>
@endsection