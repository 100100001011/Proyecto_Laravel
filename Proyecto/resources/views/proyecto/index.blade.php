<!-- HERENCIA -->
@extends('layouts.app')

@section('botones')
<br>
<a href={{route('proyecto.create')}} class="btn btn-primary mr-2 text-white"> Crear </a> 
   
@endsection

@section('content')
<h2 class="text-center mb-5"> Registro de visitas </h2>
<div class="col-md-10 mx-auto bg-white p-3">
    <table class="table">
        
        <thead class="bg-primary text-light">
            <tr>
                <th scope="col">Nombre</th>
                <th scope="col">Departamento</th>
                <th scope="col">Direccion</th>
                <th scope="col">Telefono</th>
                <th scope="col">Correo</th>
                <th scope="col">Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($userApp1 as $userApp1)
                <tr>
                    <td>{{$userApp1->nombre}}</td>
                    <td>{{$userApp1->departamentos_id}}</td>
                    <td>{{$userApp1->direccion}}</td>
                    <td>{{$userApp1->telefono}}</td>
                    <td>{{$userApp1->correo}}</td>
                    <td>
                        <a href="" class="btn btn-success">Ver</a>
                        <a href="" class="btn btn-dark">Editar</a>
                        <a href="" class="btn btn-danger">Eliminar</a>
                    </td>
                </tr>
            @endforeach
            </tbody>

</div>

@endsection