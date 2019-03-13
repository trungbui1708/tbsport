@extends('admin.layout.index')
@section('content')
<!-- Page Container START -->
            <div class="page-container">
                <!-- Content Wrapper START -->
                <div class="main-content">
                    <div class="container-fluid">
                        <div class="page-header">
                            <h2 class="header-title">Danh sách</h2>
                            <div class="header-sub-title">
                                <nav class="breadcrumb breadcrumb-dash">
                                    <a href="#" class="breadcrumb-item"><i class="ti-home p-r-5"></i>Trang chủ</a>
                                    <a class="breadcrumb-item" href="admin/rank/list">BXH</a>
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
                                                <th>CLub</th>
                                                <th>Match</th>
                                                <th>W</th>
                                                <th>L</th>
                                                <th>D</th>
                                                <th>GF</th>
                                                <th>GA</th>
                                                <th>GD</th>
                                                <th>Point</th>
                                               <th class="text-center">Tác vụ</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($rank as $key)
                                            <tr>
                                                <td>{{$key -> id}}</td>
                                                <td>{{$key ->clubs->name}}</td>
                                                <td>{{$key -> number_match}}</td>
                                                <td>{{$key -> won}}</td>
                                                <td>{{$key -> draw}}</td>
                                                <td>{{$key -> lost}}</td>
                                                <td>{{$key -> goals_for}}</td>
                                                <td>{{$key -> goals_against}}</td>
                                                <td>{{$key -> goals_difference}}</td>
                                                <td>{{$key -> point}}</td>
                                                <td class="text-center font-size-18">
                                                    <a href="admin/rank/edit/{{$key->id}}" class="text-gray m-r-15"><i class="ti-pencil"></i></a>
                                                    <a href="admin/rank/delete/{{$key->id}}" class="text-gray"><i class="ti-trash"></i></a>
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
