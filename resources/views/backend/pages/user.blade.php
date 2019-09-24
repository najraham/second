@extends('backend.layouts.layout')

@section('content')
    <div class="app-title">
        <ul class="app-breadcrumb breadcrumb">
            <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
            <li class="breadcrumb-item"><a href="{{route('show_dashboard_page')}}">Dashboard</a></li>
            <li class="breadcrumb-item"><a href="{{route('show_dashboard_user_page', ['type' => 'ALL'])}}">User</a></li>
        </ul>
    </div>

    <div class="tile">
        <div class="row">
            <div class="col-md-3">
                <h3 class="tile-title">{{strtoupper($title)}}</h3>
            </div>
            <div class="tab col-md-3">
                <a href="{{route('show_dashboard_user_page', ['type' => 'ALL'])}}" class="tablinks btn btn-primary @if ($filter == 'ALL') active @endif">All</a>
                <a href="{{route('show_dashboard_user_page', ['type' => 'ADMIN'])}}" class="tablinks btn btn-primary @if ($filter == 'ADMIN') active @endif">Admin</a>
                <a href="{{route('show_dashboard_user_page', ['type' => 'NORMAL'])}}" class="tablinks btn btn-primary @if ($filter == 'NORMAL') active @endif">Normal</a>
            </div>
            <div class="col-md-1 offset-md-5">
                <button class="btn btn-primary btn-sm" onclick="$('#add-user').modal('show');"><i class="fa fa-user-plus mr-1"></i> Add</button>
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
                            @else
                                Normal
                            @endif
                        </td>
                        <td style="width:150px">
                            <div class="row">
                                <div class="col">
                                    <button class="btn btn-primary btn-sm" onclick="openEditModal('{{$user->id}}', '{{$user->name}}', '{{$user->email}}', '{{$user->password}}', '{{$user->type}}')">
                                        <i class="fa fa-edit"></i>
                                    </button>
                                </div>
                                <div class="col">
                                    <button class="btn btn-danger btn-sm" onclick="deleteUser('{{$user->id}}')">
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

    {{-- add user modal --}}
    <div class="modal fade" id="add-user" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Add User</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="{{route('add_user')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="name" class="control-label">Name</label>
                            <input class="form-control @if ($errors->has('name')) is-invalid @endif" type="text" name="name" id="name" value="{{old('name')}}">
                            {!! $errors->first('name', '<div class="text-danger">:message</div>') !!}
                        </div>
                        <div class="form-group">
                            <label for="email" class="control-label">E-mail</label>
                            <input type="text" class="form-control @if ($errors->has('email')) is-invalid @endif" name="email" id="email" value="{{old('email')}}">
                            {!! $errors->first('email', '<div class="text-danger">:message</div>') !!}
                        </div>
                        <div class="form-group">
                            <label for="password" class="control-label">Pasword</label>
                            <input type="text" class="form-control @if ($errors->has('password')) is-invalid @endif" name="password" id="password" value="{{old('password')}}">
                            {!! $errors->first('password', '<div class="text-danger">:message</div>') !!}
                        </div>
                        <div class="form-group">
                            <label for="password_confirmation" class="control-label">Pasword</label>
                            <input type="text" class="form-control @if ($errors->has('password')) is-invalid @endif" name="password_confirmation" id="password_confirmation" value="{{old('password')}}">
                            {!! $errors->first('password', '<div class="text-danger">:message</div>') !!}
                        </div>
                        <div class="form-group">
                                <label for="type">Type:</label>
                                <select class="form-control" id="type" name="type">
                                    <option value="0">-- Select user type --</option>
                                    <option value="1">Admin</option>
                                    <option value="2">Normal</option>
                                </select>
                            </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary" id="save-button">Save</button>
                        <button class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    {{-- edit user modal --}}
    <div class="modal fade" id="edit-user" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Add User</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="{{route('edit_user')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="modal-body">
                        <input type="hidden" name="edit-id" id="edit-id">
                        <div class="form-group">
                            <label for="edit-name" class="control-label">Name</label>
                            <input class="form-control" type="text" name="edit-name" id="edit-name">
                        </div>
                        <div class="form-group">
                            <label for="edit-email" class="control-label">E-mail</label>
                            <input type="text" class="form-control" name="edit-email" id="edit-email">
                        </div>
                        <div class="form-group">
                            <label for="edit-type">Type:</label>
                            <select class="form-control" id="edit-type" name="edit-type">
                                <option id="1" value="1">Admin</option>
                                <option id="2" value="2">Normal</option>
                            </select>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary" id="save-button">Save</button>
                        <button class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script>
        function openEditModal(id, name, email, password, type){
            $('#edit-id').attr('value', id);
            $('#edit-name').attr('value', name);
            $('#edit-email').attr('value', email);
            if(type==1){
                $('#1').attr('selected', "selected");
            }
            else{
                $('#2').attr('selected', "selected");
            }
            $('#edit-user').modal('show');
        }

        function deleteUser(id){
            swal({
                title: "Are you sure?",
                text: "You will not be able to recover this data!",
                type: "warning",
                showCancelButton: true,
                confirmButtonText: "Yes, delete it!",
                cancelButtonText: "No, cancel it!",
                closeOnConfirm: false,
                closeOnCancel: false
            },
            function(isConfirm) {
                if (isConfirm) {
                    $.ajax({
                        type: 'GET',
                        url: `/api/deleteUser/${id}`,
                        data: {
                        },
                        success:function(data){
                            swal("Deleted!", "Your data has been deleted.", "success");
                            location.reload(true);
                        }
                    });

                } else {
                    swal("Cancelled", "Your data is safe :)", "error");
                }
            });
        }
    </script>
@endsection
