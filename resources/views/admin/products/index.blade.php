@extends('layouts.admin')

@section('content')
    
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h3>Products
                 <a href="{{ url('admin/products/create') }}" class="btn btn-primary btn-sm text-white float-end">Add Product</a>
                </h3>
            </div>
            @include('layouts.alert.msg')
            <div class="card-body">
                <table class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>Product Name</th>
                            <th>Category</th>
                            <th>Product ID</th>
                            <th>Featured Image</th>
                            <th>Price</th>
                            <th>Quantity</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        
                        @forelse ($products as $product)
                            <tr>
                                <td>{{ $product->name }}</td>
                                <td>
                                    @if ($product->category)
                                        {{ $product->category->name }}</td>
                                    @else
                                        No Category Found
                                    @endif
                                </td>
                                <td>{{ $product->product_code }}</td>
                                <td>
                                    <img src="{{ asset($product->image) }}" alt="" >
                                </td>
                                <td>{{ $product->selling_price}}</td>
                                <td>{{ $product->quantity }}</td>
                                <td>{{ $product->status == '1' ? 'Hidden':'Visible' }}</td>
                                <td>
                                    <a href="{{ url('admin/products/'.$product->id.'/edit') }}" class="btn btn-success btn-sm">Edit</a>
                                    <a href="{{ url('admin/products/'.$product->id.'/delete') }}" onclick="return confirm('Are you sure you want to delete this product?')" class="btn btn-danger btn-sm">Delete</a>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="7">No Products Available</td>
                            </tr>
                        @endforelse
                        
                    </tbody>
                </table>
            </div>
            {{ $products->links() }}
        </div>
    </div>
</div>

@endsection 