@extends('layouts.master')


@section('content')

    <div class="container-fluid">
    <div class="col-lg-6 mb-4">

        <!-- Project Card Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">edit product</h6>
            </div>
            <div class="card-body">
                <form action="/products/{{$query->id}}" method="POST">
                    @method('PUT')
                    @csrf

                    <div class="col-sm-6 mb-3 mb-sm-0">
                        <label for="">title</label>
                        <input type="text" class="form-control form-control-user" name="title" placeholder="title" value="{{$query->title}}">
                    </div>
                    <br>
                    <div class="col-sm-6 mb-3 mb-sm-0">
                        <label for="">color</label>
                        <input type="text" class="form-control form-control-user" name="color" placeholder="color" value="{{$query->color}}">
                    </div>
                    <br>
                    <div class="col-sm-6 mb-3 mb-sm-0">
                        <label for="">price</label>
                        <input type="text" class="form-control form-control-user" name="price" value="{{$query->price}}" placeholder="price" >
                    </div>
                    <br>
                    <div class="col-sm-6 mb-3 mb-sm-0">
                        <label for="">weight</label>
                        <input type="text" class="form-control form-control-user" name="weight" value="{{$query->weight}}" placeholder="weight" >
                    </div>
                    <br>
                    <div class="col-sm-6 mb-3 mb-sm-0">
                        <label for="">height</label>
                        <input type="text" class="form-control form-control-user" name="height" value="{{$query->height}}" placeholder="height" >
                    </div>

                    <br>

                    <div class="col-sm-6 mb-3 mb-sm-0">
                        <label for="">price</label>
                        <select class="form-control form-control-user" name="size" id="" >
                            <option >small</option>
                            <option >medium</option>
                            <option >large</option>
                            <option >Xlarge</option>
                            <option checked>XXlarge</option>
                        </select>
                    </div>

                    <br>

                    <button type="submit" class="btn btn-primary btn-user ">submit</button>

                </form>
            </div>
        </div>

    </div>
    </div>

@endsection
