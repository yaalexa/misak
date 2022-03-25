<?php

namespace App\Http\Controllers;

use App\Models\editorial;
use Illuminate\Http\Request;

class EditorialController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $editorial = Editorial::all(['id','name']);
        return response()->json($editorial);
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
        $editorial = Editorial::create($request->post());
        return response()->json([           
            'editorial'=>$editorial
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\editorial  $editorial
     * @return \Illuminate\Http\Response
     */
    public function show(editorial $editorial)
    {
        return response()->json($editorial);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\editorial  $editorial
     * @return \Illuminate\Http\Response
     */
    public function edit(editorial $editorial)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\editorial  $editorial
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, editorial $editorial)
    {
        $editorial->fill($request->post())->save();
        return response()->json([            
            'editorial'=>$editorial
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\editorial  $editorial
     * @return \Illuminate\Http\Response
     */
    public function destroy(editorial $editorial)
    {
        $editorial->delete();
        return response()->json([
            'mensaje'=>'¡Registro eliminado correctamente!'
        ]);
    }
}
