@extends('layouts.master')
<style>
    *{


    }

</style>

@section('content')


    <div class="container-fluid">
        <br>
        <div class="card shadow mb-4">
    <div>
        <h3>مشخصات کالا</h3>
    </div>
    <br>

    <form class="col-md-8 " method="POST" action="http://127.0.0.1:8000/menu">
        @csrf
        <div style="">
            <div class="">
                <input type="text" class="form-control" name="title" placeholder="title" aria-label="title">
            </div>
            <br>
            <div class="">
                <input type="text" class="form-control" name="slug" placeholder="slug"
                       aria-label="slug">
            </div>
        </div>
        <br>
        <div class="">
            <input type="text" class="form-control" name="icon" placeholder="icon" aria-label="icon">
        </div>

        <br>
        <div class="col-12">
            <button type="submit" class="btn btn-primary">ثبت کالا</button>
        </div>

    </form>

    <br>
</div>
</div>
@endsection

