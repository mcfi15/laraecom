@extends('layouts.admin')

@section('content')

@include('layouts.alert.msg')
    <div>
        <livewire:admin.category.index />
    </div>
@endsection 