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
                <th scope="col">Direccion</th>
                <th scope="col">Telefono</th>
                <th scope="col">Correo</th>
            </tr>
        </thead>

</div>

@endsection