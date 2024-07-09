
@extends('layout.master')

@section('content')

<div class="content-body ">
    <div class="container-fluid">
        @include('_message')
        <div class="row page-titles mx-0">

            <div class="col-sm-6 p-md-0">
                <div class="welcome-text">
                    <h4>All Admins ({{$getRecord->count()}})</h4>
                </div>
            </div>
           
        </div>

        <div class="row">

            <div class="col-lg-12">
                <div class="row tab-content">
                    <div id="list-view" class="tab-pane fade active show col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">All Admins </h4>
                                <a href="{{url('admin/admin/add')}}" class="btn btn-primary">+ Add New Admin</a>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table id="example5" class="display text-nowrap" style="min-width: 845px">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Name</th>
                                                <th>Email</th>
                                                <th>Created Date</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($getRecord as $value)
                                            <tr>
                                                <td>{{$value->id}}</td>
                                                <td>{{$value->name}}</td>
                                                <td>{{$value->email}} </td>
                                                <td>{{$value->created_at}}</td>
                                                <td>
                                                    <a href="{{url('admin/admin/edit/'.$value->id)}}" class="btn btn-xs sharp btn-primary"><i
                                                            class="fa fa-pencil"></i></a>
                                                    <a href="{{url('admin/admin/delete/'.$value->id)}}" class="btn btn-xs sharp btn-danger"><i
                                                            class="fa fa-trash"></i></a>
                                                </td>
                                            </tr>
                                            @endforeach
                                            
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>

@endsection