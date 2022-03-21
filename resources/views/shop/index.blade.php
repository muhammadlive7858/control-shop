@extends('admin.index')

@section('content')

<form action="{{ route('shop-show-cate') }}" method="post" class="form-control d-flex mb-3 p-2">
    <select class="form-select p-2" aria-label="Default select example">
        <option selected>Tavar bo'limini tanlang</option>
        @foreach($cate as $cat)
            <option name="cateid" value="{{ $cat->id }}">{{ $cat->name }}</option>
        @endforeach
    </select>
    <button class="btn btn-primary mx-2">Tanlandi</button>
</form>
<div class="header  d-flex align-items-center justify-content-between">
    <h3>Tavar topish</h3>
<div class="search-bar">
    <form class="search-form d-flex align-items-center" method="POST" action="#">
        <input type="text" name="query" placeholder="Search" title="Enter search keyword">
        <button type="submit" title="Search"><i class="bi bi-search"></i></button>
    </form>
</div>
</div>
<!-- End Search Bar -->
{{-- class="header fixed-top d-flex align-items-center" --}}

@endsection