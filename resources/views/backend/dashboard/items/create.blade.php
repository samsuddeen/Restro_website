@extends('backend.dashboard.layouts.master')
@section('title', 'Item')
@section('content')

    <div class= "main-panel">
        <div class= "content-wrapper">

            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                Item Form
                            </h2>

                        </div>
                        <div class="body">
                            <form action="{{ route('item.store') }}" method="POST" enctype='multipart/form-data'>
                                @csrf
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Item Name</label>
                                        <input type="text" class="form-control" id="exampleInputPassword1"
                                            placeholder="Item Name" name='Item_name'>

                                        @if ($errors->first('Item_name'))
                                            <span style='color:red;'>{{ $errors->first('Item_name') }}</span>
                                        @endif
                                    </div>

                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Price</label>
                                        <input type="text" class="form-control" id="exampleInputPassword1"
                                            placeholder="Price" name='price'>

                                        @if ($errors->first('price'))
                                            <span style='color:red;'>{{ $errors->first('price') }}</span>
                                        @endif
                                    </div>

                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Discount Price</label>
                                        <input type="text" class="form-control" id="exampleInputPassword1"
                                            placeholder="Discount Price" name='discount_price'>

                                        @if ($errors->first('discount_price'))
                                            <span style='color:red;'>{{ $errors->first('discount_price') }}</span>
                                        @endif
                                    </div>


                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Discount_percent</label>
                                        <input type="text" class="form-control" id="exampleInputEmail1"
                                            placeholder="Enter email" name='discount_percent'>



                                        @if ($errors->first('discount_percent'))
                                            <span style='color:red;'>{{ $errors->first('discount_percent') }}</span>
                                        @endif
                                    </div>

                                    <div class="form-group">
                                        <label for="exampleInputFile">Item Image</label>
                                        <div class="input-group">
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input" id="exampleInputFile"
                                                    name='item_img'>
                                                <label class="custom-file-label" for="exampleInputFile">Choose file</label>

                                                @if ($errors->first('item_img'))
                                                    <span style='color:red;'>{{ $errors->first('item_img') }}</span>
                                                @endif
                                            </div>

                                        </div>

                                        <div class="form-group">
                                            <label for="exampleInputFile">Icon</label>
                                            <div class="input-group">
                                                <div class="custom-file">
                                                    <input type="file" class="custom-file-input" id="exampleInputFile"
                                                        name='icon'>
                                                    <label class="custom-file-label" for="exampleInputFile">Choose
                                                        file</label>

                                                    @if ($errors->first('icon'))
                                                        <span style='color:red;'>{{ $errors->first('icon') }}</span>
                                                    @endif
                                                </div>

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
