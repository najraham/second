@extends('backend.layouts.layout')

@section('content')
    <div class="tile">
        <div class="row">
            <div class="col-md-6">
                <h3 class="tile-title">{{strtoupper($title)}}</h3>
            </div>
            <div class="col-md-1 offset-md-5">
                {{-- <button class="btn btn-primary btn-sm" onclick="$('#add-project').modal('show');"><i class="fa fa-plus mr-1"></i> Add</button> --}}
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
                                {{-- <div class="col">
                                    <button class="btn btn-primary" onclick="openEditModal('{{$project->id}}', '{{$project->title}}' , '{{$project->description}}' , '{{$project->image}}' , '{{$project->link}}')">
                                        <i class="fa fa-edit"></i>
                                    </button>
                                </div>
                                <div class="col">
                                    <button class="btn btn-danger" onclick="deleteProject('{{$project->id}}')">
                                        <i class="fa fa-trash"></i>
                                    </button>
                                </div> --}}
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
