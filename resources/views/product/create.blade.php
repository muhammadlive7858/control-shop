@extends('admin.index')

@section('content')

    <h1>Tavarni Yaratish</h1>
    <form action="{{ route('product.store') }}" method="post" class="form-control d-flex flex-column ">
        @csrf
        <input type="text" name="name" class="input-control m-2 p-2" placeholder="Tavar nomini kiriting:">
        <select name="cate" id="" class="form-select m-2" style="width:99%">
            <option value="">Kategoriyani tanlang</option>
            @foreach($cate as $cate)
                <option value="{{$cate->id}}">{{ $cate->name }}</option>
            @endforeach
        </select>
        <div class="m-2">
            <label for="formFile" class="form-label">Tavar rasmini yuklash</label>
            <input class="form-control" type="file" id="formFile" name="image">
        </div>
        <input type="number" name="price" class="input-control m-2 p-2" placeholder="Tavar narxini kiriting:">

        <textarea name="desc" id="" cols="30" rows="10" class="imput-control m-2 p-2">Tavar uchun ma'lumot</textarea>
        <button class="btn btn-primary m-2">Yaratish</button>
    </form>
@endsection