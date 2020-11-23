@extends('layouts.app')

@section('content')

    <div class="container" style="margin-top: 20px;">
        <div class="row">
            <div class="col-md-2 offset-md-10">
                <a href="{{route('galeri.create')}}" class="btn btn-danger btn-block" role="button" aria-pressed="true">Tambah</a>
            </div>
        </div>

        @foreach ($galeris as $galeri)
            <div>
                <img src="/image/{{$galeri->picture}}" class="card-img-top" alt="...">
                <div class = "card-body">
                    <h5 class = "card-title">{{$galeri->name}}</h5>
            </div>
        @endforeach

    </div>
@endsection