@extends('layouts.app')
<!--Estilos -->
@section('trix')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/trix/1.3.1/trix.css"
integrity="sha512-CWdvnJD7uGtuypLLe5rLU3eUAkbzBR3Bm1SFPEaRfvXXI2v2H5Y0057EMTzNuGGRIznt8+128QIDQ8RqmHbAdg=="
crossorigin="anonymous" referrerpolicy="no-referrer" />
@endsection

@section('botones')
<!--para llamar a la template-->
<a href={{route('proyecto.index')}} class="btn btn-primary mr-2 text-white">Volver Index</a>

@endsection

@section('content')
{{$perfil}}

<h1 class="text-center">Editar Perfil</h1>
<div class="row justify-content-center mt-5">
    <div class="col-md-10 bg-white p-3">
        <form method="POST" {{--action={{route('perfiles.update',['perfil'=>$perfil->id])}}--}} >
            {{--value="{{$receta->nombre}}"--}}
            <div class="form-group">
                <label for="nombre">Nombre</label>
                <!--alertas de error en el formulario                                                                     no borra lo ingresado -->
                <input type="text" name="nombre" class="form-control @error('nombre') is-invalid @enderror" id="nombre"
                    placeholder="Nombre" >
                <!--valida el campo-->
                @error('nombre')
                <p>ERROR </p>
                <span class="invalid-feedback d-block" role="alert">
                    <strong>{{$message}}</strong>
                </span>
                @enderror
            </div>

            <div class="form-group">
                <label for="url">Sitio Web</label>
                <!--alertas de error en el formulario                                                                     no borra lo ingresado -->
                <input type="text" name="url" class="form-control @error('url') is-invalid @enderror" id="url"
                    placeholder="Sitio Web" >
                <!--valida el campo-->
                @error('url')
                <p>ERROR </p>
                <span class="invalid-feedback d-block" role="alert">
                    <strong>{{$message}}</strong>
                </span>
                @enderror
            </div>

            <div class="form-group">
                <label for="biografia">biografia</label>
                <!--alertas de error en el formulario                                                                     no borra lo ingresado -->
                <input type ="hidden" name="biografia" id="biografia">
                <trix-editor class="form-control @error('categoria') is-invalid @enderror" input="biografia"></trix-editor>
                @error('biografia')
                <p>ERROR </p>
                <span class="invalid-feedback d-block" role="alert">
                    <strong>{{$message}}</strong>
                </span>
                @enderror
            </div>


            <div class="form-group">
                
                @if($perfil->imagen) 
                <div class="mt-4">
                   <p>Imagen actual</p>
                   {{--<img src="/storage/{{$receta->imagen}}" style="width: 300px">--}}
               </div>
               @endif

               <label for="imagen">Imagen</label>
               <input id="imagen" class="form-control @error('imagen') is-invalid @enderror" type="file" class="form-control" name="imagen"> 
               @error('imagen')
               <p>ERROR </p>
               <span class="invalid-feedback d-block" role="alert">
                   <strong>{{$message}}</strong>
               </span>
               @enderror
           </div>

        </form>
    </div>

</div>
@endsection


<!--Estilos -->
@section('scripts')
<script src="https://cdnjs.cloudflare.com/ajax/libs/trix/1.3.1/trix.js"
    integrity="sha512-/1nVu72YEESEbcmhE/EvjH/RxTg62EKvYWLG3NdeZibTCuEtW5M4z3aypcvsoZw03FAopi94y04GhuqRU9p+CQ=="
    crossorigin="anonymous" referrerpolicy="no-referrer" defer></script>
@endsection