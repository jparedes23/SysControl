@extends('layouts.app')

@section('content')
<div class="container">

    <div class="alert alert-success alert-dismissible"  role="alert">
        @if(Session::has('mensaje'))
        {{ Session::get('mensaje')}}
        @endif
      

    </div>

    <a class="btn btn-success" href="{{ url('control/create')}}">Registra Nuevo Beneficiario</a>
    <br>    <br>  

    <div class="d-md-flex justify-content-md-end">
        <form action="{{ route('busqueda') }}" method="GET">
            @csrf
            <div class="btn btn-group">
                    <input type="text" class="form-control" name="busqueda" >
                    <button type="submit" class="btn btn-primary" values="enviar">Buscar</button>
            </div>
        </form>
    </div> 





<table class="table table-light">
    <thead class="thead-light">
        <tr>
            <th>ID</th>
            <th>Foto</th>
            <th>Nombres</th>
            <th>Apellidos</th>
            <th>DNI</th>
            <th>Caserio</th>
            <th>Observacion</th>
            <th>Fecha</th>
            <th>Acciones</th>
        </tr>
    </thead>

    <tbody>

        @foreach ($control as $con)
        <tr>

    
            <td>{{$con->id}}</td>
      

            <td>
                <img src="{{ asset('storage').'/'.$con->Foto }}" width="60" alt="">
            </td>

                
            <td>{{$con->Nombres}}</td>
            <td>{{$con->Apellidos}}</td>
            <td>{{$con->dni}}</td>
            <td>{{$con->caserio}}</td>
            <td>{{$con->observacion}}</td>
            <td>{{$con->created_at}}</td>
            <td>
                <a href="{{url('/control/'.$con->id.'/edit')}}" class="btn btn-warning">Editar</a>
                
                | 
             
                <form action="{{url('/control/'.$con->id) }}" class="d-inline"  method="post">
                    @csrf
                    {{method_field('DELETE')}}
                    <input class="btn btn-danger" type="submit" onclick="return confirm('¿Quieres borrar?')"  value="Borrar">

                </form>

            </td>
        </tr>
        @endforeach
       
    </tbody>
</table>
<div class="d-flex justify-content-end" >
    {!! $control->links() !!}
 </div>
</div>
@endsection
