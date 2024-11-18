<?php

namespace App\Models;

use App\Models\Image;
use App\Models\Category;
use App\Models\ProductColor;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Product extends Model
{
    use HasFactory;

    protected $table = 'products';

    protected $fillable = [
        'category_id',
        'name',
        'small_description',
        'description',
        'price',
        'brand',
        'original_price',
        'selling_price',
        'quantity',
        'trending',
        'status',
        'image',
        'slug',
        'meta_title',
        'meta_description',
        'meta_keyword',
        'product_code'
    ];

    public function category(){
        return $this->belongsTo(Category::class, 'category_id', 'id');
    }

    public function images(){
        return $this->hasMany(Image::class, 'product_id', 'id');
    }

    public function productColors(){
        return $this->hasMany(ProductColor::class, 'product_id', 'id');
    }
}
