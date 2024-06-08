@extends('backend.dashboard.layouts.master')

@section('title','service')

@section('content')

<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2>
                            Manage Blogs
                        </h2>
                        @if(session('success'))
                            <div class="alert alert-success">
                                {{ session('success') }}
                            </div>
                        @endif
                    </div>
                    <div class="body">
                        <table id="mainTable" class="table table-striped">
                            <thead>
                                <tr>
                                    <th>S.N</th>
                                    <th>Title</th>
                                    <th>Description</th>
                                    <th>Date</th>
                                    <th>Blog Image</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse($allData as $rows)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $rows->title }}</td>
                                        <td>{{ Illuminate\Support\Str::limit($rows->description, 30, '...') }}</td>
                                        <td>{{ $rows->date }}</td>
                                        <td><img src="{{ asset('backend/blog_img/'.$rows->blog_img) }}" height="160px" width="160px"></td>
                                        <td>
                                            <a href="{{ route('blog.edit', $rows->id) }}" class="btn btn-primary">Edit</a>
                                            <a href="{{ route('blog.delete', $rows->id) }}" class="btn btn-danger">Delete</a>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="5">No Record Found</td>
                                    </tr>
                                @endforelse
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th><strong>TOTAL</strong></th>
                                    <th>{{ $allData->count() }}</th>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
