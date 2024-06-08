@extends('backend.dashboard.layouts.master')
@section('title', 'Blog')
@section('content')

    <div class= "main-panel">
        <div class= "content-wrapper">

            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                Blog Form
                            </h2>

                        </div>
                        <div class="body">
                            <form action="{{ route('blog.store') }}" method='POST' enctype='multipart/form-data'>
                                @csrf


                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Title</label>
                                        <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Title"
                                            name='title'>

                                        @if ($errors->first('title'))
                                            <span style='color:red;'>{{ $errors->first('title') }}</span>
                                        @endif
                                    </div>

                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Description</label>
                                        <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Description"
                                            name='description'>

                                        @if ($errors->first('description'))
                                            <span style='color:red;'>{{ $errors->first('description') }}</span>
                                        @endif
                                    </div>

                                    
                                        <div class="form-group">
                                            <label for="exampleInputPassword1">Date</label>
                                            <input type="date" class="form-control" id="exampleInputPassword1" placeholder="Date"
                                                name='date'>

                                            @if ($errors->first('date'))
                                                <span style='color:red;'>{{ $errors->first('date') }}</span>
                                            @endif
                                        </div>

                                        <div class="form-group">
                                            <label for="exampleInputFile">Blog Image</label>
                                            <div class="input-group">
                                                <div class="custom-file">
                                                    <input type="file" class="custom-file-input" id="exampleInputFile" name='blog_img'
                                                     >
                                                    <label class="custom-file-label" for="exampleInputFile">Choose file</label>

                                                    @if ($errors->first('blog_img'))
                                                        <span style='color:red;'>{{ $errors->first('blog_img') }}</span>
                                                    @endif
                                                </div>

                                            </div>







                                            </div>
                                            <!-- /.card-body -->


                                            <div class="card-footer">
                                                <button type="submit" class="btn btn-primary">Add</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>

                            @endsection
