@extends('layouts.admin')

@section('content')
    
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h3>Colors Lists
                 <a href="{{ url('admin/colors/create') }}" class="btn btn-primary btn-sm text-white float-end">Add Colors</a>
                </h3>
            </div>
            @include('layouts.alert.msg')
            <div class="card-body">
                <table class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>Color Name</th>
                            <th>Color Code</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        
                        @forelse ($colors as $color)
                            <tr>
                                <td>{{ $color->name }}</td>
                                <td>{{ $color->code}}</td>
                                <td>{{ $color->status == '1' ? 'Hidden':'Visible' }}</td>
                                <td>
                                    <a href="{{ url('admin/colors/'.$color->id.'/edit') }}" class="btn btn-success">Edit</a>
                                    <a href="{{ url('admin/colors/'.$color->id.'/delete') }}" onclick="return confirm('Are you sure you want to delete this color?')" class="btn btn-danger">Delete</a>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="7">No Colors Available</td>
                            </tr>
                        @endforelse
                        
                    </tbody>
                </table>
            </div>
            {{ $colors->links() }}
        </div>
    </div>
</div>

@endsection 