@extends('admin.index')

@section('content')

    <h1 class="w-100">Hamma Tavarlar sahifasi</h1>
    <table class="table table-bordered w-100">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nomi</th>
                    <th scope="col">Kategoriya</th>
                    <th>Rasm</th>
                    <th>Narxi</th>
                    <th>Sotilish narxi</th>
                    <th scope="col">ID raqami</th>
                    <th>Mavjud</th>
                    <th scope="col" style="width:10% !important">Amallar</th>
                </tr>
            </thead>
            <tbody>
                @foreach($product as $prod)
                <tr>
                    <td scope="row">{{ $prod->id }}</th>
                    <td>{{ $prod->name }}</td>
                    <td>{{ $prod->category_id }}</td>
                    <td>{{ $prod->image }}</td>
                    <td>{{ $prod->price }}</td>
                    <td>{{ $prod->shop_price }}</td>
                    <td>{{ $prod->producttime }}</td>
                    <td>{{ $prod->count }}</td>
                    <td  class="d-flex align-center justify-content-around">
                        <a href="{{ route('product.edit',$prod->id) }}" class="mt-2"><i class="bi bi-pencil btn-success w-100 p-2" style='border-radius:5px'></i></a>
                        <form action="{{ route('product.destroy',$prod->id) }}" method="post" class="d-flex align-center ">
                            @csrf
                            @method('delete')
                        <button class="btn-danger w-100 p-1 "style='border-radius:5px' ><i class="bi bi-trash-fill " ></i></button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
@endsection