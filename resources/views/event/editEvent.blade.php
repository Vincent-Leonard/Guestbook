@extends('layout.app')
@section('content')
    <div class="container" style="margin-top: 20px;">
        <div class="row">
            <h1 class="col">Edit Data</h1>
        </div>
        <div class="row">
            <div class="col">
                <form action="{{route('event.update', $event)}}" method="post">
                    {{csrf_field()}}
                    <input type="hidden" name="_method" value="PATCH">
                    <div class="form-group">
                        <label for="nama">Title:</label>
                        <input type="text" class="form-control" id="nama" name="title" value="{{$event->title}}">
                    </div>
                    <div class="form-group">
                        <label for="barcode">Description:</label>
                        <textarea class="form-control" id="barcode" name="description">{{$event->description}}</textarea>
                    </div>
                    <div class="form-group">
                        <label for="user">User:</label>
                        <select name = "created_by" class = "custom-select">
                            @foreach ($users as $user)
                                <option value="{{$user->id}}">{{$user->name.'('. $user->email .')'}}</option>
                            @endforeach
                    </div>
                    <div class="form-group">
                        <label for="tanggal">Event Date:</label>
                        <input type="date" class="form-control" id="tanggal" name="event_date" value="{{$event->event_date}}">
                    </div>
                   
                    <br>
                    <button type="submit" class="btn btn-primary">Update</button>
                </form>
            </div>
        </div>
    </div>
@endsection