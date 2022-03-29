@extends('admin.index')
 

@section('content')

<form action="{{route('qarz.update', $edit->id)}}" method="post">
<div class="mb-3">
  @csrf 
  <label  class="form-label">Ism</label>
  <input type="text" value="{{$edit->name}}" name="name" class="form-control" id="exampleFormControlInput1" placeholder="ismi">
</div>
<div class="mb-2">
  <label  class="form-label">Telefon Nomer</label>
  <input type="number" name="nomer" value="{{$edit->nomer}}" class="form-control" id="exampleFormControlInput1" placeholder="Telefon Nomer">
</div>
<div class="mb-2">
  <label  class="form-label">Qancha qarz qildi</label>
  <input name="summa" value="{{$edit->summa}}" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Summa">
</div>
<div class="mb-2">
  <label  class="form-label">Manzil</label>
  <input name="manzil" value="{{$edit->manzil}}"  type="text" class="form-control" id="exampleFormControlInput1" placeholder="Manzil">
</div>


    <!-- <label for="">Xaridlari</label>
  <textarea name="maxsulotlari" class="form-control">

</textarea placeholder="Xaridlari"> -->

      <button class="dropdown-item" href="#">

        <div class="accordion" id="accordionExample">
                <div class="accordion-item">
                  <h2 class="accordion-header" id="headingOne">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                    Tavorlar
                    </button>
                  </h2>
                  <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                    
                    @forelse($moneyName as $mo)
                    <div class="accordion-body d-inline-flex p-2 bd-highlight">
                    
                    <input class="form-check-input" name="maxsulotlar" value="{{$mo->id}}" type="checkbox" id="flexSwitchCheckDefault">
                    <label class="form-check-label" for="flexSwitchCheckDefault">{{$mo->name}}  #ID <b>{{$mo->maxsulotnomeri}}</b></label>
              
                    </div>
                    @empty
                    -----
                  </div>
                </div>
                
              </div>
              @endforelse





    </button> 
  </li>
   
  </ul>
</div>
  

<button class="btn btn-primary mt-3">Qoshish</button>
</form>



@endsection