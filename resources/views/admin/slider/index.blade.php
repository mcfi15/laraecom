@extends('layouts.admin')

@section('content')
    
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h3>Sliders
                 <a href="{{ url('admin/sliders/create') }}" class="btn btn-primary btn-sm text-white float-end">Add Slider</a>
                </h3>
            </div>
            @include('layouts.alert.msg')
            <div class="card-body">
                <table class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>Title</th>
                            <th>Image</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        
                        @forelse ($sliders as $sliderItem)
                            <tr>
                                <td>{{ $sliderItem->title }}</td>
                                <td><img src="{{ asset($sliderItem->image) }}" alt="" width="80" height="80"></td>
                                <td>{{ $sliderItem->status == '1' ? 'Hidden':'Visible' }}</td>
                                <td>
                                    <a href="{{ url('admin/sliders/'.$sliderItem->id.'/edit') }}" class="btn btn-success">Edit</a>
                                    <a href="{{ url('admin/sliders/'.$sliderItem->id.'/delete') }}" onclick="return confirm('Are you sure you want to delete this slider?')" class="btn btn-danger">Delete</a>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="7">No Sliders Available</td>
                            </tr>
                        @endforelse
                        
                    </tbody>
                </table>
            </div>
            {{ $sliders->links() }}
        </div>
    </div>
</div>



@endsection 