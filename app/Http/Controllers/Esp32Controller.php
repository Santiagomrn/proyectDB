<?php

namespace App\Http\Controllers;

use App\Esp32;
use Illuminate\Http\Request;

class Esp32Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        $esp32 = Esp32::create($request->all());//obtengo todo el contenido del la DB

        // Return a response with a product json
        // representation and a 201 status code
        return response()->json($esp32,201);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Esp32  $esp32
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $esp32=Esp32::findOrFail($id);


        return response($esp32['status']);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Esp32  $esp32
     * @return \Illuminate\Http\Response
     */
    public function edit(Esp32 $esp32)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Esp32  $esp32
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $esp32=Esp32::findOrFail($id);// busco el producto a actualizar con base a la id
        $esp32->update($request->all());//actualizo el producto

        return response()->json($esp32,200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Esp32  $esp32
     * @return \Illuminate\Http\Response
     */
    public function destroy(Esp32 $esp32)
    {
        //
    }
}
