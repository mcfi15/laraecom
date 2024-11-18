@extends('layouts.admin')

@section('content')
    
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h3>Add Product
                 <a href="{{ url('admin/products') }}" class="btn btn-danger btn-sm text-white float-end">BACK</a>
                </h3>
            </div>
            <div class="card-body">

                <form action="{{ url('admin/products') }}" method="POST" enctype="multipart/form-data">
                  @csrf 

                  <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item" role="presentation">
                      <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true">Home</button>
                    </li>
                    <li class="nav-item" role="presentation">
                      <button class="nav-link" id="seo-tab" data-bs-toggle="tab" data-bs-target="#seo" type="button" role="tab" aria-controls="seo" aria-selected="false">SEO Tags</button>
                    </li>
                    <li class="nav-item" role="presentation">
                      <button class="nav-link" id="details-tab" data-bs-toggle="tab" data-bs-target="#details" type="button" role="tab" aria-controls="details" aria-selected="false">Details</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="images-tab" data-bs-toggle="tab" data-bs-target="#images" type="button" role="tab" aria-controls="images" aria-selected="false">Product Images</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="colors-tab" data-bs-toggle="tab" data-bs-target="#colors" type="button" role="tab" aria-controls="colors" aria-selected="false">Product Colors</button>
                    </li>
                  </ul>
                  <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade p-3 show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                        
                        <div class="mb-3">
                            <label class="pb-2" for="">Select Category</label>
                            <select name="category_id" id="" class="select-form form-control">
                                @foreach($categories as $category) 
                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                                @endforeach
                            </select>
                            @error('category_id')
                                <small class="text-danger">{{ $message }}</small>  
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label class="pb-2" for="">(Product Name</label>
                            <input type="text" class="form-control" name="name" value="{{ old('name') }}">
                            @error('name')
                                <small class="text-danger">{{ $message }}</small>  
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label class="pb-2" for="">(Product Slug</label>
                            <input type="text" class="form-control" name="slug" value="{{ old('slug') }}">
                            @error('slug')
                                <small class="text-danger">{{ $message }}</small>  
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label class="pb-2" for="">(Featured Image</label>
                            <input type="file" class="form-control" name="image">
                            @error('image')
                                <small class="text-danger">{{ $message }}</small>  
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label class="pb-2" for="">Select Brand</label>
                            <select name="brand" id="" class="select-form form-control">
                                @foreach($brands as $brand) 
                                <option value="{{ $brand->name }}">{{ $brand->name }}</option>
                                @endforeach
                            </select>
                            @error('brand')
                                <small class="text-danger">{{ $message }}</small>  
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label class="pb-2" for="">(Small Description (500 Words)</label>
                            <textarea name="small_description" class="form-control" id="" cols="30" rows="10">{{ old('small_description') }}</textarea>
                            @error('small_description')
                                <small class="text-danger">{{ $message }}</small>  
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label class="pb-2" for="">(Description </label>
                            <textarea name="description" class="form-control" id="" cols="30" rows="10">{{ old('description') }}</textarea>
                            @error('description')
                                <small class="text-danger">{{ $message }}</small>  
                            @enderror
                        </div>
                    </div>
                    <div class="tab-pane fade p-3" id="seo" role="tabpanel" aria-labelledby="seo-tab">
                        
                        <div class="mb-3">
                            <label class="pb-2" for="">(Meta Title</label>
                            <input type="text" class="form-control" name="meta_title" value="{{ old('meta_title') }}">
                            @error('meta_title')
                                <small class="text-danger">{{ $message }}</small>  
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label class="pb-2" for="">(Meta Keyword</label>
                            <input type="text" class="form-control" name="meta_keyword" value="{{ old('meta_keyword') }}">
                            @error('meta_keyword')
                                <small class="text-danger">{{ $message }}</small>  
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label class="pb-2" for="">(Meta Description</label>
                            <textarea name="meta_description" class="form-control" id="" cols="30" rows="10">{{ old('meta_description') }}</textarea>
                            @error('meta_description')
                                <small class="text-danger">{{ $message }}</small>  
                            @enderror
                        </div>
                    </div>
                    <div class="tab-pane fade p-3" id="details" role="tabpanel" aria-labelledby="details-tab">
                        
                        <div class="row">
                            <div class="col-md-4">
                                <div class="mb-3">
                                    <label class="pb-2" for="">(Original Price</label>
                                    <input type="text" class="form-control" name="original_price" value="{{ old('original_price') }}">
                                    @error('original_price')
                                        <small class="text-danger">{{ $message }}</small>  
                                    @enderror
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="mb-3">
                                    <label class="pb-2" for="">(Selling Price</label>
                                    <input type="text" class="form-control" name="selling_price" value="{{ old('selling_price') }}">
                                </div>
                                @error('selling_price')
                                    <small class="text-danger">{{ $message }}</small>  
                                @enderror
                            </div>

                            <div class="col-md-4">
                                <div class="mb-3">
                                    <label class="pb-2" for="">(Quantity</label>
                                    <input type="number" class="form-control" name="quantity" value="{{ old('quantity') }}">
                                    @error('quantity')
                                        <small class="text-danger">{{ $message }}</small>  
                                    @enderror
                                </div>
                            </div>

                            <div class="col-sm-4">
                                <div class="form-check">
                                  <label class="form-check-label">
                                    <input type="checkbox" class="form-check-input" name="trending" id="membershipRadios2" value="option2">
                                    Trending
                                  </label>
                                </div>
                            </div>

                            <div class="col-sm-4">
                                <div class="form-check">
                                  <label class="form-check-label">
                                    <input type="checkbox" class="form-check-input" name="status" value="option2"> 
                                    Status
                                  </label>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="tab-pane fade p-3" id="images" role="tabpanel" aria-labelledby="images-tab">
                        
                        <div class="mb-3">
                            <label class="pb-2" for="">(Product Images (Uploads multiple images)</label>
                            <input type="file" class="form-control" name="images[]" multiple>
                        </div>

                        
                    </div>

                    <div class="tab-pane fade p-3" id="colors" role="tabpanel" aria-labelledby="colors-tab">
                        
                        <div class="mb-3">
                            <label class="pb-2">Select Color</label>
                            <hr>
                            <div class="row">
                                @forelse ($colors as $item)
                                <div class="col-md-3">
                                    <div class="p-3 border mb-3">
                                        Color: <input type="checkbox" name="colors[{{ $item->id }}]" value="{{ $item->id }}" >
                                        {{ $item->name }}
                                        <br>
                                        Quantity: <input type="number" name="colorquantity[{{ $item->id }}]" style="width:50px; border:1px solid" />
                                    </div>
                                </div>
                                @empty
                                    <div class="col-md-12">
                                        No colors found
                                    </div>
                                @endforelse
                                
                            </div>
                        </div>

                        
                    </div>
                  </div>

                  <div>
                    <button type="submit" class="btn btn-primary text-white">Submit</button>
                  </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection 