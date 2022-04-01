<?php

namespace App\Http\Controllers;

use App\Models\material_educational_level;
use App\Models\educational_level;
use Illuminate\Http\Request;

class MaterialEducationalLevelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $material_educational_level = material_educational_level::all(['educational_level_id']);
        $material_educational_level = educational_level::all(['id','name']);
        return response()->json($material_educational_level);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $material_educational_level = new material_educational_level();
        $material_educational_level = educational_level::pluck('name','id');
        return view('users.material_educational_level',compact('material_educational_level'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $material_educational_level = request()->except('_token');
        material_educational_level::insert($material_educational_level);
        return response()->json($material_educational_level);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\material_educational_level  $material_educational_level
     * @return \Illuminate\Http\Response
     */
    public function show(material_educational_level $material_educational_level)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\material_educational_level  $material_educational_level
     * @return \Illuminate\Http\Response
     */
    public function edit(material_educational_level $material_educational_level, $id)
    {
        $material_educational_level=material_educational_level::findOrFail($id);
        $material_educational_level = educational_level::pluck('name','id');
        return view('edit.material_educational_level', compact('material_educational_level'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\material_educational_level  $material_educational_level
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, material_educational_level $id)
    {
        $id->fill($request->post())->save();
        return response()->json([            
            'material_educational_level'=>$id
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\material_educational_level  $material_educational_level
     * @return \Illuminate\Http\Response
     */
    public function destroy(material_educational_level $material_educational_level,$id)
    {
        material_educational_level::destroy($id);
        return redirect('material_educational_level');
    }
}
