@extends('layout.app')

@section('title', 'home')

@section('content')

@foreach ($data as $item )
    <h4 class="text-center">Hai gusy perkenalkan nama saya, {{$item->nama}}</h4>
    <div class="foto text-center">
    <img src={{ url('storage/' . $item->foto) }} alt="" height="450px">
</div>
@endforeach
@endsection
