@extends('layouts.app')
@section('content')

        <div class="container" style="margin-top: 20px;">
            <div class="row">
                <h1 class="col">List Data</h1>
            </div>
            <div class="row" style="margin-top: 30px;">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">Name</th>
                            <th scope="col">Email</th>
                            <th scope="col">Role ID</th>
                            <th scope="col">Event List</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($users as $user)
                            <tr>
                                <td><a href="">{{$user->name}}</td>
                                <td>{{$user->email}}</td>
                                <td>{{$user->role_id}}</td>
                                <td>
                                    @foreach ($user->events as $event)
                                        <li>{{$event->title}}</li>
                                    @endforeach
                                </td>
                            </tr>
                        @endforeach
                        
                    </tbody>
                </table>
            </div>
        </div>
@endsection