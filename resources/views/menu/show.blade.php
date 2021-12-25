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
                            <span> slug:</span> <span> {{$data->slug}}</span>
                        </div><hr>
                        <div class=" border-left-warning">
                            <span>icon:</span> <span> {{$data->icon}}</span>
                        </div><hr>


                    </div>


            </div>
        </div>
    </div>
    </div>


@endsection
