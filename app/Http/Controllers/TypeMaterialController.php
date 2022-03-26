<?php

namespace App\Http\Controllers;

use App\Models\type_material;
use Illuminate\Http\Request;

class TypeMaterialController extends Controller
{  /**
    * Display a listing of the resource.
    *
    * @return \Illuminate\Http\Response
    */
   public function index()
   {
       $type_material = type_material::all(['name']);
       return response()->json($type_material);
   }

   

   /**
    * Store a newly created resource in storage.
    *
    * @param  \Illuminate\Http\Request  $request
    * @return \Illuminate\Http\Response
    */
   public function store(Request $request)
   {
       $type_material = type_material::create($request->post());
       return response()->json([           
           'type_material'=>$type_material
       ]);
   }

   /**
    * Display the specified resource.
    *
    * @param  \App\Models\type_material  $type_material
    * @return \Illuminate\Http\Response
    */
   public function show(type_material $type_material)
   {
       return response()->json($type_material);
   }

   /**
    * Show the form for editing the specified resource.
    *
    * @param  \App\Models\type_material  $type_material
    * @return \Illuminate\Http\Response
    */
  

   /**
    * Update the specified resource in storage.
    *
    * @param  \Illuminate\Http\Request  $request
    * @param  \App\Models\type_material  $type_material
    * @return \Illuminate\Http\Response
    */
   public function update(Request $request, type_material $type_material)
   {
       $type_material->fill($request->post())->save();
       return response()->json([            
           'type_material'=>$type_material
       ]);
   }

   /**
    * Remove the specified resource from storage.
    *
    * @param  \App\Models\type_material  $type_material
    * @return \Illuminate\Http\Response
    */
   public function destroy(type_material $type_material)
   {
       $type_material->delete();
       return response()->json([
           'mensaje'=>'¡Registro eliminado correctamente!'
       ]);
   }
}
