@extends('backend.layouts.layout')

@section('content')

    <div class="app-title">
        <ul class="app-breadcrumb breadcrumb">
            <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
            <li class="breadcrumb-item"><a href="{{route('show_dashboard_page')}}">Dashboard</a></li>
            <li class="breadcrumb-item"><a href="{{route('show_dashboard_contact_page')}}">Contact</a></li>
        </ul>
    </div>

    <div class="tile">
        <h3 class="tile-title">{{strtoupper($title)}}</h3>
        <table class="table table-hover">
            <thead>
                <tr>
                    <th>Address</th>
                    <th>Phone</th>
                    <th>E-mail</th>
                    <th>Website</th>
                    <th>Operations</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td id="Address">{{$contact->address}}</td>
                    <td id="Phone">{{$contact->phone}}</td>
                    <td id="Email">{{$contact->email}}</td>
                    <td id="Website">{{$contact->website}}</td>
                    <td>
                        <button class="btn btn-primary btn-sm" onclick="openEditModal('edit-contact', '{{$contact->address}}', '{{$contact->phone}}', '{{$contact->email}}', '{{$contact->website}}')"><i class="fa fa-pencil-square" aria-hidden="true"></i>Edit</button>

                        {{-- edit contact modal --}}
                        <div class="modal fade" id="edit-contact" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
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
                                                <label for="address" class="control-label">Address</label>
                                                <input id="address" name="address" class="form-control" type="text" placeholder="Enter address" value="">
                                            </div>
                                            <div class="form-group">
                                                <label for="phone" class="control-label">Phone</label>
                                                <input id="phone" name="phone" class="form-control" placeholder="Enter phone number">
                                            </div>
                                            <div class="form-group">
                                                <label for="email" class="control-label">E-mail</label>
                                                <input id="email" name="email" class="form-control" placeholder="Enter email">
                                            </div>
                                            <div class="form-group">
                                                <label for="website" class="control-label">Website</label>
                                                <input id="website" name="website" class="form-control" placeholder="Enter website">
                                            </div>
                                        </form>
                                    </div>
                                    <div class="modal-footer">
                                        <button class="btn btn-primary" onclick="saveChanges({{$contact->id}})">Save changes</button>
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

    <script>
        function openEditModal(modal_id, address, phone, email, website){
            $('#address').val(address);
            $('#email').val(email);
            $('#phone').val(phone);
            $('#website').val(website);
            $('#edit-contact').modal('show');
        }

        function saveChanges(id){
            $.ajax({
                type:'POST',
                url:'/api/editContact/',
                data: {
                "_token": "{{ csrf_token() }}",
                "id": id,
                "address" : $('#address').val(),
                "email" : $('#email').val(),
                "phone" : $('#phone').val(),
                "website" : $('#website').val(),
                },
                success:function(data) {
                    $('#edit-contact').modal('hide');
                    successNotify(data.message , "success");
                    $('#Address').text(data.contact.address);
                    $('#Email').text(data.contact.email);
                    $('#Phone').text(data.contact.phone);
                    $('#Website').text(data.contact.website);
                }
            });
        }
    </script>
@endsection
