<?php

namespace App\Http\Controllers;

use App\Autores;
use Illuminate\Http\Request;

class AutoresController extends Controller
{
    /**
     * Display a listing of the resource.
     *8
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datos['autores'] = Autores::paginate(5);

        return view('autores.index', $datos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('autores.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //$datosAutor = request()->all();
        $datosAutor = request()->except('_token');

        /*
        if($request->hasFile('foto')){
            $datosAutor['foto'] = $request->file('foto')->store('uploads','public');
        }
        */

        Autores::insert($datosAutor);

        //return response()->json($datosAutor);

        return redirect('autores');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Autores  $autores
     * @return \Illuminate\Http\Response
     */
    public function show(Autores $autores)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Autores  $autores
     * @return \Illuminate\Http\Response
     */
    public function edit($autorId)
    {
        $autor = Autores::findOrFail($autorId);

        return view('autores.edit', compact('autor'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Autores  $autores
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $autorId)
    {
        $datosAutor = request()->except(['_token','_method']);
        Autores::where('autorId', '=', $autorId)->update($datosAutor);

        $datos['autores'] = Autores::paginate(5);

        return view('autores.index', $datos);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Autores  $autores
     * @return \Illuminate\Http\Response
     */
    public function destroy($autorId)
    {
        Autores::destroy($autorId);
        return redirect('autores');
    }
}
