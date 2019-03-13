@extends('admin.layout.index')
@section('content')
<!-- Page Container START -->
            <!-- Page Container START -->
            <div class="page-container">
                <!-- Quick View START -->
                <!-- Side Panel END -->

                <!-- Content Wrapper START -->
                <div class="main-content">
                    <div class="container-fluid">
                        <div class="page-header">
                            <h2 class="header-title">Thêm tin tức</h2>
                            <div class="header-sub-title">
                                <nav class="breadcrumb breadcrumb-dash">
                                    <a href="#" class="breadcrumb-item"><i class="ti-home p-r-5"></i>Home</a>
                                    <a class="breadcrumb-item" href="#">Tin tức</a>
                                    <span class="breadcrumb-item active">Thêm</span>
                                </nav>
                            </div>
                        </div>  
				<div class="col-md-4">
					@if(count($errors) >0)
						<div class="alert alert-danger">
							@foreach ($errors -> all() as $k)
								{{$k}}<br>
							@endforeach
						</div>
					@endif

					@if(session('notifi'))
						<div class="alert alert-success">
							{{session('notifi')}}
						</div>

					@endif
                                        <div class="form-group">
                                        	<form action="admin/news/edit/{{$news->id}}" method="POST" enctype="multipart/form-data">
                                        		<input type="hidden" name="_token" value="{{csrf_token()}}"/>
                                            <div class="col-md-4">
                                         <div class="fix">
                                        <div class="form-group">
                                            <label class="">Chọn thể loại</label>
                                                <select class="form-control fix-option" name="category">
                                                	@foreach($category as $key)
                                                    <option 
                                                      value="{{$key->id}}" >{{$key->name}}
                                                 </option>
                                                    @endforeach
                                                </select>
                                        </div>
                                            	<label>Tiêu đề</label>
                                                <input placeholder="Nhập tiêu đề" value="{{$news->tittle}}" name="tittle" type="text" class="form-control" >
                                                <label>Tác giả</label>
                                                <input placeholder="Nhập tác gỉa" value="{{$news->author}}" name="author" type="text" class="form-control" >
                                                <label>Mô tả</label>
                                                <textarea style="height: 150px;width: 700px;" value="" placeholder="Nhập mô tả" name="description" type="text" class="form-control" >{{$news->description}}</textarea>
                                                <label>Nội dung</label>
                                                <textarea class="ckeditor fix-ckeditor" id="editor" value=""  name="content"  >{!!$news->content!!}</textarea>
                                                <div class="form-group">
                                                    <label>Chọn ảnh</label>
                                                    <input value="" type="file" name="file" class="form-control">
                                                    <td><img width="100px" height="100px" src="upload/news/{{$news->image}}"
                                                    {{$news -> image}}</td>
                                                </div>
                                                <button type="submit" class="btn btn-gradient-info ">Sửa</button>
                                             </div>
                                          </form>
                                        </div>

            </div>
@endsection