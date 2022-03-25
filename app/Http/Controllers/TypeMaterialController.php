<?php

namespace App\Http\Controllers;

use App\Models\Typematerial;
use Illuminate\Http\Request;

class TypeMaterialController extends Controller
{  /**
    * Display a listing of the resource.
    *
    * @return \Illuminate\Http\Response
    */
   public function index()
   {
       $typematerial = Typematerial::all(['name']);
       return response()->json($typematerial);
   }

   

   /**
    * Store a newly created resource in storage.
    *
    * @param  \Illuminate\Http\Request  $request
    * @return \Illuminate\Http\Response
    */
   public function store(Request $request)
   {
       $typematerial = Typematerial::create($request->post());
       return response()->json([           
           'type_material'=>$typematerial
       ]);
   }

   /**
    * Display the specified resource.
    *
    * @param  \App\Models\type_material  $type_material
    * @return \Illuminate\Http\Response
    */
   public function show(Typematerial $typematerial)
   {
       return response()->json($typematerial);
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
   public function update(Request $request, Typematerial $typematerial)
   {
       $typematerial->fill($request->post())->save();
       return response()->json([            
           'typematerial'=>$typematerial
       ]);
   }

   /**
    * Remove the specified resource from storage.
    *
    * @param  \App\Models\type_material  $type_material
    * @return \Illuminate\Http\Response
    */
   public function destroy(Typematerial $typematerial)
   {
       $typematerial->delete();
       return response()->json([
           'mensaje'=>'¡Registro eliminado correctamente!'
       ]);
   }
}
