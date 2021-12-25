@extends('layouts.master')


@section('content')

    <div class="container-fluid">
    <div class="col-lg-6 mb-4">

        <!-- Project Card Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">edit menu</h6>
            </div>
            <div class="card-body">
                <form action="/menu/{{$query->id}}" method="POST">
                    @method('PUT')
                    @csrf

                    <div class="col-sm-6 mb-3 mb-sm-0">
                        <label for="">title</label>
                        <input type="text" class="form-control form-control-user" name="title" placeholder="title" value="{{$query->title}}">
                    </div>
                    <br>
                    <div class="col-sm-6 mb-3 mb-sm-0">
                        <label for="">slug</label>
                        <input type="text" class="form-control form-control-user" name="slug" placeholder="color" value="{{$query->slug}}">
                    </div>
                    <br>
                    <div class="col-sm-6 mb-3 mb-sm-0">
                        <label for="">icon</label>
                        <input type="text" class="form-control form-control-user" name="icon" value="{{$query->icon}}" placeholder="price" >
                    </div>
                    <br>


                    <button type="submit" class="btn btn-primary btn-user ">submit</button>

                </form>
            </div>
        </div>

    </div>
    </div>

@endsection
