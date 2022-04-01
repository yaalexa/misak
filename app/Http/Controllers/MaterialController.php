<?php

namespace App\Http\Controllers;

use App\Models\material;
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
        //
        $material= material::all();
        return $material;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('material.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $material = new Material();
        $material->name = $request->name;
        $material->isbn = $request->isbn;
        $material->year = $request->year;
        $material->num_pages = $request->num_pages;
        $material->pdf = $request->pdf;
        $material->priority = $request->priority;
        $material->img = $request->img;
        $material->material_users_id = $request->material_users_id;
        $material->type_material_id = $request->type_material_id;
        $material->author_books_id = $request->author_books_id;
        $material->editorial_id = $request->editorial_id;
        $material->area_id = $request->area_id;
        $material->material_educational_leves_id = $request->material_educational_leves_id;
            
        $material->save();
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
    public function edit(material $books)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\books  $books
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,  $material)
    {
        $material = Material::findOrFail($request->id);
        $material->name = $request->name;
        $material->isbn = $request->isbn;
        $material->year = $request->year;
        $material->num_pages = $request->num_pages;
        $material->pdf = $request->pdf;
        $material->priority = $request->priority;
        $material->img = $request->img;
        $material->material_users_id = $request->material_users_id;
        $material->type_material_id = $request->type_material_id;
        $material->author_books_id = $request->author_books_id;
        $material->editorial_id = $request->editorial_id;
        $material->area_id = $request->area_id;
        $material->material_educational_leves_id = $request->material_educational_leves_id;
            
        $material->save();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\books  $books
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request,material $material)
    {
        $material = Material::destroy($request->id);
        return $material;
    }
}

