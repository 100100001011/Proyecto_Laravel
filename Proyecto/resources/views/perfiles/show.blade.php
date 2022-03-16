@extends('layouts.app')
@section('content')
    
{{$perfil->perfilUser->userApp1}}
<div class="container">
    <div class="row">
        
        <div class="col-md-1">
            <!--imagen-->
        </div>

        <div class="col-md-7">
            <h2 class="text-center mb-2 text-primary">{{$perfil->perfilUser->name}}</h2>
            <a href=""{{$perfil->perfilUser->url}}>Visitar Sitio Web</a>
            {{$perfil->perfilUser}}
            <div class="biografia">
                <h1>perfil</h1>
                {{$perfil->biografia}}

            </div>
        </div>
    </div>
</div>
@endsection
