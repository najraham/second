@extends('backend.layouts.layout')

@section('content')
<div class="tile">
    <div class="row">
        <div class="col-md-6">
            <h3 class="tile-title">{{strtoupper($title)}}</h3>
        </div>
        <div class="col-md-1 offset-md-5">
            <button class="btn btn-primary btn-sm" onclick="$('#add-testimony').modal('show');"><i class="fa fa-plus mr-1"></i> Add</button>
        </div>
    </div>
    <table class="table table-hover">
        <thead>
            <tr>
                <th>ID</th>
                <th>Saying</th>
                <th>Operations</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($testimonies as $testimony)
                <tr>
                    <td>{{$testimony->id}}</td>
                    <td class="multiline_td">{{$testimony->saying}}</td>
                    <td>
                        <div class="row">
                            <div class="col">
                                <button class="btn btn-primary btn-sm" onclick="openEditModal('{{$testimony->id}}', '{{$testimony->saying}}')">
                                    <i class="fa fa-edit"></i>
                                </button>
                            </div>
                            <div class="col">
                                <button class="btn btn-danger btn-sm">
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
<div class="modal fade" id="add-testimony" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
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
<div class="modal fade" id="edit-testimony" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Edit Testimony</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{route('edit_testimony')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="edit-id" id="edit-id">
                <div class="modal-body">
                    <div class="form-group">
                        <label for="edit-saying" class="control-label">Saying</label>
                        <input class="form-control" type="text" name="edit-saying" id="edit-saying">
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
    function openEditModal(id, saying){
        $('#edit-id').attr('value', id);
        $('#edit-saying').attr('value', saying);
        $('#edit-testimony').modal('show');
    }
</script>
@endsection
