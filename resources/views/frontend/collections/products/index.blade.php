@extends('layouts.app')

@section('title', $category->name)

@section('meta_description', $category->meta_description)
@section('meta_keywords', $category->meta_keyword)
@section('meta_title', $category->meta_title)

@section('content')

<div class="breadcrumb-area">
    <div class="container">
        <div class="breadcrumb-content">
            <ul>
                <li><a href="{{ url('/') }}">Home</a></li>
                <li class="active">Products</li>
            </ul>
        </div>
    </div>
</div>


<div class="content-wraper pt-60 pb-60 pt-sm-30">
    <div class="container">
        <livewire:frontend.product.index :category="$category" />
    </div>
</div>



@endsection