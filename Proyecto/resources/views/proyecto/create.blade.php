@extends('layouts.app')

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
                <p>ERROR </p>
                <span class="invalid-feedback d-block" role="alert">
                    <strong>{{$message}}</strong>
                </span>
                @enderror
            </div>


            <div class="form-group">

                <label for="direccion">Direccion localidad</label>
                <!--alertas de error en el formulario                                                                     no borra lo ingresado -->
                <input type="text" name="direccion" class="form-control @error('direccion') is-invalid @enderror"
                    id="direccion" placeholder="Direccion Localidades" value="{{old('direccion')}}">
                <!--valida el campo-->
                @error('direccion')
                <p>ERROR </p>
                <span class="invalid-feedback d-block" role="alert">
                    <strong>{{$message}}</strong>
                </span>
                @enderror
            </div>


            <div class="form-group">

                <label for="telefono">Telefono localidad</label>
                <!--alertas de error en el formulario                                                                     no borra lo ingresado -->
                <input type="text" name="telefono" class="form-control @error('telefono') is-invalid @enderror"
                    id="telefono" placeholder="Telefono Localidades" value="{{old('telefono')}}">
                <!--valida el campo-->
                @error('telefono')
                <p>ERROR </p>
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
                <p>ERROR </p>
                <span class="invalid-feedback d-block" role="alert">
                    <strong>{{$message}}</strong>
                </span>
                @enderror
            </div>
            <br>
            <div class="form-group">

                <input type="submit" class="btn-btn-primary" value="Ingresar">

            </div>


        </form>

    </div>

</div>

@endsection