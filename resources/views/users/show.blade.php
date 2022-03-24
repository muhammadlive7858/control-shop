@extends('admin.index')

@section('content')
    <h1>Foydalanuvchining ma'lumotlari</h1>
    <hr>
        <h3 scope="row">Foydalanuvchi ID raqami: {{ $user->id }}</h3>
        <h4>Foydalanuvchi  ism:{{ $user->name }}</h4>
        <h4>Foydalanuvchi  email:{{ $user->email }}</h4>
        <h5>Foydalanuvchi  parol:{{ $user->password }}</h5>
        <h4>Foydalanuvchi  role:{{ $user->role }}</h4>
@endsection