@extends('layout.app')

@section('title', 'blog')

@section('content')
@foreach ($data as $item )
<div class="card-body">
    <h3 class=" text-center card-title">{{$item->nama}}</h3>
<div class="container">
    <div class="p-4">
        <div class="d-flex gap-4">
            <div class="card">
                <img src="{{ url('storage/' . $item->foto) }}" alt=""  class="card-img-top">
                <div class="card-body">
                    This photo is on campus at the Labbaik training event
                </div>
            </div>
            <div class="card">
                <img src="{{ url('storage/' . $item->foto) }}" alt="" width="300" class="card-img-top">
                <div class="card-body">
                    This photo is on campus at the Labbaik training event
                </div>
            </div>
            <br><br>
            <div class="card">
                <img src="{{ url('storage/' . $item->foto) }}" alt="" class="card-img-top">
                <div class="card-body">
                    This photo is on campus at the Labbaik training event
                </div>
            </div>
        </div>
    </div>
</div>
@endforeach
@endsection
