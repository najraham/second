@extends('backend.layouts.layout')

@section('content')
{{-- @if ($errors->any())
@foreach ($errors->all() as $error)
    <div>{{$error}}</div>
@endforeach
@endif --}}
    <form class="tile" action="{{route('validate_form')}}" method="POST">
        @csrf
        <div class="form-group">
            <label for="" class="form=control-label">Title</label>
            <input type="text" name="title" class="form-control @if ($errors->has('title')) is-invalid @endif" placeholder="Enter title" value="{{old('title')}}">
            {!! $errors->first('title', '<div class="text-danger">:message</div>') !!}
        </div>
        <div class="form-group">
            <label for="" class="form=control-label">Description</label>
            <input type="text" name="description" class="form-control @if ($errors->has('description')) is-invalid @endif" placeholder="Enter description" value="{{old('description')}}">
            {!! $errors->first('description', '<div class="text-danger">:message</div>') !!}
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>
@endsection
