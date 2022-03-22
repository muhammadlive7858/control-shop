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
<form class="row g-3 d-flex justify-content-between align-center form-control m-1" action="">
    <h4 class="col-md-6">Tavar ID raqamini kiriting:</h4>
    <div class="div col-md-6 d-flex aling-center justify-content-between">
    <div class="col-auto" style="width:80%">
        <label for="inputPassword2" class="visually-hidden">Tavar</label>
        <input type="productid" class="form-control" id="inputPassword2" placeholder="">
    </div>
    <div class="col-auto">
        <button type="submit" class="btn btn-primary mb-2">Topish</button>
    </div>
    </div>
</form>
</div>
</div>
<!-- End Search Bar -->
{{-- class="header fixed-top d-flex align-items-center" --}}

@endsection