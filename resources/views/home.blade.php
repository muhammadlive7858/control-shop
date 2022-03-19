@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <a href="{{ route('admin.index') }}">admin panel</a>
            </div>
        </div>
    </div>
</div>
@endsection
