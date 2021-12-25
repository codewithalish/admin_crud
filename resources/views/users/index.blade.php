@extends('layouts.master')

@section('content')

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <div id="dataTable_wrapper" class="dataTables_wrapper dt-bootstrap4">
                    <div class="row">
                        <div class="col-sm-12 col-md-6">
                            <div class="dataTables_length" id="dataTable_length"><label>Show <select
                                        name="dataTable_length" aria-controls="dataTable"
                                        class="custom-select custom-select-sm form-control form-control-sm">
                                        <option value="10">10</option>
                                        <option value="25">25</option>
                                        <option value="50">50</option>
                                        <option value="100">100</option>
                                    </select> entries</label></div>
                        </div>
                        <div class="col-sm-12 col-md-6">
                            <div id="dataTable_filter" class="dataTables_filter"><label>Search:<input type="search"
                                                                                                      class="form-control form-control-sm"
                                                                                                      placeholder=""
                                                                                                      aria-controls="dataTable"></label>
                            </div>
                        </div>
                    </div>
                    @if($message = \Illuminate\Support\Facades\Session::get('success'))
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="alert alert-success">
                                    {{$message}}
                                </div>
                            </div>
                            @endif
                            <div class="row">
                                <div class="col-sm-12">
                                    <table class="table table-bordered dataTable" id="dataTable" width="100%"
                                           cellspacing="0"
                                           role="grid" aria-describedby="dataTable_info" style="width: 100%;">
                                        <thead>
                                        <tr role="row">
                                            <th class="sorting sorting_asc" tabindex="0" aria-controls="dataTable"
                                                rowspan="1"
                                                colspan="1" aria-sort="ascending"
                                                aria-label="Name: activate to sort column descending"
                                                style="width: 118px;">
                                                Id
                                            </th>
                                            <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1"
                                                colspan="1"
                                                aria-label="Position: activate to sort column ascending"
                                                style="width: 186px;">
                                                Name
                                            </th>
                                            <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1"
                                                colspan="1"
                                                aria-label="Office: activate to sort column ascending"
                                                style="width: 81px;">
                                                Mobile
                                            </th>
                                            <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1"
                                                colspan="1"
                                                aria-label="Office: activate to sort column ascending"
                                                style="width: 81px;">
                                                Address
                                            </th>
                                            <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1"
                                                colspan="1"
                                                aria-label="Office: activate to sort column ascending"
                                                style="width: 81px;">
                                                Email
                                            </th>
                                            <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1"
                                                colspan="1"
                                                aria-label="Office: activate to sort column ascending"
                                                style="width: 81px;">
                                                Operation
                                            </th>
                                        </tr>
                                        </thead>

                                        <tbody>

                                        @foreach($users as $item)
                                            <tr class="odd">
                                                <td>{{$item->id}}</td>
                                                <td>{{$item->name}}</td>
                                                <td>{{$item->mobile}}</td>
                                                <td>{{$item->address}}</td>
                                                <td>{{$item->email}}</td>

                                                <td style="display: flex">


                                                    <form action="/users/{{$item->id}}" method="post">
                                                        @method('DELETE')
                                                        @csrf
                                                        <button class="btn btn-danger btn-circle btn-lg">
                                                            <i class="fas fa-trash"></i>
                                                        </button>
                                                    </form>

                                                    <a href="/users/{{$item->id}}"
                                                       class="btn btn-info btn-circle btn-lg">
                                                        <i class="fas fa-info-circle"></i>
                                                    </a>

                                                    <a href="/users/{{$item->id}}/edit"
                                                       class="btn btn-success btn-circle btn-lg">
                                                        <i class="fas fa-check"></i>
                                                    </a>

                                                </td>

                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                    <a href="/users/create" class="btn btn-primary btn-icon-split" method="post">
                                        <span class="icon text-white-50">
                                            <i class="fas fa-flag"></i>
                                        </span>
                                        <span class="text">Create User</span>
                                    </a>
                                </div>
                            </div>

                        </div>
                </div>
            </div>
        </div>
@endsection
