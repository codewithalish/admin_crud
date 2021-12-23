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

    <form class="col-md-8 " method="POST" action="http://127.0.0.1:8000/products">
        @csrf
        <div style="">
            <div class="">
                <input type="text" class="form-control" name="title" placeholder="نام کالا" aria-label="title">
            </div>
            <br>
            <div class="">
                <input type="number" class="form-control" name="weight" placeholder="وزن"
                       aria-label="weight">
            </div>
        </div>
        <br>
        <div class="">
            <input type="number" class="form-control" name="height" placeholder="قد" aria-label="height">
        </div>
        <br>

        <div>
            <label class="input-group-text" name="size" for="inputGroupSelect01">سایز</label>
            <select id="inputState" class=" btn-block" name="size">
                <option selected>not_selected</option>
                <option>small</option>
                <option>medium</option>
                <option>large</option>
                <option>Xlarge</option>
                <option>XXlarge</option>
            </select>
        </div>

        <br>
        <div style="">
            <div>
                <lable>رنگ</lable>
                <input type="color" class=" orm-control btn-block" name="color" id="inputEmail4" placeholder="رنگ">
            </div>
            <br>
            <div>

                <input type="number" class="form-control" name="price" id="inputAddress" placeholder="قیمت">
            </div>
            <br>
            <div>

                <input type="text" class="form-control" name="made_in" id="inputAddress2"
                       placeholder="کشور سازنده">
            </div>
        </div>
        <br>

        <div>
            <input type="text" class="form-control" name="material" placeholder="جنس" aria-label="material">
        </div>
        <br>

        <div>
            <textarea class="form-control" name="details" id="" cols="60" rows="5" name="address" placeholder="جزئیات"></textarea>
        </div>

        <br>

        <div>
            <input type="number" class="form-control" name="user_id" id="inputAddress" placeholder="آیدی کاربر">
        </div>

        <br>
        <div>
            <input type="checkbox">
            <span>تمام شرایط را کامل خوانده و می پذیرم.</span>
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

