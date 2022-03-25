@extends('layouts.app')
@section('content')


<br>
@section('botones')
<br>

<!--para llamar a la template-->
<a href="{{route('perfiles.edit',['perfil'=>$perfil->id])}}" class="btn btn-primary mr-2 text-white">Editar</a>
<a href={{route('proyecto.index')}} class="btn btn-danger mr-2 text-white">Volver Index</a>
@endsection

    


<div class="container">
    <div class="row">
        
        <div class="container p-3 my-3 bg-dark text-white">
            <h1><span class="badge badge-success">Perfil: {{$perfil->id}}</span></h1>
        </div>

        <div class="container p-3 my-3 bg-dark text-white">

            <p>
                <span class="font-weight-bold text-primary">Nombre: </span>
                {{$perfil->perfilUser->name}}
            </p>
    
            <p>
                <span class="font-weight-bold text-primary">Sitio Web: </span>
                <a href="{{$perfil->perfilUser->url}}">Link</a>
            </p>
              
            <div class="descripcion">
                <h2 class="my-3 text-primary">Descripcion</h2>
                <!--para quitar las etiquetas html !!-->
                {{!!$perfil->biografia!!}}
                
            </div>
        </div>
    </div>
</div>
@endsection
