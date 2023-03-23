@extends('layouts.app')

@section('content')
<div class="container">

<form action="{{url('/control')}}" method="post" enctype="multipart/form-data">
    @csrf

    @include('control.form',['modo'=>'Crear']);

</form>

</div>
@endsection