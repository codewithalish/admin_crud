@extends('layouts.master')

@section('content')
    <div id="content-wrapper" class="d-flex flex-column">

        <!-- Main Content -->
        <div id="content">


            <!-- Begin Page Content -->
            <div class="container-fluid">

            </div>

            <!-- Content Row -->

            <div class="row">
                <h1>Dashboard</h1>
                <!-- Area Chart -->

            </div>

            <!-- Content Row -->
            <div class="row">

                <!-- Content Column -->
                <div class="col-lg-6 mb-4">

                    <!-- Project Card Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">edit</h6>
                        </div>
                        <form action="/users/{{$users->id}}" method="POST">
                            @method('PUT')
                            @csrf

                            <div class="form-group">

                                <label for="exampleFormControlInput1">Name:</label>
                                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder=""
                                       name='name' value="{{$users->name}}">

                                <label for="exampleFormControlTextarea1">Mobile:</label>
                                <input type="text" class="form-control" id="inputMobile" name="mobile" value="{{$users->mobile}}">

                                <div class="form-group">
                                    <label for="inputAddress">Address</label>
                                    <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St"
                                           name="address" value="{{$users->address}}">
                                </div>
                                <label >Email:</label>
                                <input type="email" class="form-control" id="inputEmail" name="email" value="{{$users->email}}">

                                <button type="submit" class="btn btn-primary" name="submit">Submit</button>

                            </div>
                        </form>

                    </div>
                </div>

                <!-- Color System -->

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- End of Main Content -->

    </div>
@endsection
