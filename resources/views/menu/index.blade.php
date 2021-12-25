@extends('layouts.master')
<style>
    a:hover{

    }
</style>

@section('content')

    <div class="container-fluid">

        <!-- Page Heading -->
        <div>
            <h1 class="h3 mb-2 text-gray-800">Tables</h1>
        </div>


            @if($message = \Illuminate\Support\Facades\Session::get('success'))
                <div class="row">
                    <div class="col-sm-12">
                        <div class="alert alert-success">
                            {{$message}}
                        </div>
                    </div>
                    @endif


        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="row">
                <div class="col-sm-12">
                    <table class="table table-bordered dataTable" id="dataTable" role="grid"
                           aria-describedby="dataTable_info" style="width: 100%;" width="100%" cellspacing="0">
                        <thead>
                        <tr role="row">
                            <th class="sorting sorting_asc" tabindex="0" aria-controls="dataTable" rowspan="1"
                                colspan="1" style="width: 100px;" aria-sort="ascending"
                                aria-label="Name: activate to sort column descending">id:
                            </th>
                            <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1"
                                style="width: 100px;"
                                aria-label="Position: activate to sort column ascending">title:
                            </th>

                            <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1"
                                style="width: 133.2px;"
                                aria-label="Start date: activate to sort column ascending">slug:
                            </th>
                            <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1"
                                style="width: 120.2px;" aria-label="Salary: activate to sort column ascending">
                                icon:
                            </th>

                            <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1"
                                style="width: 120.2px;" aria-label="Salary: activate to sort column ascending">
                                operation:
                            </th>


                        </tr>
                        </thead>

                        <tbody>

                        @foreach($menu as $item)
                            <tr class="odd">
                                <td class="sorting_1">{{$item->id}}</td>
                                <td>{{$item->title}}</td>
                                <td>{{$item->slug ?? 'nadarad'}}</td>

                                <td class="sorting_1"><?php echo ($item->icon) ? $item->icon : 'No'; ?></td>


                                <td style="display: flex ">

                                    <form action="/menu/{{$item->id}}" method="post">
                                        @method('DELETE')
                                        @csrf

                                        <button class="btn btn-danger btn-circle btn-lg" title="حذف">
                                            <i class="fas fa-trash"></i>
                                        </button>

                                    </form>

                                    <a style="" href="/menu/{{$item->id}}/edit" title="ویرایش" class="btn btn-info btn-circle btn-lg">
                                        <i class="fas fa-info-circle"></i>
                                    </a>

                                    <a href="/menu/{{$item->id}}"  title="نمایش"class="btn btn-success btn-circle btn-lg">
                                        <i class="fas fa-check"></i>
                                    </a>

                                </td>


                            </tr>

                        @endforeach
                        </tbody>
                    </table>

                    <a href="/menu/create" class="btn btn-primary btn-icon-split">
                                        <span class="icon text-white-50">
                                            <i class="fas fa-flag"></i>
                                        </span>
                        <span class="text">create menu</span>
                    </a>

                </div>
            </div>
        </div>

    </div>
    </div>

    </div>
    </div>

@endsection
