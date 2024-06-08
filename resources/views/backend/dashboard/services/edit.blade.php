@extends('backend.dashboard.layouts.master')
@section('title', 'Category')
@section('content')

    <div class= "main-panel">
        <div class= "content-wrapper">

            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                Update Services
                            </h2>

                        </div>
                        <div class="body">
                            <form action="{{ route('service.update',$editdata->id) }}" method='POST' enctype='multipart/form-data'>
                                @csrf


                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Title</label>
                                        <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Title"
                                            name='title' value="{{ $editdata->title }}">

                                        @if ($errors->first('title'))
                                            <span style='color:red;'>{{ $errors->first('title') }}</span>
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
                                            <label for="exampleInputFile">Logo</label>
                                            <div class="input-group">
                                                <div class="custom-file">
                                                    <input type="file" class="custom-file-input" id="exampleInputFile" name='logo'
                                                    value="{{ $editdata->logo }}">
                                                    <label class="custom-file-label" for="exampleInputFile">Choose file</label>

                                                    @if ($errors->first('Logo'))
                                                        <span style='color:red;'>{{ $errors->first('Logo') }}</span>
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
