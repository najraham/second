@extends('backend.layouts.layout')

@section('content')
    <div class="tile">
        <div class="row">
            <div class="col-md-6">
                <h3 class="tile-title">{{strtoupper($title)}}</h3>
            </div>
            <div class="col-md-1 offset-md-5">
                <button class="btn btn-primary btn-sm" onclick="$('#add-project').modal('show');"><i class="fa fa-plus mr-1"></i> Add</button>
            </div>
        </div>
        <table class="table table-hover">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Title</th>
                    <th>Description</th>
                    {{-- <th>Project Link</th> --}}
                    <th>Operations</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($projects as $project)
                    <tr class="table-info">
                        <td>{{$project->id}}</td>
                        <td class="multiline_td" id="Title">{{$project->title}}</td>
                        <td class="multiline_td">{{$project->description}}</td>
                        {{-- <td class="multiline_td">{{$project->link}}</td> --}}
                        <td style="width:150px">
                            <div class="row">
                                <div class="col">
                                    <button class="btn btn-primary btn-sm" onclick="openEditModal('{{$project->id}}', '{{$project->title}}' , '{{$project->description}}' , '{{$project->image}}' , '{{$project->link}}')">
                                        <i class="fa fa-edit"></i>
                                    </button>
                                </div>
                                <div class="col">
                                    <button class="btn btn-danger btn-sm" onclick="deleteProject('{{$project->id}}')">
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

    {{-- add project modal --}}
    <div class="modal fade" id="add-project" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Add Project</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="{{route('add_project')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    {{-- <input type="hidden" name="id" id="id"> --}}
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="title" class="control-label">Title</label>
                            <input class="form-control" type="text" name="title" id="title">
                        </div>
                        <div class="form-group">
                            <label for="link" class="control-label">Project Link</label>
                            <input type="text" class="form-control" name="link" id="link">
                        </div>
                        <div class="form-group">
                            <label for="description" class="control-label">Description</label>
                            <textarea class="form-control" name="description" id="description" cols="30" rows="5"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="image" class="control-label">Choose project photo : </label>
                            <input type="file" name="image" id="image" >
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

    {{-- edit project modal --}}
    <div class="modal fade" id="edit-project" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Edit Project</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="{{route('edit_project')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="edit-id" id="edit-id">
                    <div class="modal-body">
                        <div class="row col-md-12">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="edit-title" class="control-label">Title</label>
                                    <input class="form-control" type="text" name="edit-title" id="edit-title">
                                </div>
                                <div class="form-group">
                                    <label for="edit-link" class="control-label">Project Link</label>
                                    <input type="text" class="form-control" name="edit-link" id="edit-link">
                                </div>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="edit-pre-image" class="control-label">Image</label>
                                <img name="edit-pre-image" class="form-control" id="edit-pre-image" src="" style="width:150px" alt="">
                            </div>
                        </div>
                        <div class="row col-md-12">
                            <div class="form-group col-md-6">
                                <label for="edit-description" class="control-label">Description</label>
                                <textarea class="form-control" name="edit-description" id="edit-description" cols="30" rows="5"></textarea>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="edit-image" class="control-label">Choose Another?</label>
                                <input type="file" name="edit-image" id="edit-image">
                            </div>
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
        function openEditModal(id, title, description, image, link){
            $('#edit-title').attr('value' , title);
            $('#edit-description').text(description);
            $('#edit-pre-image').attr('src' , `{{asset('storage/backend/images/${image}')}}`);
            $('#edit-id').attr('value' , id);
            $('#edit-link').attr('value' , link);
            $('#edit-project').modal('show');
        }

        function deleteProject(id){
            // console.log(image_index)
            // successNotify(i , "delete");
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
                        url: `/api/deleteProject/${id}`,
                        data: {
                        },
                        success:function(data){
                            swal("Deleted!", "The data has been deleted.", "success");
                            location.reload(true);
                        }
                    });

                } else {
                    swal("Cancelled", "The data is safe :)", "error");
                }
            });
        }
    </script>
@endsection
