@extends('backend.dashboard.layouts.master')
@section('title', 'Customer')
@section('content')

    <div class= "main-panel">
        <div class= "content-wrapper">

            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                 Update Customer
                            </h2>

                        </div>
                        <div class="body">
                            <form action="{{ route('customer.update',$editdata->id) }}" method='POST' enctype='multipart/form-data'>
                                @csrf


                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Customer Name</label>
                                        <input type="text" class="form-control" id="exampleInputPassword1"
                                            placeholder="Customer Name" name='customer_name' value="{{ $editdata->customer_name }}">

                                        @if ($errors->first('customer_name'))
                                            <span style='color:red;'>{{ $errors->first('customer_name') }}</span>
                                        @endif
                                    </div>

                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Customer title</label>
                                        <input type="text" class="form-control" id="exampleInputPassword1"
                                            placeholder="Customer title" name='customer_title' value="{{ $editdata->customer_title }}">

                                        @if ($errors->first('customer_title'))
                                            <span style='color:red;'>{{ $errors->first('customer_title') }}</span>
                                        @endif
                                    </div>

                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Description</label>
                                        <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Description"
                                            name='description' value="{{ $editdata->description }}">

                                        @if ($errors->first('description'))
                                            <span style='color:red;'>{{ $errors->first('description') }}</span>
                                        @endif
                                    </div>

                                    <div class="form-group">
                                        <label for="exampleInputFile">Profile</label>
                                        <div class="input-group">
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input" id="exampleInputFile"
                                                    name='profile' value="{{ $editdata->profile }}">
                                                <label class="custom-file-label" for="exampleInputFile">Choose file</label>

                                                @if ($errors->first('profile'))
                                                    <span style='color:red;'>{{ $errors->first('profile') }}</span>
                                                @endif
                                            </div>

                                        </div>


                                    </div>
                                    <!-- /.card-body -->


                                    <div class="card-footer">
                                        <button type="submit" class="btn btn-primary">Update</button>
                                    </div>
                                </div>
                        </div>
                        </form>

                    @endsection
