@extends('layouts.app')


@section('content')

<div class="row">
    <div class="col-lg-12">
        <div class="float-start">
            <h2>Edit Student</h2>
        </div>
        <div class="float-end">
            <a href="{{ route("students.index") }}" class="btn btn-primary">Back</a>
        </div>
    </div>
</div>

@if ($errors->any())
<div class="alert alert-danger">
    <strong>Error!</strong> Please check your input <br><br>
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>

        @endforeach
    </ul>
</div>

@endif


<form action="{{ route('students.update', $student->id) }}" method="POST">
    @csrf
    @method('PUT')

    <div class="row mt-3">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Name:</strong>
                <input type="text" name="name" class="form-control" placeholder="Name" value="{{ $student->name }}">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 mt-3">
            <div class="form-group">
                <strong>Email:</strong>
                <input type="email" name="email" class="form-control" placeholder="Email" value="{{ $student->email }}">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 mt-3">
            <div class="form-group">
                <strong>Phone:</strong>
                <input type="text" name="phone" class="form-control" placeholder="Phone" value="{{ $student->phone }}">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 mt-3">
            <div class="form-group">
                <strong>Address:</strong>
                <textarea name="address" class="form-control" placeholder="Address" value="{{ $student->address }}"></textarea>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 mt-3">
            <button type="submit" class="btn btn-primary">Update</button>
        </div>
    </div>

</form>

@endsection
