@extends('layouts.app')
<!--     -->

<!--Estilos -->
@section('trix')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/trix/1.3.1/trix.css"
    integrity="sha512-CWdvnJD7uGtuypLLe5rLU3eUAkbzBR3Bm1SFPEaRfvXXI2v2H5Y0057EMTzNuGGRIznt8+128QIDQ8RqmHbAdg=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
@endsection

@section('botones')
<br>    
<!--para llamar a la template-->
<a href={{route('proyecto.index')}} class="btn btn-primary mr-2 text-white">Volver Index</a>

@endsection



@section('content')

<h2 class="text-center mb-5">Editar Departamento: {{$app1->nombre}}</h2>

<div class="row justify-content-center mt-5">

    <div class="col-md-8">
        
        <!--para que valide-->
        <form method="POST" action="{{route('proyecto.update',['app1'=>$app1->id])}} " enctype="multipart/form-data" novalidate>
            <!--Token -->
            @csrf
            <!--directiva metodo para actualizar-->
            @method('PUT')
            <div class="form-group">

                <label for="nombre">Nombre: </label>
                
                <!--alertas de error en el formulario                                                                     no borra lo ingresado -->
                <input type="text" name="nombre" class="form-control @error('nombre') is-invalid @enderror" id="nombre"
                    placeholder="Nombre Receta" value="{{$app1->nombre}}">
                <!--valida el campo-->
                @error('nombre')
                <p>ERROR </p>
                <span class="invalid-feedback d-block" role="alert">
                    <strong>{{$message}}</strong>
                </span>
                @enderror
            </div>



            <div class="form-group">
                <label for="departamento">Departamento</label>
                <select name="departamento" class="form-control @error('departamento') is-invalid @enderror" id="departamento">
                    <option value=""> --Seleccione-- </option>
                    <!--FOREACH-->
                    <!--llama a la variable del controlador-->
                    @foreach($departamentos as $i )
                    <!--TERNARIO   if y else  -->
                    <option value={{$i->id}} {{$app1->departamentos_id==$i->id?'selected':''}}>{{$i->nombre}}</option>
                    @endforeach

                </select>
                <!--ERRORES CUANDO ESTE VACIO-->
                @error('departamento')
                <p>ERROR Categoria</p>
                <span class="invalid-feedback d-block" role="alert">
                    <strong>{{$message}}</strong>
                </span>
                @enderror

            </div>

            <div class="form-group">

                <label for="direccion">Direccion:</label>
                
                <!--alertas de error en el formulario                                                                     no borra lo ingresado -->
                <input type="text" name="direccion" class="form-control @error('direccion') is-invalid @enderror" id="direccion"
                    placeholder="direccion" value="{{$app1->direccion}}">
                <!--valida el campo-->
                @error('direccion')
                <p>ERROR </p>
                <span class="invalid-feedback d-block" role="alert">
                    <strong>{{$message}}</strong>
                </span>
                @enderror
            </div>

            <div class="form-group">

                <label for="telefono">Telefono:</label>
                
                <!--alertas de error en el formulario                                                                     no borra lo ingresado -->
                <input type="number" name="telefono" class="form-control @error('telefono') is-invalid @enderror" id="telefono"
                    placeholder="telefono" value="{{$app1->telefono}}" >
                <!--valida el campo-->
                @error('telefono')
                <p>ERROR </p>
                <span class="invalid-feedback d-block" role="alert">
                    <strong>{{$message}}</strong>
                </span>
                @enderror
            </div>

            <div class="form-group">

                <label for="correo">Correo:</label>
                
                <!--alertas de error en el formulario                                                                     no borra lo ingresado -->
                <input type="text" name="correo" class="form-control @error('correo') is-invalid @enderror" id="correo"
                    placeholder="correo" value="{{$app1->correo}}">
                <!--valida el campo-->
                @error('correo')
                <p>ERROR </p>
                <span class="invalid-feedback d-block" role="alert">
                    <strong>{{$message}}</strong>
                </span>
                @enderror
            </div>

            <div class="form-group">

                <label for="descripcion">descripcion</label>
                <!--alertas de error en el formulario                                                                     no borra lo ingresado -->
                <input type ="hidden" name="descripcion" id="descripcion"
                     value="{{$app1->descripcion}}">
                <trix-editor class="form-control @error('descripcion') is-invalid @enderror" input="descripcion"></trix-editor>
                <!--valida el campo-->
                <div class="mt-4">
                    <p>Imagen actual</p>
                    <img src="/storage/{{$app1->imagen}}" style="width: 300px">
                </div>
                @error('descripcion')
                <p>ERROR </p>
                <span class="invalid-feedback d-block" role="alert">
                    <strong>{{$message}}</strong>
                </span>
                @enderror
            </div>

            
            <div class="form-group">
                <label for="imagen"></label>
                <input id="imagen" class="form-control @error('imagen') is-invalid @enderror" type="file" class="form-control" name="imagen"> 
                <!--valida el campo-->
                @error('imagen')
                <p>ERROR </p>
                <span class="invalid-feedback d-block" role="alert">
                    <strong>{{$message}}</strong>
                </span>
                @enderror
            </div>

            
            <div class="form-group">

                <input type="submit" class="btn-btn-primary" value="Actualizar">

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