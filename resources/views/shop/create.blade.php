@extends('admin.index')

@section('content')
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


    <table class="table table-bordered w-100">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nomi</th>
                    <th scope="col">Kategoriya</th>
                    <th>Rasm</th>
                    <th>Narxi</th>
                    <th scope="col">ID raqami</th>
                    <th scope="col" style="width:10% !important">Amallar</th>
                </tr>
            </thead>
            <tbody>
                @forelse($product as $prod)
                <tr>
                    <td scope="row">{{ $prod->id }}</th>
                    <td>{{ $prod->name }}</td>
                    <td>{{ $prod->category_id }}</td>
                    <td>{{ $prod->image }}</td>
                    <td>{{ $prod->price }}</td>
                    <td>{{ $prod->producttime }}</td>
                    <td  class="d-flex align-center justify-content-around">
                        <a href="{{ route('product.edit',$prod->id) }}" class="mt-2"><i class="bi bi-pencil btn-success w-100 p-2" style='border-radius:5px'></i></a>
                        <form action="{{ route('product.destroy',$prod->id) }}" method="post" class="d-flex align-center ">
                            @csrf
                            @method('delete')
                        <button class="btn-danger w-100 p-1 "style='border-radius:5px' ><i class="bi bi-trash-fill " ></i></button>
                        </form>
                    </td>
                </tr>
                @empty
                <h6>Bunday ID yoq</h6>
                @endforelse
            </tbody>
        </table>
@endsection