@extends('layout.master')

@section('content')
<div class="content-body ">
           <div class="container-fluid">
    <div class="row page-titles mx-0">
        <div class="col-sm-6 p-md-0">
            <div class="welcome-text">
                <h4>Add New Admin</h4>
            </div>
        </div>
       
    </div>
    <div class="row">
        <div class="col-xl-12 col-xxl-12 col-sm-12">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title">Admin Info</h5>
                </div>
                <div class="card-body">
                    <form action="" method="post" id="addStaffForm">
                    {{csrf_field()}}
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label class="form-label" >Name</label>
                                    <input placeholder="Enter Name" value="{{old('name')}}" name="name" type="text"
                                        class="form-control">
                                </div>
                                <p class="text-danger">
                               {{$errors->first('name')}}
                               </p>
                            </div>
                           
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label class="form-label">Type</label>
                                    <select class="form-control" name="type">
                                        <option value="0">Select Type</option>
                                        <option value="Theory">Theory</option>
                                        <option value="Practical">Practical</option>
                                    </select>
                                </div>
                            </div>

                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label class="form-label">Status</label>
                                    <select class="form-control" name="status">
                                        <option value="0">Active</option>
                                        <option value="1">Inactive</option>
                                    </select>
                                </div>
                            </div>
                           
                           
                            <div class="col-lg-12 col-md-12 col-sm-12">
                                <button type="submit" class="btn btn-primary">Submit</button>
                                <a href="{{url('admin/admin/list')}}"><button type="button" class="btn btn-danger light"> Cancel </button></a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
        </div>
@endsection