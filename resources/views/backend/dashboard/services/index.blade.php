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
                            Manage Services
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
                                    <th>Logo</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse($allData as $row)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $row->title }}</td>
                                        <td>{{ Illuminate\Support\Str::limit($row->description, 30, '...') }}</td>
                                        <td><img src="{{ asset('backend/servicelogo/'.$row->logo) }}" height="160px" width="160px"></td>
                                        <td>
                                            <a href="{{ route('service.edit', $row->id) }}" class="btn btn-primary">Edit</a>
                                            <a href="{{ route('service.delete', $row->id) }}" class="btn btn-danger">Delete</a>
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
