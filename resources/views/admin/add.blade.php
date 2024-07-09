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
                                    <label class="form-label">Email</label>
                                    <input placeholder="Email Here" name="email" value="{{old('email')}}" type="email" class="form-control"
                                        >
                                </div>
                               <p class="text-danger">
                               {{$errors->first('email')}}
                               </p>
                            </div>
                           
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label class="form-label">Password</label>
                                    <div class="input-group pass-group">
                                        <input placeholder="Password" name="password" type="password"
                                            class="form-control pass-input">
                                        <span class="input-group-text pass-handle">
                                            <i class="fa fa-eye-slash"></i>
                                            <i class="fa fa-eye"></i>
                                        </span>
                                    </div>
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