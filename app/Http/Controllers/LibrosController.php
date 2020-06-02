<?php

namespace App\Http\Controllers;

use App\Libros;
use App\Autores;
use App\Clasificaciones;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class LibrosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datos['libros'] = Libros::all();

        return view('libros.index', $datos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $autoresList = Autores::all();
        $clasificacionesList = Clasificaciones::all();

        return view('libros.create', compact('autoresList','clasificacionesList'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $datosLibro = request()->except('_token');

        
        if($request->hasFile('imagen')){
            $datosLibro['imagen'] = $request->file('imagen')->store('uploads','public');
        }
        
        Libros::insert($datosLibro);

        //return response()->json($datosLibro);

        return redirect('libros');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Libros  $libros
     * @return \Illuminate\Http\Response
     */
    public function show(Libros $libros)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Libros  $libros
     * @return \Illuminate\Http\Response
     */
    public function edit($libroId)
    {
        $libro = Libros::findOrFail($libroId);

        $autoresList = Autores::all();
        $clasificacionesList = Clasificaciones::all();

        return view('libros.edit', compact('libro', 'autoresList', 'clasificacionesList'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Libros  $libros
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $libroId)
    {
        $datosLibro = request()->except(['_token','_method']);

        if($request->hasFile('imagen')){
            $libro = Libros::findOrFail($libroId);

            Storage::delete('public/'.$libro->imagen);

            $datosLibro['imagen'] = $request->file('imagen')->store('uploads','public');
        }

        Libros::where('libroId', '=', $libroId)->update($datosLibro);


        return redirect('libros');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Libros  $libros
     * @return \Illuminate\Http\Response
     */
    public function destroy($libroId)
    {
        $libro = Libros::findOrFail($libroId);
        
        if(Storage::delete('public/'.$libro->imagen)){
            Libros::destroy($libroId);
        }

        return redirect('libros');
    }
}
