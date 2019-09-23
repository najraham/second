@extends('backend.layouts.layout')

@section('content')
    <div class="tile">
        <div class="row">
            <div class="col-md-6">
                <h3 class="tile-title">{{strtoupper($title)}}</h3>
            </div>
            <div class="col-md-1 offset-md-5">
                <button class="btn btn-primary btn-sm" onclick="$('#add-service').modal('show');"><i class="fa fa-plus mr-1"></i> Add</button>
            </div>
        </div>
        <table class="table table-hover">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Title</th>
                    <th>Description</th>
                    <th>Operations</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($services as $service)
                    <tr>
                        <td>{{$service->id}}</td>
                        <td class="multiline_td" id="Title">{{$service->title}}</td>
                        <td class="multiline_td">{{$service->description}}</td>
                        <td>
                            <div class="row">
                                <div class="col">
                                    <button class="btn btn-primary btn-sm" onclick="openEditModal('{{$service->id}}' , '{{$service->title}}' , '{{$service->description}}' , '{{$service->icon}}')">
                                        <i class="fa fa-edit"></i>
                                    </button>
                                </div>
                                <div class="col">
                                    <button class="btn btn-danger btn-sm" onclick="deleteService('{{$service->id}}')">
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

    {{-- add service modal --}}
    <div class="modal fade" id="add-service" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Add Service</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="{{route('add_service')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    {{-- <input type="hidden" name="id" id="id"> --}}
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="title" class="control-label">Title</label>
                            <input class="form-control" type="text" name="title" id="title">
                        </div>
                        <div class="form-group">
                            <label for="description" class="control-label">Description</label>
                            <textarea class="form-control" name="description" id="description" cols="30" rows="5"></textarea>
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

    {{-- edit service modal --}}
    <div class="modal fade" id="edit-service" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Edit Service</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="{{route('edit_service')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="edit-id" id="edit-id">
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="edit-title" class="control-label">Title</label>
                            <input class="form-control" type="text" name="edit-title" id="edit-title">
                        </div>
                        <div class="form-group">
                            <label for="edit-description" class="control-label">Description</label>
                            <textarea class="form-control" name="edit-description" id="edit-description" cols="30" rows="5"></textarea>
                        </div>
                        {{-- icon --}}
                        {{-- <div class="form-group">
                            <label for="sel1">Choose icon:</label>
                            <select class="form-control" id="sel1">
                                <option><i class="fa fa-edit"></i></option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                            </select>
                        </div> --}}
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
        function openEditModal(id, title, description, icon){
            $('#edit-id').attr('value', id);
            $('#edit-title').attr('value', title);
            $('#edit-description').text(description);
            $('#edit-service').modal('show');
        }

        function deleteService(id){
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
                        url: `/api/deleteService/${id}`,
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
