@extends('layouts.master')
<style>
    span {
        direction: ltr;
        text-align: left;
    }

    .direction {
        direction: ltr;
    }
</style>
@section('content')

    <!-- Page Heading -->
    <div class="container-fluid">

        <h3>show item</h3>
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="row">
            <div class="col-sm-12">

                    <div class="px-3 py-5 bg-gradient-light ">

                        <div class=" border-left-warning">
                            <span>id:</span> <span> {{$data->id}}</span>
                        </div><hr>
                        <div class=" border-left-warning">
                            <span>title:</span> <span> {{$data->title}}</span>
                        </div><hr>
                        <div class=" border-left-warning">
                            <span> weight:</span> <span> {{$data->weight}}</span>
                        </div><hr>
                        <div class=" border-left-warning">
                            <span>height:</span> <span> {{$data->height}}</span>
                        </div><hr>
                        <div class=" border-left-warning">
                            <span>size:</span> <span> {{$data->size}}</span>
                        </div><hr>
                        <div class=" border-left-warning">
                            <span>color:</span> <span> {{$data->color}}</span>
                        </div><hr>
                        <div class=" border-left-warning">
                            <span> price:</span> <span> {{$data->price}}</span>
                        </div><hr>
                        <div class=" border-left-warning">
                            <span>made_in:</span> <span> {{$data->made_in}}</span>
                        </div><hr>
                        <div class=" border-left-warning">
                            <span>material:</span> <span> {{$data->material}}</span>
                        </div><hr>
                        <div class=" border-left-warning">
                            <span>details:</span> <span> {{$data->details}}</span>
                        </div><hr>
                        <div class=" border-left-warning">
                            <span>user_id:</span> <span> {{$data->user_id}}</span>
                        </div>
                    </div>


            </div>
        </div>
    </div>
    </div>


@endsection
