<?php

namespace App\Http\Controllers;

use App\Models\material;
use App\Models\material_users;
use App\Models\material_educational_level;
use App\Models\areas;
use App\Models\editorial;
use App\Models\type_material;
use App\Models\author_books;
use Illuminate\Http\Request;

class MaterialController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $material = material::all(['name','isbn','year','num_pages','priority','pdf','img']);
        $material = areas::all(['name']);
        $material = material_users::all(['material_users_id']);
        $material = material_educational_level::all(['material_educational_level_id']);
        $material = editorial::all(['id','name']);
        $material = type_material::all(['id','name']);
        $material = author_books::all(['author_id']);
        return response()->json($material);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $material = new material();
        $material = areas::pluck('name','id');
        $material = material_users::pluck('users_id');
        $material = material_educational_level::pluck('material_educational_level_id');
        $material = editorial::pluck('name');
        $material = type_material::pluck('name');
        $material = author_books::pluck('author_id');
        return view('material.create',compact('material'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $material = request()->except('_token');
        material::insert($material);
        return response()->json($material);
    }
     /**
     * Display the specified resource.
     *
     * @param  \App\Models\books  $books
     * @return \Illuminate\Http\Response
     */
    public function show(material $books)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\books  $books
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $material=material::findOrFail($id);
        $material = areas::pluck('name','id');
        $material = material_users::pluck('users_id');
        $material = material_educational_level::pluck('material_educational_level_id');
        $material = editorial::pluck('id','name');
        $material = type_material::pluck('id','name');
        $material = author_books::pluck('author_id');
        return view('edit.edit_material', compact('material'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\books  $books
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,  $id )
    {
        $id->fill($request->post())->save();
        return response()->json([            
            'material'=>$id
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\books  $books
     * @return \Illuminate\Http\Response
     */
    public function destroy(material $material, $id)
    {
        material::destroy($id);
        return redirect('material');
    }
}

