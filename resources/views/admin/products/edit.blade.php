@extends('layouts.admin')

@section('content')
    
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h3>Update Product
                 <a href="{{ url('admin/products') }}" class="btn btn-danger btn-sm text-white float-end">BACK</a>
                </h3>
            </div>
            <div class="card-body">
                @include('layouts.alert.msg')

                <form action="{{ url('admin/products/'.$product->id) }}" method="POST" enctype="multipart/form-data">
                  @csrf 
                  @method('PUT')

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
                                <option value="{{ $category->id }}" {{ $category->id == $product->category_id ? 'selected':'' }}>{{ $category->name }}</option>
                                @endforeach
                            </select>
                            @error('category_id')
                                <small class="text-danger">{{ $message }}</small>  
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label class="pb-2" for="">(Product Name</label>
                            <input type="text" class="form-control" name="name" value="{{ $product->name }}">
                            @error('name')
                                <small class="text-danger">{{ $message }}</small>  
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label class="pb-2" for="">(Product Slug</label>
                            <input type="text" class="form-control" name="slug" value="{{ $product->slug }}" readonly>
                            @error('slug')
                                <small class="text-danger">{{ $message }}</small>  
                            @enderror
                        </div>

                        <div class="mb-3">
                            <img src="{{ asset($product->image) }}" alt="" height="80" width="80">
                            <br>
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
                                <option value="{{ $brand->name }}" {{ $brand->name == $product->brand ? 'selected':'' }}>{{ $brand->name }}</option>
                                @endforeach
                            </select>
                            @error('brand')
                                <small class="text-danger">{{ $message }}</small>  
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label class="pb-2" for="">(Small Description (500 Words)</label>
                            <textarea name="small_description" class="form-control" id="" cols="30" rows="10">{{ $product->small_description }}</textarea>
                            @error('small_description')
                                <small class="text-danger">{{ $message }}</small>  
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label class="pb-2" for="">(Description </label>
                            <textarea name="description" class="form-control" id="" cols="30" rows="10">{{ $product->description }}</textarea>
                            @error('description')
                                <small class="text-danger">{{ $message }}</small>  
                            @enderror
                        </div>
                    </div>
                    <div class="tab-pane fade p-3" id="seo" role="tabpanel" aria-labelledby="seo-tab">
                        
                        <div class="mb-3">
                            <label class="pb-2" for="">(Meta Title</label>
                            <input type="text" class="form-control" name="meta_title" value="{{ $product->meta_description }}">
                            @error('meta_title')
                                <small class="text-danger">{{ $message }}</small>  
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label class="pb-2" for="">(Meta Keyword</label>
                            <input type="text" class="form-control" name="meta_keyword" value="{{ $product->meta_keyword }}">
                            @error('meta_keyword')
                                <small class="text-danger">{{ $message }}</small>  
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label class="pb-2" for="">(Meta Description</label>
                            <textarea name="meta_description" class="form-control" id="" cols="30" rows="10">{{ $product->meta_description }}</textarea>
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
                                    <input type="text" class="form-control" name="original_price" value="{{ $product->original_price }}">
                                    @error('original_price')
                                        <small class="text-danger">{{ $message }}</small>  
                                    @enderror
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="mb-3">
                                    <label class="pb-2" for="">(Selling Price</label>
                                    <input type="text" class="form-control" name="selling_price" value="{{ $product->selling_price }}">
                                </div>
                                @error('selling_price')
                                    <small class="text-danger">{{ $message }}</small>  
                                @enderror
                            </div>

                            <div class="col-md-4">
                                <div class="mb-3">
                                    <label class="pb-2" for="">(Quantity</label>
                                    <input type="number" class="form-control" name="quantity" value="{{ $product->quantity }}">
                                    @error('quantity')
                                        <small class="text-danger">{{ $message }}</small>  
                                    @enderror
                                </div>
                            </div>

                            <div class="col-sm-4">
                                <div class="form-check">
                                  <label class="form-check-label">
                                    <input type="checkbox" class="form-check-input" name="trending" {{ $product->trending == '1' ? 'checked' : ''}}> 
                                    Trending
                                    
                                  </label>
                                  Checked = Hidden, Unchecked = Visible
                                </div>
                            </div>

                            <div class="col-sm-4">
                                <div class="form-check">
                                  <label class="form-check-label">
                                    <input type="checkbox" class="form-check-input" {{ $product->status == '1' ? 'checked' : ''}} name="status" > 
                                    Status
                                    
                                  </label>
                                  Checked = Hidden, Unchecked = Visible
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="tab-pane fade p-3" id="images" role="tabpanel" aria-labelledby="images-tab">
                        
                        <div class="mb-3">
                            <label class="pb-2" for="">(Product Images (Uploads multiple images)</label>
                            <input type="file" class="form-control" name="images[]" multiple>
                        </div>

                        <div>
                           
                            @if ($product->images)
                                <div class="row">
                                    @forelse ($product->images as $image)
                                    <div class="col-md-2">
                                        <img src="{{ asset("$image->images") }}" alt="Images" style="width:80px; height:80px;" class="me-4 border">
                                        <a href="{{ url('admin/product-image/'.$image->id.'/delete') }}" class="d-black">Remove</a>
                                    </div>
                                    @empty   
                                    <span style="color: red;">No Image Added</span>
                                    @endforelse
                                </div>
                            @endif

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
                                        No colors added
                                    </div>
                                @endforelse
                                
                            </div>
                        </div>

                        <div class="table-responsive">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>Color Name</th>
                                        <th>Quantity</th>
                                        <th>Delete</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($product->productColors as $prodColor)

                                    <tr class="prod-color-tr">
                                        <td>
                                            @if ($prodColor->color)
                                                {{ $prodColor->color->name }}</td>
                                            @else
                                                No Color Found
                                            @endif
                                            
                                        <td>
                                            <div class="input-group mb-3" style="width:150px">
                                                <input type="text" value="{{ $prodColor->quantity }}" class="productColorQuantity form-control form-control-sm">
                                                <button type="button" value="{{ $prodColor->id }}" class="updateProdctColorBtn btn btn-primary btn-sm text-white">Update</button>
                                            </div>
                                        </td>
                                        <td>
                                            <button type="button" value="{{ $prodColor->id }}" class="DeleteProdctColorBtn btn btn-danger btn-sm text-white">Delete</button>
                                        </td>
                                    </tr>
                                        
                                    @empty
                                         <tr>
                                            <td>No Colors Found</td>
                                         </tr>
                                    @endforelse
                                    
                                </tbody>
                            </table>
                        </div>

                        
                    </div>
                  </div>

                  <div>
                    <button type="submit" class="btn btn-primary text-white">Update</button>
                  </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection 

@section('scripts')

<script>
    $(document).ready(function () {

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $(document).on('click', '.updateProdctColorBtn', function(){

            var product_id = "{{ $product->id }}";
            var prod_color_id = $(this).val();
            var qty = $(this).closest('.prod-color-tr').find('.productColorQuantity').val();
            // alert(prod_color_id);

            if(qty <= 0){
                alert('Quantity is required');
                return false;
            }

            var data = {
                'product_id': product_id,
                'qty': qty
            }

            $.ajax({
                type: "POST",
                url: "/admin/product-color/"+prod_color_id,
                data: data,
                success: function (response){
                    alert(response.message)
                }
            }); 
        });

        $(document).on('click', '.DeleteProdctColorBtn', function(){
        
            var prod_color_id = $(this).val();
            var thisClick = $(this);

            $.ajax({
                type: "GET",
                url: "/admin/product-color/"+prod_color_id+"/delete",
                success: function (response){
                    thisClick.closest('.prod-color-tr').remove();
                    alert(response.message);
                }
            }); 
        });

    });
</script>

@endsection