<?php

namespace App\Http\Controllers;

use App\Libros;
use App\Autores;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PanelLibrosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datos['libros'] = DB::table('libros')
            ->join('autores', 'libros.autorId', '=', 'autores.autorId')
            ->select('libros.*', 'autores.nombre AS nombreAutor')
            ->get();

        return view('welcome', $datos);
    }

    public function gratis()
    {
        $datos['libros'] = DB::table('libros')
            ->join('autores', 'libros.autorId', '=', 'autores.autorId')
            ->select('libros.*', 'autores.nombre AS nombreAutor')
            ->where('libros.tipo', '=', 'gratis')
            ->get();

        return view('welcome', $datos);
    }

    public function popular()
    {
        $datos['libros'] = DB::table('libros')
            ->join('autores', 'libros.autorId', '=', 'autores.autorId')
            ->select('libros.*', 'autores.nombre AS nombreAutor')
            ->where('libros.calificacion', '=', 5)
            ->get();

        return view('welcome', $datos);
    }

    public function reciente()
    {
        $datos['libros'] = DB::table('libros')
            ->join('autores', 'libros.autorId', '=', 'autores.autorId')
            ->select('libros.*', 'autores.nombre AS nombreAutor')
            ->get();

        return view('welcome', $datos);
    }


}
