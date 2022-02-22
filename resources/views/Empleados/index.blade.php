<br>
@extends('layouts.app')

@section('content')
<div class="container">

@if(Session::has('Mensaje')){{
    Session::get('Mensaje')

}}
@endif
<br><br>
<a href="{{ url('empleados/create')}}" class="btn btn-success "> Ingresar Articulo </a> 
<br><br>
<table class="table table-light">
    <thead class="thead-light">
     <tr>
            <th>#</th >
            <th>Foto</th >
            <th>Nombre</th >
            <th>Categoria</th >
            <th>Color</th >
            <th>Talla</th >
            <th>Genero</th >
            <th>Descripcion</th >
            <th>Acciones</th >
            



        </tr>
        </thead>

    <tbody>
    @foreach($empleados as $empleado)
        <tr>
            <td>{{$loop->iteration}}</td>
            <td>
            <img class="img-thumbnail img-fluid" src="{{ asset('storage').'/'.$empleado->Foto}}" alt="" width="100">
            </td>
            <td>{{$empleado->Nombre}}</td>
            <td>{{$empleado->Categoria}}</td>
            <td>{{$empleado->Color}}</td>
            <td>{{$empleado->Talla}}</td>
            <td>{{$empleado->Genero}}</td>
            <td>{{$empleado->Descripcion}}</td>
            <td>
            <a href="{{ url ('/empleados/'.$empleado->id.'/edit')}}" class="btn btn-warning">Editar

          
            </a>

            <form method="post" action="{{ url('/empleados/' .$empleado->id) }}" class="d-inline">
                {{csrf_field()}}
                {{ method_field('delete')}}
                <button type="submit" onclick="return confirm('¿Esta seguro que desea borrar?');" class="btn btn-danger"> Borrar </button>
            </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
</div>
@endsection