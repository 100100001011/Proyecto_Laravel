@extends('layouts.app')

@section('trix')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/trix/1.3.1/trix.css"
    integrity="sha512-CWdvnJD7uGtuypLLe5rLU3eUAkbzBR3Bm1SFPEaRfvXXI2v2H5Y0057EMTzNuGGRIznt8+128QIDQ8RqmHbAdg=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
@endsection


@section('botones')
<br>
<!--para llamar a la template-->
<a href={{route('proyecto.index')}} class="btn btn-primary mr-2 text-white">Volver Inicio</a>

@endsection



@section('content')

<h2 class="text-center mb-5">Ingreso de Localidades</h2>

<div class="row justify-content-center mt-5">

    <div class="col-md-8">

        <!--para que valide-->
        <form method="POST" action={{route('proyecto.store')}} novalidate>
            <!--Token -->
            @csrf
            <div class="form-group">

                <label for="nombre">Nombre localidad</label>
                <!--alertas de error en el formulario                                                                     no borra lo ingresado -->
                <input type="text" name="nombre" class="form-control @error('nombre') is-invalid @enderror" id="nombre"
                    placeholder="Nombre Localidades" value="{{old('nombre')}}">
                <!--valida el campo-->
                @error('nombre')
                <p>Favor Llenar los campos </p>
                <span class="invalid-feedback d-block" role="alert">
                    <strong>{{$message}}</strong>
                </span>
                @enderror
            </div>

            <div class="form-group">
                <label for="departamentos">departamentos</label>
                <select name="departamentos" class="form-control @error('departamentos') is-invalid @enderror" id="departamentos">
                    <option value=""> --Seleccione-- </option>
                    <!--FOREACH-->
                    <!--llama a la variable del controlador-->
                    @foreach($departamentos as $i => $valor)
                    <!--TERNARIO   if y else  -->
                    <option value={{$i}} {{old('departamentos')==$i?'selected':''}}>{{$valor}}</option>
                    @endforeach

                </select>
                <!--Favor Llenar los camposES CUANDO ESTE VACIO-->
            </div>


            <div class="form-group">

                <label for="direccion">Direccion localidad</label>
                <!--alertas de error en el formulario                                                                     no borra lo ingresado -->
                <input type="text" name="direccion" class="form-control @error('direccion') is-invalid @enderror"
                    id="direccion" placeholder="Direccion Localidades" value="{{old('direccion')}}">
                <!--valida el campo-->
                @error('direccion')
                <p>Favor Llenar los campos </p>
                <span class="invalid-feedback d-block" role="alert">
                    <strong>{{$message}}</strong>
                </span>
                @enderror
            </div>


            <div class="form-group">

                <label for="telefono">telefono localidad</label>
                <!--alertas de error en el formulario                                                                     no borra lo ingresado -->
                <input type="text" name="telefono" maxlength="11" class="form-control @error('telefono') is-invalid @enderror"
                    id="telefono" placeholder="telefono Localidades" value="{{old('telefono')}}">
                <!--valida el campo-->
                @error('telefono')
                <p>Favor Llenar los campos </p>
                <span class="invalid-feedback d-block" role="alert">
                    <strong>{{$message}}</strong>
                </span>
                @enderror
            </div>



                    
            <div class="form-group">

                <label for="correo">Correo localidad</label>
                <!--alertas de error en el formulario                                                                     no borra lo ingresado -->
                <input type="text" name="correo" class="form-control @error('correo') is-invalid @enderror"
                    id="correo" placeholder="Correo Localidades" value="{{old('correo')}}">
                <!--valida el campo-->
                @error('correo')
                <p>Favor Llenar los campos </p>
                <span class="invalid-feedback d-block" role="alert">
                    <strong>{{$message}}</strong>
                </span>
                @enderror
            </div>


            
            <div class="form-group">

                <label for="descripcion">descripcion</label>
                <!--alertas de error en el formulario                                                                     no borra lo ingresado -->
                <input type ="hidden" name="descripcion" id="descripcion"
                     value="{{old('descripcion')}}">
                <trix-editor class="form-control @error('descripcion') is-invalid @enderror" input="descripcion"></trix-editor>
                <!--valida el campo-->
                @error('descripcion')
                <p>Favor Llenar los campos </p>
                <span class="invalid-feedback d-block" role="alert">
                    <strong>{{$message}}</strong>
                </span>
                @enderror
            </div>


            <br>
            <div class="form-group">

                <input type="submit" class="btn btn-danger" value="Ingresar">

            </div>




        </form>

    </div>

</div>

@endsection

<!--Estilos -->
@section('scripts')
<script src="https://cdnjs.cloudflare.com/ajax/libs/trix/1.3.1/trix.js"
    integrity="sha512-/1nVu72YEESEbcmhE/EvjH/RxTg62EKvYWLG3NdeZibTCuEtW5M4z3aypcvsoZw03FAopi94y04GhuqRU9p+CQ=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
@endsection