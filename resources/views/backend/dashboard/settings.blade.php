@extends('backend.dashboard.layouts.master')

@section('title', 'System setting')
@section('content')

    <div class= "main-panel">
        <div class= "content-wrapper">
            <form action="{{ route('setting.update') }}" method="POST" enctype='multipart/form-data'>
                @csrf
                <div class="card-body">
                <div class="form-group">
                    <label for="exampleInputPassword1">Heading Text</label>
                    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Heading Text"
                        name='heading_text' value="{{ $setting->heading_text }}">

                    @if ($errors->first('heading_text'))
                        <span style='color:red;'>{{ $errors->first('heading_text') }}</span>
                    @endif
                </div>

                <div class="form-group">
                    <label for="exampleInputPassword1">Small Text</label>
                    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Small Text"
                        name='small_text' value="{{ $setting->small_text }}">

                    @if ($errors->first('small_text'))
                        <span style='color:red;'>{{ $errors->first('small_text') }}</span>
                    @endif
                </div>

                <div class="form-group">
                    <label for="exampleInputPassword1">Button Text</label>
                    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Button Text"
                        name='button_text' value="{{ $setting->button_text }}">

                    @if ($errors->first('button_text'))
                        <span style='color:red;'>{{ $errors->first('button_text') }}</span>
                    @endif
                </div>


                    <div class="form-group">
                        <label for="exampleInputEmail1">Email address</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email"
                            name='email' value="{{ $setting->email }}">



                        @if ($errors->first('email'))
                            <span style='color:red;'>{{ $errors->first('email') }}</span>
                        @endif
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Mobile</label>
                        <input type="text" class="form-control" id="exampleInputPassword1" placeholder="mobile"
                            name='mobile' value="{{ $setting->mobile }}">

                        @if ($errors->first('mobile'))
                            <span style='color:red;'>{{ $errors->first('mobile') }}</span>
                        @endif

                    </div>



                    <div class="form-group">
                    <label for="exampleInputPassword1">Address</label>
                    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Address" name='address' value="{{ $setting->address }}">

                    @if ($errors->first('address'))
                    <span style='color:red;'>{{$errors->first('address')}}</span>
                   @endif
                  </div>

                  <div class="form-group">
                    <label for="exampleInputPassword1">Story Bio</label>
                    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Story Bio"
                        name='story_bio'>

                    @if ($errors->first('story_bio'))
                        <span style='color:red;'>{{ $errors->first('story_bio') }}</span>
                    @endif
                </div>

                <div class="form-group">
                    <label for="exampleInputPassword1">Footer Bio</label>
                    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Footer Bio"
                        name='footer_bio'>

                    @if ($errors->first('footer_bio'))
                        <span style='color:red;'>{{ $errors->first('footer_bio') }}</span>
                    @endif
                </div>



                    <div class="form-group">
                        <label for="exampleInputFile">Logo</label>
                        <div class="input-group">
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="exampleInputFile" name='logo'
                                    value="{{ $setting->logo }}">
                                <label class="custom-file-label" for="exampleInputFile">Choose file</label>

                                @if ($errors->first('Logo'))
                                    <span style='color:red;'>{{ $errors->first('Logo') }}</span>
                                @endif
                            </div>
                            {{-- <a href='{{ asset("uploads/$system->logo")}}'  target='_blank'> <img src='{{ asset("uploads/$system->logo")}}' height ='200px' width='200px'></a> --}}
                        </div>

                        <div class="form-group">
                            <label for="exampleInputFile">Favicon Logo</label>
                            <div class="input-group">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="exampleInputFile" name='bglogo'
                                        value="{{ $setting->bglogo }}">
                                    <label class="custom-file-label" for="exampleInputFile">Choose file</label>

                                    @if ($errors->first('bglogo'))
                                        <span style='color:red;'>{{ $errors->first('bglogo') }}</span>
                                    @endif
                                </div>
                                {{-- <a href='{{ asset("uploads/$system->logo")}}'  target='_blank'> <img src='{{ asset("uploads/$system->logo")}}' height ='200px' width='200px'></a> --}}
                            </div>




                            <div class="form-group">
                                <label for="exampleInputFile">Slider Image</label>
                                <div class="input-group">
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" id="exampleInputFile"
                                            name='slideimage' value="{{ $setting->slideimage }}">
                                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                                        @if ($errors->first('slideimage'))
                                            <span style='color:red;'>{{ $errors->first('slideimage') }}</span>
                                        @endif
                                    </div>
                                    {{-- <a href='{{ asset("uploads/$system->image") }}' target='_blank'>
                            <img src='{{ asset("uploads/$system->image") }}' height='200px' width='200px'> --}}
                                    </a>
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
