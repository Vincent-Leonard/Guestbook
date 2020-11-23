@extends('layout.app')
@section('content')
    <div class="container" style="margin-top: 20px;">
        <div class="row">
            <h1 class="col">Edit Data</h1>
        </div>
        <div class="row">
            <div class="col">
                <form action="{{route('student.update', $student)}}" method="post">
                    {{csrf_field()}}
                    <input type="hidden" name="_method" value="PATCH">
                    <div class="form-group">
                        <label for="nama">Name:</label>
                        <input type="text" class="form-control" id="nama" name="name" value="{{$student->name}}">
                    </div>
                    <div class="form-group">
                        <label for="barcode">NIM:</label>
                        <input type="text" class="form-control" id="barcode" name="nim" value="{{$student->nim}}" disabled>
                    </div>
                    <div class="form-group">
                        <label for="tanggal">Event Date:</label>
                        <input type="date" class="form-control" id="tanggal" name="email" value="{{$student->email}}" disabled>
                    </div>
                   
                    <br>
                    <button type="submit" class="btn btn-primary">Update</button>
                </form>
            </div>
        </div>
    </div>
@endsection