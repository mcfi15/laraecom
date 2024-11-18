@extends('layouts.admin')

@section('content')
    
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h3>Update Slider
                 <a href="{{ url('admin/sliders') }}" class="btn btn-danger btn-sm text-white float-end">BACK</a>
                </h3>
            </div>
            <div class="card-body">

                <form action="{{ url('admin/sliders/'.$slider->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    <div class="mb-3">
                        <label for="" class="p-2">Title</label>
                        <input type="text" name="title" class="form-control" value="{{ $slider->title }}">
                        @error('title')
                            <small class="text-danger">{{ $message }}</small>  
                        @enderror
                    </div>

                    <div class="mb-3">
                        <img src="{{ asset($slider->image) }}" alt="" width="120" height="120">
                        <br>
                        <label for="" class="p-2">Image</label>
                        <input type="file" name="image" class="form-control">
                        @error('image')
                            <small class="text-danger">{{ $message }}</small>  
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="" class="p-2">URL</label>
                        <input type="text" name="url" class="form-control" value="{{ $slider->url }}">
                        @error('url')
                            <small class="text-danger">{{ $message }}</small>  
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="" class="p-2">Description</label>
                        <textarea name="description" id="" class="form-control" cols="30" rows="10">{{ $slider->description }}</textarea>
                        @error('description')
                            <small class="text-danger">{{ $message }}</small>  
                        @enderror
                    </div>

                    <div class="col-sm-4 mb-5">
                        <div class="form-check">
                          <label class="form-check-label" class="p-2">
                            <input type="checkbox" class="form-check-input" name="status" {{ $slider->status == '1' ? 'checked' : '' }}> 
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