@extends('admin.layout.index')
@section('content')
<!-- Page Container START -->
            <div class="page-container">
                <!-- Quick View START -->
                <!-- Side Panel END -->

                <!-- Content Wrapper START -->
                <div class="main-content">
                    <div class="container-fluid">
                        <div class="page-header">
                            <h2 class="header-title">Danh sách</h2>
                            <div class="header-sub-title">
                                <nav class="breadcrumb breadcrumb-dash">
                                    <a href="#" class="breadcrumb-item"><i class="ti-home p-r-5"></i>Trang chủ</a>
                                    <a class="breadcrumb-item" href="admin/club/list">Câu lạc bộ</a>
                                    <span class="breadcrumb-item active">Danh sách</span>
                                </nav>
                            </div>
                        </div>  
                        @if(session('notifi'))
                        <div class="alert alert-success">
                            {{session('notifi')}}
                        </div>

                    @endif
                        <div class="card">
                            <div class="card-body">
                                <div class="table-overflow">
                                    <table id="dt-opt" class="table table-hover table-xl">
                                        <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>Name</th>
                                                <th>Location</th>
                                                <th>Establish</th>
                                                <th>logo</th>
                                               <th class="text-center">Tác vụ</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($club as $key)
                                            <tr>
                                                <td>{{$key -> id}}</td>
                                                <td>{{$key -> name}}</td>
                                                <td>{{$key -> location}}</td>
                                                <td>{{$key -> establish}}</td>
                                                <td><img width="100px" height="100px" src="upload/news/{{$key->logo}}"
                                                    {{$key -> logo}}</td>
                                                <td class="text-center font-size-18">
                                                    <a href="admin/club/edit/{{$key->id}}" class="text-gray m-r-15"><i class="ti-pencil"></i></a>
                                                    <a href="admin/club/delete/{{$key->id}}" class="text-gray"><i class="ti-trash"></i></a>
                                                </td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
            </div>
@endsection
