@extends('layouts.admin')

@section('content')
    
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h3>Add Color
                 <a href="{{ url('admin/colors') }}" class="btn btn-danger btn-sm text-white float-end">BACK</a>
                </h3>
            </div>
            <div class="card-body">

                <form action="{{ url('admin/colors/'.$color->id) }}" method="POST">
                    @csrf
                    @method('PUT')

                    <div class="mb-3">
                        <label for="">Color Name</label>
                        <input type="text" name="name" class="form-control" placeholder="Enter Color Name" value="{{ $color->name }}">
                        @error('name')
                            <small class="text-danger">{{ $message }}</small>  
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="">Color Code</label>
                        <input type="text" name="code" class="form-control" placeholder="Enter Color Code" value="{{ $color->code }}">
                        @error('code')
                            <small class="text-danger">{{ $message }}</small>  
                        @enderror
                    </div>

                    <div class="col-sm-4">
                        <div class="form-check">
                          <label class="form-check-label">
                            <input type="checkbox" class="form-check-input" {{ $color->status == '1' ? 'checked' : ''}} name="status" > 
                            Status
                            
                          </label>
                          Checked = Hidden, Unchecked = Visible
                        </div>
                    </div>

                    <div class="mb-3">
                        <button type="submit" class="btn btn-primary">Update</button>
                    </div>
                </form>

            </div>
        </div>
    </div>
</div>

@endsection 