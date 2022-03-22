@extends('admin.index')

@section('content')
    
    <form action="" method="get" class="form-control w-100" >
        @csrf
        @method('PATCH')
        <select name="category_id" id="" class="form-select m-2" style="width:99%">
            <option value="">Kategoriyani tanlang</option>
            @foreach($cate as $cate)
                <option value="{{$cate->id}}">{{ $cate->name }}</option>
            @endforeach
        </select>
        <button class="btn btn-success mx-2" >Tanlang</button>
    </form> 
    <table class="table table-bordered w-100">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nomi</th>
                    <th>Rasm</th>
                    <th>Narxi</th>
                    <th scope="col">ID raqami</th>
                    <th>Mavjud</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    use App\Models\Product;
                    $product = Product::all()->where('category_id',$_GET['category_id']);
                    foreach($product as $prod){
                        echo`<tr>
                            <td scope="row">{{ $prod->id }}</th>
                            <td>{{$prod['name']}}</td>
                            <td>{{$prod['image']}}</td>
                            <td>{{$prod['producttime']}}</td>
                            <td>{{$prod['price']}}</td>
                            <td>{{$prod['count']}}</td>
                        </tr> `;
                    }
                ?>
            </tbody>
        </table>

@endsection

<!-- <tr>
    <td scope="row">//{{ $prod->id }}</th>
    <td>//{{$prod['name']}}</td>
    <td>//{{$prod['image']}}</td>
    <td>//{{$prod['producttime']}}</td>
    <td>//{{$prod['price']}}</td>
    <td>//{{$prod['count']}}</td>
</tr> -->


