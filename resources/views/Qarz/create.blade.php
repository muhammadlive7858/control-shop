@extends('admin.index')


@section('content')
<form action="{{route('qarz.store')}}" method="post">
<div class="mb-3">
  @csrf 
  <label  class="form-label">Ism</label>
  <input type="text" name="name" class="form-control" id="exampleFormControlInput1" placeholder="ismi">
</div>
<div class="mb-2">
  <label  class="form-label">Telefon Nomer</label>
  <input type="number" name="nomer" class="form-control" id="exampleFormControlInput1" placeholder="Telefon Nomer">
</div>
<div class="mb-2">
  <label  class="form-label">Qancha qarz qildi</label>
  <input name="summa" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Summa">
</div>
<div class="mb-2">
  <label  class="form-label">Manzil</label>
  <input name="manzil"  type="text" class="form-control" id="exampleFormControlInput1" placeholder="Manzil">
</div>


    <label for="">Xaridlari</label>
  <textarea name="maxsulotlari" class="form-control">

</textarea placeholder="Xaridlari">



  

<button class="btn btn-primary mt-2 ">Qoshish</button>
</form>

@endsection

<style>
    input::placeholder{
        margin-left: 3px;
    }
</style>
