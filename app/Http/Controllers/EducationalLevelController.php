<?php

namespace App\Http\Controllers;

use App\Models\educational_level;
use Illuminate\Http\Request;

class EducationalLevelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $educational_level = educational_level::all(['id','name']);
        return response()->json($educational_level);
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
        $educational_level = educational_level::create($request->post());
        return response()->json([           
            'educational_level'=>$educational_level
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\educational_level  $educational_level
     * @return \Illuminate\Http\Response
     */
    public function show(educational_level $educational_level)
    {
        return response()->json($educational_level);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\educational_level  $educational_level
     * @return \Illuminate\Http\Response
     */
    public function edit(educational_level $educational_level)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\educational_level  $educational_level
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, educational_level $educational_level)
    {
        $educational_level->fill($request->post())->save();
        return response()->json([            
            'educational_level'=>$educational_level
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\educational_level  $educational_level
     * @return \Illuminate\Http\Response
     */
    public function destroy(educational_level $educational_level)
    {
        $educational_level->delete();
        return response()->json([
            'mensaje'=>'¡Registro eliminado correctamente!'
        ]);
    }
}
