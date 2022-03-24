@extends('admin.index')

@section('content')


<!-- End Search Bar -->

<h2>Sotuv Ofisi</h2>
<hr>


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
                    <th scope="col" style="width:10%">#</th>
                    <th scope="col">Tavar nomi</th>
                    <th scope="col" style="width:10%">mavjud</th>
                    <th scope="col" style="width:20% !important">Sotilmoqda...</th>
                </tr>
            </thead>
            <tbody>
                @forelse($prod_vaqt as $prod)
                    <tr>
                        <td scope="row" style="width:10%">{{ $prod->id }}</th>
                        <td>{{ $prod->product_name }}</td>
                        <td style="width:10%">{{ $prod->product_count }}</td>
                        <td>
                        <form action="{{ route('sotish') }}" method="post">
                            @csrf
                            @method('POST')
                            <input type="hidden" name="prod_id" value="{{ $prod->id }}">
                            <input type="number" name="sotish_soni" id="" class="form-control" placeholder="Tavarlar soni:">
                        </form>
                        </td>
                    </tr>
                @empty
                <h1>Tavar yoq</h1>
                @endforelse
            </tbody>
        </table>
        <!-- <label for="sotish" class="btn btn-primary">Sotish</label> -->
        <a href="{{ route('sotish') }}" class="btn btn-primary">Sotish</a>



@endsection