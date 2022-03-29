@extends('admin.index')


@section('content')
<div >

    <a href="{{route('qarz.create')}}" class="btn btn-primary"> Qo'shish</a>
</div>

<table class="table">
<thead>
    <tr>
    <th scope="col">#ID</th>
    <th scope="col">Qarzdom ismi</th>
    <th scope="col">Telefon r..</th>
    <th scope="col">summa</th>
    <th scope="col">Xaridlari</th>
    <th scope="col">Manzili</th>
    <th>Amallar</th>
    </tr>
</thead>
<tbody>
    @forelse($index as $summa)
    <tr>
    <th scope="row">{{$summa->id}}</th>
    <td>{{$summa->name}}</td>
    <td>{{$summa->nomer}}</td>
    <td>{{$summa->summa}}</td>
    <td>{{$summa->maxsulotlari}}</td>
    <td>{{$summa->manzil}}</td>
    <td  class="d-flex align-center justify-content-around">

    <a href="{{route('qarz.edit' , $summa->id)}}" class="mt-2 "><i class="bi bi-pencil btn-success w-100 p-2" style='border-radius:5px'></i></a>
    <form action="{{route('qarz.destroy', $summa->id)}}" method="post" class="d-flex align-center ">
        @csrf
        @method('delete')
    <button class="btn-danger w-100 p-2 "style='border-radius:5px' ><i class="bi bi-trash-fill " ></i></button>
    </form>
    </td>


    </tr>
    @empty

    @endforelse
    
</tbody>
</table>
@endsection