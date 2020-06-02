<?php

namespace App\Http\Controllers;

use App\Clasificaciones;
use Illuminate\Http\Request;

class ClasificacionesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datos['clasificaciones'] = Clasificaciones::paginate(5);

        return view('clasificaciones.index', $datos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('clasificaciones.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $datosClasificacion = request()->except('_token');

        Clasificaciones::insert($datosClasificacion);

        return redirect('clasificaciones');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Clasificaciones  $clasificaciones
     * @return \Illuminate\Http\Response
     */
    public function show(Clasificaciones $clasificaciones)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Clasificaciones  $clasificaciones
     * @return \Illuminate\Http\Response
     */
    public function edit($clasificacionId)
    {
        $clasificacion = Clasificaciones::findOrFail($clasificacionId);

        return view('clasificaciones.edit', compact('clasificacion'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Clasificaciones  $clasificaciones
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $clasificacionId)
    {
        $datosClasificacion = request()->except(['_token','_method']);
        Clasificaciones::where('clasificacionId', '=', $clasificacionId)->update($datosClasificacion);

        $datos['clasificaciones'] = Clasificaciones::paginate(5);

        return view('clasificaciones.index', $datos);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Clasificaciones  $clasificaciones
     * @return \Illuminate\Http\Response
     */
    public function destroy($clasificacionId)
    {
        Clasificaciones::destroy($clasificacionId);
        return redirect('clasificaciones');
    }
}
