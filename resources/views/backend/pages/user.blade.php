@extends('backend.layouts.layout')

@section('content')
    <div class="app-title">
        <ul class="app-breadcrumb breadcrumb">
            <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
            <li class="breadcrumb-item"><a href="{{route('show_dashboard_page')}}">Dashboard</a></li>
            <li class="breadcrumb-item"><a href="{{route('show_dashboard_user_page')}}">User</a></li>
        </ul>
    </div>

    <div class="tile">
        <div class="row">
            <div class="col-md-3">
                <h3 class="tile-title">{{strtoupper($title)}}</h3>
            </div>
            <div class="tab col-md-3">
                    <button class="tablinks" onclick="openTable('0')">All</button>
                    <button class="tablinks" onclick="openTable('1')">Admin</button>
                    <button class="tablinks" onclick="openTable('2')">Normal</button>
                  </div>
            <div class="col-md-1 offset-md-5">
                <button class="btn btn-primary btn-sm" onclick="$('#add-project').modal('show');"><i class="fa fa-user-plus mr-1"></i> Add</button>
            </div>
        </div>
        <table class="table table-hover" >
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>E-mail</th>
                    <th>Type</th>
                    <th>Operations</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($users as $user)
                    <tr class="table-info">
                        <td>{{$user->id}}</td>
                        <td class="multiline_td">{{$user->name}}</td>
                        <td class="multiline_td">{{$user->email}}</td>
                        <td>
                            @if ($user->type == 1)
                                Admin
                            @endif
                        </td>
                        {{-- <td class="multiline_td">{{$project->link}}</td> --}}
                        <td style="width:150px">
                            <div class="row">
                                <div class="col">
                                    <button class="btn btn-primary btn-sm" onclick="">
                                        <i class="fa fa-edit"></i>
                                    </button>
                                </div>
                                <div class="col">
                                    <button class="btn btn-danger btn-sm" onclick="">
                                        <i class="fa fa-trash"></i>
                                    </button>
                                </div>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <script>
        function openTable(type){
            $.ajax({
                type:'GET',
                url:`/api/showUserTable/${type}`,
                success:function(data) {
                    console.log(data);
                }
            });
        }
    </script>
@endsection
