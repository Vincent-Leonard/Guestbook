@extends('layout.app')
@section('content')
    <div class="container" style="margin-top: 20px;">
        <div class="row">
            <h1 class="col">Masukan Data</h1>
        </div>
        <div class="row">
            <div class="col">
            <form action="{{route('student.store')}}" method="post">
                {{csrf_field()}}
                    <div class="form-group">
                        <label for="nama">Name:</label>
                        <input type="text" class="form-control" id="nama" name="name">
                    </div>
                    <div class="form-group">
                        <label for="barcode">Nim:</label>
                        <input type="text" class="form-control" id="barcode" name="nim" required>
                    </div>
                    <div class="form-group">
                        <label for="tanggal">Email:</label>
                        <input type="email" class="form-control" id="tanggal" name="email" required>
                    </div>
                   
                    <br>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
@endsection