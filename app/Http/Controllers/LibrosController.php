<?php

namespace App\Http\Controllers;

use App\Models\libros;
use Illuminate\Http\Request;

class LibrosController extends Controller
{ 
    public function index()
    {
        $datos = Libros::all();
       return view('welcome',compact('datos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
     
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
       $libros = new Libros;
    $libros->nombre = $request->nombre;
    $libros->precio = $request->precio;
    $libros->boletos = $request->boletos;
    $libros->pago = $request->pago; 
    $libros->save();

    echo "<script>alert('Boleto vendido ');</script>";
    return view('welcome');
    }

    /**
     * Display the specified resource.
     */
    public function show(libros $libros)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(libros $libros)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, libros $libros)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(libros $libros)
    {
        //
    }
}
