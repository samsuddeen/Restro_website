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
                                Update Item
                            </h2>

                        </div>
                        <div class="body">
                            <form action="{{ route('item.update', $editdata->id) }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="item_name">Item Name</label>
                                        <input type="text" class="form-control" id="item_name" placeholder="Item Name"
                                            name="Item_name" value="{{ $editdata->Item_name }}">

                                        @if ($errors->first('Item_name'))
                                            <span style="color:red;">{{ $errors->first('Item_name') }}</span>
                                        @endif
                                    </div>

                                    <div class="form-group">
                                        <label for="price">Price</label>
                                        <input type="text" class="form-control" id="price" placeholder="Price"
                                            name="price" value="{{ $editdata->price }}">

                                        @if ($errors->first('price'))
                                            <span style="color:red;">{{ $errors->first('price') }}</span>
                                        @endif
                                    </div>

                                    <div class="form-group">
                                        <label for="discount_price">Discount Price</label>
                                        <input type="text" class="form-control" id="discount_price" placeholder="Discount Price"
                                            name="discount_price" value="{{ $editdata->discount_price }}">

                                        @if ($errors->first('discount_price'))
                                            <span style="color:red;">{{ $errors->first('discount_price') }}</span>
                                        @endif
                                    </div>

                                    <div class="form-group">
                                        <label for="discount_percent">Discount Percent</label>
                                        <input type="text" class="form-control" id="discount_percent" placeholder="Discount Percent"
                                            name="discount_percent" value="{{ $editdata->discount_percent }}">

                                        @if ($errors->first('discount_percent'))
                                            <span style="color:red;">{{ $errors->first('discount_percent') }}</span>
                                        @endif
                                    </div>

                                    <div class="form-group">
                                        <label for="item_img">Item Image</label>
                                        <div class="input-group">
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input" id="item_img" name="item_img" value="{{ $editdata->item_img }}">
                                                <label class="custom-file-label" for="item_img">Choose file</label>

                                                @if ($errors->first('item_img'))
                                                    <span style="color:red;">{{ $errors->first('item_img') }}</span>
                                                @endif
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="icon">Icon</label>
                                        <div class="input-group">
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input" id="icon" name="icon" value="{{ $editdata->icon }}">
                                                <label class="custom-file-label" for="icon">Choose file</label>

                                                @if ($errors->first('icon'))
                                                    <span style="color:red;">{{ $errors->first('icon') }}</span>
                                                @endif
                                            </div>
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
