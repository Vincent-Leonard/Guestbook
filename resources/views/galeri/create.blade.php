@extends('layouts.app')

@section('content')

    <div class="container" style="margin-top: 20px;">
        <form action="{{route('galeri.store')}}" methid="POST" enctype="multipart/form-data">
            {{csrf_field()}}
            <div class="form-group">
                <label for="nama">Name:</label>
                <input type="text" class="form-control" id="nama" name="nama">
            </div>
            <div class="form-group">
                <label for="description">Description:</label>
                <textarea class="form-control" id="description" name="description"></textarea>
            </div>
            <div class="form-group">
                <label for="picutre">Input Picture:</label>
                <input type="file" class="form-control-file" id="picture" name="picture">
            </div>
            
           
            <br>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>

    </div>
@endsection