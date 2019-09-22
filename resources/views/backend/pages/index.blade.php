@extends('backend.layouts.layout')

@section('content')
    <div class="app-title">
        {{-- <div>
        <h1><i class="fa fa-dashboard"></i> Dashboard</h1>
        <p>A free and open source Bootstrap 4 admin template</p>
        </div> --}}
        <ul class="app-breadcrumb breadcrumb">
            <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
            <li class="breadcrumb-item"><a href="{{route('show_dashboard_page')}}">Dashboard</a></li>
            <li class="breadcrumb-item"><a href="{{route('show_dashboard_index_page')}}">Index</a></li>
        </ul>
    </div>

    <div class="tile">
        <h3 class="tile-title">{{strtoupper($title)}}</h3>
        <table class="table table-responsive table-hover">
            <thead>
                <tr>
                    <th>Title</th>
                    <th>Description</th>
                    <th>Operations</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td id="Title">{{$index->title}}</td>
                    <td id="Description">{{$index->description}}</td>
                    <td>
                        <button class="btn btn-primary btn-sm" onclick="$('#edit-index').modal('show');"><i class="fa fa-pencil-square" aria-hidden="true"></i>Edit</button>

                        {{-- edit index modal --}}
                        <div class="modal fade" id="edit-index" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLongTitle">{{strtoupper($title)}}</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <form>
                                            <div class="form-group">
                                                <label for="title" class="control-label">Title</label>
                                                <input id="title" name="title" class="form-control" type="text" placeholder="Enter title" value="{{$index->title}}">
                                            </div>
                                            <div class="form-group">
                                                <label for="description" class="control-label">Description</label>
                                                <textarea id="description" name="description" class="form-control" rows="5" placeholder="Enter description">{{$index->description}}</textarea>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="modal-footer">
                                        <button class="btn btn-primary" onclick="saveChanges({{$index->id}})">Save changes</button>
                                        <button class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>

    <div class="tile">
        <div class="row">
            <div class="col-md-6">
                <h3 class="tile-title">BANNER IMAGES</h3>
            </div>
            <div class="col-md-1 offset-md-5">
                <button class="btn btn-primary btn-sm" onclick="openAddModal('add-banner-image')"><i class="fa fa-plus mr-1"></i> Add</button>
            </div>
        </div>
        <table class="table table-hover" id="banner-table">
            <thead>
                <tr>
                    <th>S.N.</th>
                    <th>Image</th>
                    <th>Operations</th>
                </tr>
            </thead>
            <tbody>

                    @foreach ($index->banner_image as $key=>$image)
                        <tr>
                            <td>{{$key}}</td>
                            <td><img id="Image" src="{{asset('storage/backend/images/'.$image)}}" style="height:150px" alt=""></td>
                            <td>
                                <div class="row mt-5">
                                    <div class="mr-2">
                                        <button onclick="openEditModal('{{$image}}','{{$key}}')" class="btn btn-primary btn-sm"><i class="fa fa-file-image-o" aria-hidden="true"></i>Choose another</button>
                                    </div>
                                    <div class="ml-2">
                                        <button id="demoSwal" class="btn btn-danger btn-sm" onclick="delete_image('{{$key}}')"><i class="fa fa-trash" aria-hidden="true"></i>Delete</button>
                                    </div>
                                </div>
                            </td>
                        </tr>

                    @endforeach

            </tbody>
        </table>
    </div>

    {{-- add banner image modal --}}
    <div class="modal fade" id="add-banner-image" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle1">Banner Image</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="{{route('add_image')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="modal-body">
                        {{-- <input type="hidden" id="Key" name="key" value=""> --}}
                        <div class="row col-md-12">
                            <div class="form-group col-md-6 justify-content-center">
                                <label for="image" class="control-label">Choose new file</label>
                                <input type="file" name="image" id="image">
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

    {{-- edit banner image modal --}}
    <div class="modal fade" id="edit-banner-image" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Banner Image</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="{{route('edit_image')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="modal-body">
                        <input type="hidden" id="key" name="key" value="">
                        <div class="row col-md-12">
                            <div class="form-group col-md-6">
                                <label for="pre-image" class="control-label">Existing image</label>
                                <img class="form-control" id="pre-image" src="" style="width:250px" alt="">
                            </div>
                            <div class="form-group col-md-6 justify-content-center">
                                <label for="image" class="control-label">Choose Another</label>
                                <input type="file" name="image" id="image">
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
        function openAddModal(modal_id){
            $('#'+modal_id).modal('show');
        }

        function openEditModal(image , key){
            $('#pre-image').attr('src' , `{{asset('storage/backend/images/${image}')}}`);
            $('#key').attr('value' , key)
            $('#edit-banner-image').modal('show');
        }

        function saveChanges(id){
            $.ajax({
                type:'POST',
                url:'/api/editIndex/',
                data: {
                "_token": "{{ csrf_token() }}",
                "id": id,
                "title" : $('#title').val(),
                "description" : $('#description').val(),
                },
                success:function(data) {
                    $('#edit-index').modal('hide');
                    successNotify(data.message , "success");
                    $('#Title').text(data.index.title);
                    $('#Description').text(data.index.description);
                }
            });
        }

        function delete_image(image_index){
            console.log(image_index)
            // successNotify(i , "delete");
            swal({
                title: "Are you sure?",
                text: "You will not be able to recover this file!",
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
                        url: `/api/deleteImage/${image_index}`,
                        data: {
                        },
                        success:function(data){
                            swal("Deleted!", "Your file has been deleted.", "success");
                            location.reload(true);
                        }
                    });

                } else {
                    swal("Cancelled", "Your imaginary file is safe :)", "error");
                }
            });
        }


    </script>
@endsection
