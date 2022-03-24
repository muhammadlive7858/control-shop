@extends('admin.index')

@section('content')


<!-- End Search Bar -->

<h2>Sotuv Ofisi</h2>
<hr>
<form action="{{ route('shop-show-cate') }}" method="" class="form-control d-flex mb-3 p-2">
    @csrf
    @method('get')
    <select class="form-select p-2" aria-label="Default select example" name="cateid">
        <option selected>Tavar bo'limini tanlang</option>
        @foreach($cate as $cat)
            <option name="" value="{{ $cat->id }}">{{ $cat->name }}</option>
        @endforeach
    </select>
    <button class="btn btn-primary mx-2">Tanlandi</button>
</form>


<form class="row g-3 d-flex justify-content-between align-center form-control m-1" action="{{ route('product-id') }}">
    @csrf
    <h4 class="col-md-6">Tavar ID raqamini kiriting:</h4>
    <div class="div col-md-6 d-flex aling-center justify-content-between">
    <div class="col-auto" style="width:80%">
        <label for="inputPassword2" class="visually-hidden">Tavar</label>
        <input type="text" name="productid"  class="form-control" id="inputPassword2" placeholder="ID kiriting:">
    </div>
    <div class="col-auto">
        <button type="submit" class="btn btn-primary mb-2">Topish</button>
    </div>
    </div>
</form>

<hr>


@endsection