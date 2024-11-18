<?php

namespace App\Http\Controllers\Admin;

use App\Models\Brand;
use App\Models\Color;
use App\Models\Image;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Support\Str;
use App\Models\ProductColor;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use App\Http\Requests\ProductFormRequest;

class ProductController extends Controller
{
    public function index(){
        $products = Product::latest()->paginate('10');
        return view('admin.products.index', compact('products'));
    }

    public function create(){
        $categories = Category::all();
        $brands = Brand::all();
        $colors = Color::where('status', '0')->get();
        return view('admin.products.create', compact('brands', 'categories', 'colors'));
    }

    public function store(ProductFormRequest $request){
        $validatedData = $request->validated();

        $category = Category::findOrFail($validatedData['category_id']);

        if($request->hasFile('image')){
            $file = $request->file('image');
            $ext = $file->getClientOriginalExtension();
            $filename = time().'.'.$ext;

            $file->move('uploads/featuredImage/',$filename);
            $validatedData['image'] = "uploads/featuredImage/$filename";
        }

        // $validatedData['product_code'] = 'PT-'.rand(100000,999999);
        $validatedData['status'] = $request->status == true ? '1' : '0';
        $validatedData['trending'] = $request->trending == true ? '1' : '0';

        $product = $category->products()->create([
            'category_id' => $validatedData['category_id'],
            'name' => $validatedData['name'],
            'product_code' => 'PN-'.time(),
            'small_description' => $validatedData['small_description'],
            'selling_price' => $validatedData['selling_price'],
            'original_price' => $validatedData['original_price'],
            'trending' => $validatedData['trending'],
            'brand' => $validatedData['brand'],
            'description' => $validatedData['description'],
            'quantity' => $validatedData['quantity'],
            'status' => $validatedData['status'],
            'slug' => Str::slug($validatedData['slug']),
            'meta_title' => $validatedData['meta_title'],
            'meta_description' => $validatedData['meta_description'],
            'meta_keyword' => $validatedData['meta_keyword'],
            'image' => $validatedData['image']
        ]);

        if($request->hasFile('images')){
            $uploadPath = 'uploads/images/';

            $i = 1;
            foreach($request->file('images') as $images){
                $extension = $images->getClientOriginalExtension();
                $filename = time().$i++.'.'.$extension;
                $images->move($uploadPath,$filename);
                $fileImagesPathName = $uploadPath.$filename;

                $product->images()->create([
                    'product_id' => $product->id,
                    'images' => $fileImagesPathName,
                ]);
            }
        }

        if($request->colors){
            foreach($request->colors as $key => $color){
                $product->productColors()->create([
                    'product_id' => $product->id,
                    'color_id' => $color,
                    'quantity' => $request->colorquantity[$key] ?? 0
                ]);
            }
        }

        return redirect('admin/products')->with('message', 'Products Successfully uploaded');
    }

    public function edit(int $product_id){
        $categories = Category::all();
        $brands = Brand::all();
        $product = Product::findOrFail($product_id);
        $product_color = $product->productColors->pluck('color_id')->toArray();
        $colors = Color::whereNotIn('id', $product_color)->get();
        return view('admin.products.edit', compact('product', 'categories', 'brands', 'colors'));
    }

    public function update(ProductFormRequest $request, int $product_id){
        $validatedData = $request->validated();

        $product = Product::findOrFail($product_id);

        // $product = Category::findOrFail($validatedData['category_id'])
        //                 ->products()->where('id', $product_id)->first();
        if($product){
            
            if($request->hasFile('image')){
                $path = $product->image;
                if(File::exists($path)){
                    File::delete($path);
                }

                $file = $request->file('image');
                $ext = $file->getClientOriginalExtension();
                $filename = time().'.'.$ext;
    
                $file->move('uploads/featuredImage/',$filename);
                $product->image = 'uploads/featuredImage/'.$filename;
            }
    
            $validatedData['status'] = $request->status == true ? '1' : '0';
            $validatedData['trending'] = $request->trending == true ? '1' : '0';

            
            
            $product->update([
                'category_id' => $validatedData['category_id'],
                'name' => $validatedData['name'],
                'small_description' => $validatedData['small_description'],
                'description' => $validatedData['description'],
                'selling_price' => $validatedData['selling_price'],
                'original_price' => $validatedData['original_price'],
                'brand' => $validatedData['brand'],
                'quantity' => $validatedData['quantity'],
                'status' => $validatedData['status'],
                'trending' => $validatedData['trending'],
                'slug' => Str::slug($validatedData['slug']),
                'meta_title' => $validatedData['meta_title'],
                'meta_description' => $validatedData['meta_description'],
                'meta_keyword' => $validatedData['meta_keyword'],
            ]);


            if($request->hasFile('images')){
                $uploadPath = 'uploads/images/';
    
                $i = 1;
                foreach($request->file('images') as $images){
                    $extension = $images->getClientOriginalExtension();
                    $filename = time().$i++.'.'.$extension;
                    $images->move($uploadPath,$filename);
                    $fileImagesPathName = $uploadPath.$filename;
    
                    $product->images()->create([
                        'product_id' => $product->id,
                        'images' => $fileImagesPathName,
                    ]);
                }
            }

            if($request->colors){
                foreach($request->colors as $key => $color){
                    $product->productColors()->create([
                        'product_id' => $product->id,
                        'color_id' => $color,
                        'quantity' => $request->colorquantity[$key] ?? 0
                    ]);
                }
            }

            return redirect('admin/products')->with('message', 'Product Updated Successfully');
        }else{
            return redirect('admin/products')->with('error', 'No Such Product ID Found');
        }
    }


    public function destroyImage(int $parcel_image_id){
        $image = Image::findOrFail($parcel_image_id);
        $path = $image->images;
        if(File::exists($path)){
            File::delete($path);
        }
        $image->delete();
        return redirect()->back()->with('message', 'Product Image Deleted Successfully');
    }

    public function destroy(int $product_id){
        $product = Product::findOrFail($product_id);
        $destination = $product->image;
        if(File::exists($destination)){
            File::delete($destination);
        }
        if($product->images){
            foreach ($product->images as $image) {
                $path = $image->images;
                if(File::exists($path)){
                    File::delete($path);
                }
            }
        }
        $product->delete();
        return redirect()->back()->with('message', 'Product Deleted Successfully');
    }

    public function updateProductColorQty(Request $request, $prod_color_id){
        $productColorData = Product::findOrFail($request->product_id)
        ->productColors()->where('id', $prod_color_id)->first();

        // $productColorData = ProductColor::findOrFail($prod_color_id);

        $productColorData->update([
            'quantity' => $request->qty
        ]);

        return response()->json(['message'=>'Product Color Quantity Update']);
    }

    public function deleteProductColor($prod_color_id){
        $prodColor = ProductColor::findOrFail($prod_color_id);
        $prodColor->delete();
        return response()->json(['message'=>'Product Color Deleted Successfully']);
    }

}
