@extends('layouts.master')

@section('content')

    <div>
        <span>id:</span><span>{{$users->id}}</span>
        <hr>
        <span>name:</span><span>{{$users->name}}</span>
        <hr>
        <span>mobile:</span><span>{{$users->mobile}}</span>
        <hr>
        <span>address:</span><span>{{$users->address}}</span>
        <hr>
        <span>email:</span><span>{{$users->email}}</span>
        <hr>
    </div>

@endsection
