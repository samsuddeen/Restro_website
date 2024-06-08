@extends('backend.dashboard.layouts.master')
@section('title', 'Product')
@section('content')

<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2>Manage Items</h2>
                        @if (session('success'))
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
                                    <th>Item Name</th>
                                    <th>Price</th>
                                    <th>Discount Price</th>
                                    <th>Discount Percent</th>
                                    <th>Item Image</th>
                                    <th>Icon</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse($allData as $row)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $row->Item_name }}</td>
                                    <td>{{ $row->price }}$</td>
                                    <td>{{ $row->discount_price }}$</td>
                                    <td>{{ $row->discount_percent }}%</td>
                                    <td><img src="{{ asset('backend/itemimg/' . $row->item_img) }}" height="160px" width="160px"></td>
                                    <td><img src="{{ asset('backend/icon/' . $row->icon) }}" height="160px" width="160px"></td>
                                    <td>
                                        <a href="{{ route('item.edit', $row->id) }}" class="btn btn-primary">Edit</a>
                                        <a href="{{ route('item.delete', $row->id) }}" class="btn btn-danger">Delete</a>
                                    </td>
                                </tr>
                                @empty
                                <tr>
                                    <td colspan="8">No Record Found</td>
                                </tr>
                                @endforelse
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th><strong>TOTAL</strong></th>
                                    <th>{{ $allData->count() }}</th>
                                    <th colspan="6"></th>
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
