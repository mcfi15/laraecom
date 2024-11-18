@extends('layouts.app')

@section('title', 'All Categories')

@section('content')
<div class="breadcrumb-area">
    <div class="container">
        <div class="breadcrumb-content">
            <ul>
                <li><a href="{{ url('/') }}">Home</a></li>
                <li class="active">All Categories</li>
            </ul>
        </div>
    </div>
</div>

<div class="content-wraper pt-60 pb-60">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">

                <div class="shop-products-wrapper">
                    <div class="tab-content">
                        <div id="grid-view" class="tab-pane fade active show" role="tabpanel">
                            <div class="product-area shop-product-area">
                                <h4>Categories</h4>
                                <div class="row">

                                    @forelse ($categories as $catItem)
                                        
                                    
                                    <div class="col-lg-3 col-md-4 col-sm-6 mt-40">
                                        <!-- single-product-wrap start -->
                                        <div class="single-product-wrap">
                                            <div class="product-image">
                                                <a href="{{ url('/collections/'.$catItem->slug) }}">
                                                    <img src="{{ asset($catItem->image) }}" alt="Li's Product Image">
                                                </a>
                                            </div>
                                            <div class="product_desc">
                                                <div class="product_desc_info">
                                                    <div class="product-review">
                                                    </div>

                                                    <center>
                                                        <h2><a class="product_name mt-3" href="s{{ url('/collections/'.$catItem->slug) }}">{{ $catItem->name }}</a></h2>
                                                    </center>
                                                    
                                                    
                                                </div>
                                                
                                            </div>
                                        </div>
                                        <!-- single-product-wrap end -->
                                    </div>
                                    @empty

                                    <div class="col-md-12">
                                        <h4>No Categories Available For </h4>
                                    </div>

                                    @endforelse


                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
@endsection