<div>
    <div class="row">
        <div class="col-lg-9 order-1 order-lg-2">
            
            <!-- shop-products-wrapper start -->
            <div class="shop-products-wrapper">
                <div class="tab-content">
                    <div id="grid-view" class="tab-pane fade active show" role="tabpanel">
                        <div class="product-area shop-product-area">
                            <div class="row">
                                @forelse ($products as $productItem)
                                <div class="col-lg-4 col-md-4 col-sm-6 mt-40">
                                    <!-- single-product-wrap start -->
                                    <div class="single-product-wrap">
                                        <div class="product-image">
                                            <a href="{{ url('/collections/'.$productItem->category->slug.'/'.$productItem->slug) }}">
                                                <img src="{{ asset($productItem->image) }}" height="250px" alt="Product Image">
                                            </a>
                                            @if ($productItem->quantity > 0)
                                                <span class="sticker">In Stock</span>
                                            @else
                                                <span class="sticker">Out of Stock</span> 
                                            @endif
                                        </div>
                                        <div class="product_desc">
                                            <div class="product_desc_info">
                                                <div class="product-review">
                                                    <h5 class="manufacturer">
                                                        {{ $productItem->brand }}
                                                    </h5>
                                                    {{-- <div class="rating-box">
                                                        <ul class="rating">
                                                            <li><i class="fa fa-star-o"></i></li>
                                                            <li><i class="fa fa-star-o"></i></li>
                                                            <li><i class="fa fa-star-o"></i></li>
                                                            <li class="no-star"><i class="fa fa-star-o"></i></li>
                                                            <li class="no-star"><i class="fa fa-star-o"></i></li>
                                                        </ul>
                                                    </div> --}}
                                                </div>
                                                <h4><a class="product_name" href="{{ url('/collections/'.$productItem->category->slug.'/'.$productItem->slug) }}">{{ $productItem->name }}</a></h4>
                                                <div class="price-box">
                                                    <span class="new-price">${{ number_format($productItem->selling_price, 2) }}</span>
                
                                                    <span class="new-price" style="text-decoration: line-through; color:#937979;">${{ number_format($productItem->original_price, 2) }}</span>
                                                </div>
                                            </div>
                                            <div class="add-actions">
                                                <ul class="add-actions-link">
                                                    <li class="add-cart active"><a href="shopping-cart.html">Add to cart</a></li>
                                                    <li><a href="{{ url('/collections/'.$productItem->category->slug.'/'.$productItem->slug) }}" title="view" class="quick-view-btn" ><i class="fa fa-eye"></i></a></li>
                                                    <li><a class="links-details" href="wishlist.html"><i class="fa fa-heart-o"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- single-product-wrap end -->
                                </div>
                                @empty

                                <div class="col-md-12">
                                    <h4>No Products Available For {{ $category->name }}</h4>
                                </div>
                
                                @endforelse

                            </div>
                        </div>
                    </div>

                    <div class="paginatoin-area">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 pt-xs-15">
                                <p>Showing 1-12 of 13 item(s)</p>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <ul class="pagination-box pt-xs-20 pb-xs-15">
                                    <li><a href="#" class="Previous"><i class="fa fa-chevron-left"></i> Previous</a>
                                    </li>
                                    <li class="active"><a href="#">1</a></li>
                                    <li><a href="#">2</a></li>
                                    <li><a href="#">3</a></li>
                                    <li>
                                      <a href="#" class="Next"> Next <i class="fa fa-chevron-right"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- shop-products-wrapper end -->
        </div>
        <div class="col-lg-3 order-2 order-lg-1">
            
            <!--sidebar-categores-box start  -->
            <div class="sidebar-categores-box">
                <div class="sidebar-title">
                    <h2>Filter By</h2>
                </div>
                
                @if($category->brands)
                <div class="filter-sub-area">
                    <h5 class="filter-sub-titel">Brand</h5>
                    <div class="categori-checkbox">
                            <ul>
                                @foreach ($category->brands as $brandItem)
                                    <li><input type="checkbox" wire:model.live="brandInputs" value="{{ $brandItem->name }}"><a>{{ $brandItem->name }} </a></li>
                                @endforeach
                                
                            </ul>
                    </div>
                 </div>
                @endif

                <div class="filter-sub-area">
                    <h5 class="filter-sub-titel">Price</h5>
                    <div class="categori-checkbox">
                            <ul>
                                @foreach ($category->brands as $brandItem)
                                    <li><input type="radio" name="priceSort" wire:model.live="priceInput" value="high-to-low"><a>High to Low</a></li>

                                    <li><input type="radio" name="priceSort" wire:model.live="priceInput" value="low-to-high"><a>Low to High</a></li>
                                @endforeach
                                
                            </ul>
                    </div>
                 </div>


                <div class="filter-sub-area pt-sm-10 pt-xs-10">
                    <h5 class="filter-sub-titel">Categories</h5>
                    <div class="categori-checkbox">
                        <form action="#">
                            <ul>
                                <li><input type="checkbox" name="product-categori"><a href="#">Graphic Corner (10)</a></li>
                                <li><input type="checkbox" name="product-categori"><a href="#"> Studio Design (6)</a></li>
                            </ul>
                        </form>
                    </div>
                 </div>
                <!-- filter-sub-area end -->
                <!-- filter-sub-area start -->
                <div class="filter-sub-area pt-sm-10 pt-xs-10">
                    <h5 class="filter-sub-titel">Size</h5>
                    <div class="size-checkbox">
                        <form action="#">
                            <ul>
                                <li><input type="checkbox" name="product-size"><a href="#">S (3)</a></li>
                                <li><input type="checkbox" name="product-size"><a href="#">M (3)</a></li>
                                <li><input type="checkbox" name="product-size"><a href="#">L (3)</a></li>
                                <li><input type="checkbox" name="product-size"><a href="#">XL (3)</a></li>
                            </ul>
                        </form>
                    </div>
                </div>
                <!-- filter-sub-area end -->
                <!-- filter-sub-area start -->
                <div class="filter-sub-area pt-sm-10 pt-xs-10">
                    <h5 class="filter-sub-titel">Color</h5>
                    <div class="color-categoriy">
                        <form action="#">
                            <ul>
                                <li><span class="white"></span><a href="#">White (1)</a></li>
                                <li><span class="black"></span><a href="#">Black (1)</a></li>
                                <li><span class="Orange"></span><a href="#">Orange (3) </a></li>
                                <li><span class="Blue"></span><a href="#">Blue  (2) </a></li>
                            </ul>
                        </form>
                    </div>
                </div>
                <!-- filter-sub-area end -->
                <!-- filter-sub-area start -->
                <div class="filter-sub-area pt-sm-10 pb-sm-15 pb-xs-15">
                    <h5 class="filter-sub-titel">Dimension</h5>
                    <div class="categori-checkbox">
                        <form action="#">
                            <ul>
                                <li><input type="checkbox" name="product-categori"><a href="#">40x60cm (6)</a></li>
                                <li><input type="checkbox" name="product-categori"><a href="#">60x90cm (6)</a></li>
                                <li><input type="checkbox" name="product-categori"><a href="#">80x120cm (6)</a></li>
                            </ul>
                        </form>
                    </div>
                 </div>
                <!-- filter-sub-area end -->
            </div>
            <!--sidebar-categores-box end  -->
            
        </div>
    </div>



   
</div>
