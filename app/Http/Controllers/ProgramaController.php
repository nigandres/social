<?php

namespace App\Http\Controllers;

use App\Programa;
use Illuminate\Http\Request;

class ProgramaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($rol = null)
    {
        //
        // $programas = Programa::all()->load('users');//carga relacion de tabla con ususarios
        // $programas = Programa::where('id',56)->get();
        // $programas = Programa::where('nombre','Finanzas')->get();
        // $programas = Programa::where('nombre','!=','CTA')->get();
        // $programas = Programa::where('nombre','!=','CTA')->where('horario','4 - 9')->get();
        // $programas = Programa::whereIn('nombre',['Finanzas','CTA'])->get();
        // $programas = Programa::whereIn('nombre',['Finanzas','CTA'])->with('users')->get();
        // $programas = Programa::with(['users' => function($query){ $query->where('rol','Amin'); }])->get();//lo pasa como arreglo
        // $programas = Programa::whereHas('users',function($query){ $query->where('rol','Prestadores'); })->get();
        // $programas = Programa::whereHas('users',function($query){ $query->where('rol','Admin'); })->get();//lo pasa como objeto
        // dd($programas);
        //crear un tipo de solicitud con el modelo y la vista
        // if($rol == 'Prestador') {
        //     // $programas = Programa::with(['users' => function($query){ $query->where('rol','Prestador'); }])->get();//lo pasa como arreglo
        // } elseif($rol == 'Admin') {
        //     $programas = Programa::with(['users' => function($query){ $query->where('rol','Admin'); }])->get();//lo pasa como arreglo
        // } else {
        //     $programas = Programa::all()->load('users');//carga relacion de tabla con ususarios
        // }
        if(isset($rol)) {
            $programas = Programa::Rol($rol)->get();//lo pasa como arreglo
        } else {
            $programas = Programa::all()->load('users');//carga relacion de tabla con ususarios
        }
        return view('programa.indexPrograma',compact('programas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Programa  $programa
     * @return \Illuminate\Http\Response
     */
    public function show(Programa $programa)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Programa  $programa
     * @return \Illuminate\Http\Response
     */
    public function edit(Programa $programa)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Programa  $programa
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Programa $programa)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Programa  $programa
     * @return \Illuminate\Http\Response
     */
    public function destroy(Programa $programa)
    {
        //
    }
}
