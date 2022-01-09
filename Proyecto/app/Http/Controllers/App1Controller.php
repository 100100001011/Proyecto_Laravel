<?php

namespace App\Http\Controllers;

use App\Models\App1;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class App1Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('proyecto.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('proyecto.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         //VARDUMP
        //dd($request->all());
        //para validar
        
        $data=request()->validate([
            'nombre' => 'required|min:6',
            'direccion' => 'required',
            'telefono' => 'required|min:9',
            'correo' => 'required'
        ]);
        //AGREGAR a la base
        DB::table('app1s')->insert([
            //NOMBRE CAMPOS BBDD --> NOMBRE CAMPO VISTA
            'nombre'=>$data['nombre'],
            'direccion'=>$data['direccion'],
            'telefono'=>$data['telefono'] ,
            'correo'=>$data['correo'] ,
        ]);

        

        //REDIRECCIONA
        return redirect()->action([App1Controller::class,'index']);
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\App1  $app1
     * @return \Illuminate\Http\Response
     */
    public function show(App1 $app1)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\App1  $app1
     * @return \Illuminate\Http\Response
     */
    public function edit(App1 $app1)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\App1  $app1
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, App1 $app1)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\App1  $app1
     * @return \Illuminate\Http\Response
     */
    public function destroy(App1 $app1)
    {
        //
    }
}
