@extends('layout.app')
@section('content')

        <div class="container" style="margin-top: 20px;">
            <div class="row">
                <h1 class="col">List Data</h1>
            </div>
            <div class="row">
                <div class="col-md-2 offset-md-8">
                    <a href="{{route('student.create')}}" class="btn btn-danger btn-block" role="button" aria-pressed="true">Tambah</a>
                </div>
            <div class="row" style="margin-top: 30px;">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">Title</th>
                            <th scope="col">Description</th>
                            <th scope="col">Status</th>
                            <th scope="col">Updated At</th>
                            <th scope="col">Created At</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($students as $student)
                            <tr>
                                <td><a href="{{route('student.edit', $student)}}">{{$student->name}}</td>
                                <td>{{$student->nim}}</td>
                                <td>{{$student->email}}</td>
                                <td>{{$student->updated_at}}</td>
                                <td>{{$student->created_at}}</td>
                                <td>
                                    <form action="{{route('student.destroy', $student)}}" method="post">
                                        {{csrf_field()}}
                                        <input type="hidden" name="_method" value="DELETE">
                                        <button type="submit" class="btn btn-danger">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                        
                    </tbody>
                </table>
            </div>
        </div>
@endsection