@extends('layouts.app')
@section('content')

@section('botones')
<br>
<!--para llamar a la template-->
<a href={{route('proyecto.index')}} class="btn btn-primary mr-2 text-white">Volver Index</a>

@endsection

<article class="contenido-proyecto">
    <div class="container p-3 my-3 bg-dark text-white">
        <h1><span class="badge badge-success">{{$app1->nombre}}</span></h1>
    </div>
    <div class="imagen" style="text-align: center;">
        <p class="centrar">
            <!--TAMANIO DE LA IMAGEN-->
            <img src="/storage/{{$app1->imagen}}"  class="w-30">

        </p>
    </div>

    <div class="container p-3 my-3 bg-dark text-white">

        <p>
            <span class="font-weight-bold text-primary">Departamento: </span>
            {{$app1->DepartamentosApp1->nombre}}
        </p>

        <p>
            <span class="font-weight-bold text-primary">Direccion: </span>
            {{$app1->direccion}}
        </p>
        <p>
            <span class="font-weight-bold text-primary">Telefono: </span>
            {{$app1->telefono}}
        </p>
        <p>
            <span class="font-weight-bold text-primary">Correo: </span>
            {{$app1->correo}}
        </p>
        <p>
            <span class="font-weight-bold text-primary">Creado por: </span>
            {{$app1->autoApp1->name}}
        </p>




        <div class="descripcion">
            <h2 class="my-3 text-primary">Descripcion</h2>
            <!--para quitar las etiquetas html !!-->
            {!!$app1->descripcion!!}
        </div>
    </div>


</article>
@endsection