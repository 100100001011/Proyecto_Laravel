@extends('layouts.app')
@section('content')
<p>{{$app1}}</p>
<article class = "contenido-proyecto">
    <h1 class = "text-center mb-4">{{$app1->nombre}}</h1>
    
    <div class="imagen" style="text-align: center;" >
    <p class="centrar">
        <!--TAMANIO DE LA IMAGEN-->
        <img src="/storage/{{$app1->imagen}}" class="w-20">
        
        <p>imange {{$app1->imagen}}</p>
    </p>
    </div>
    <div class="proyecto-data">

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

    </div>

    <div class="descripcion">
        <h2 class="my-3 text-primary">Descripcion</h2>
        <!--para quitar las etiquetas html !!-->
        {!!$app1->descripcion!!}
    </div>


  
</article>
@endsection
    
