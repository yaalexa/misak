<?php

namespace App\Http\Controllers\API;

<<<<<<< Updated upstream
use App\Models\material;
=======
use App\Http\Controllers\Controller;
use App\Models\Material;
use Illuminate\Validation\Rules\Exist;
use Illuminate\Support\Facades\Validator;
>>>>>>> Stashed changes
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
<<<<<<< Updated upstream
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
=======
        $material = Material::all();
        return $material;
>>>>>>> Stashed changes
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
<<<<<<< Updated upstream
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
=======
        $validar= Validator::make($request->all(), [
            'name' => 'required',
            'isbn' => 'required|unique:materials',
            'year' => 'required',
            'num_pages' => 'required',
            'priority' => 'required',
            'pdf' => 'required',
            'img' => 'required',
            'type_material_id' => 'required', 
            'editorial_id' => 'required',
            'area_id' => 'required'
        ]); 
        if(!$validar ->fails()){
            $material = new Material();
            
            $material->name = $request ->name;
            $material->isbn = $request ->isbn;
            $material->year = $request ->year;
            $material->num_pages = $request ->num_pages;
            $material->priority = $request ->priority;
            $material->pdf = $request ->pdf;
            $material->img = $request ->img;
            $material->type_material_id = $request ->type_material_id;
            $material->editorial_id = $request ->editorial_id;
            $material->area_id = $request ->area_id;

            $material->save();

            return response()->json([
                'res'=> true,
                'mensaje' => 'material guardado' 
            ]);
        }else{
            return response()->json([
                'res'=> false,
                'mensaje' => 'error entrada duplicada' 
            ]);
        }
>>>>>>> Stashed changes
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
<<<<<<< Updated upstream
    public function edit(material $books)
    {
        //
=======
    public function show($id)
    {
        $material = Material::where('id',$id)
        ->first();
        if (isset($material)){
            return response()->json([
                'res'=> true,
                'material' => $material 
            ]);
        }else{
            return response()->json([
                'res'=> false,
                'mensaje' => 'registro no encontrado' 
            ]);
        }
>>>>>>> Stashed changes
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
<<<<<<< Updated upstream
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
=======
    public function update(Request $request, $id)
    {
        $validar= Validator::make($request->all(), [
            'name' => 'required',
            'isbn' => 'required|unique:materials',
            'year' => 'required',
            'num_pages' => 'required',
            'priority' => 'required',
            'pdf' => 'required',
            'img' => 'required',
            'type_material_id' => 'required', 
            'editorial_id' => 'required',
            'area_id' => 'required'
        ]);

        if(!$validar->fails()){
            $material = Material::find($id);
            if(isset($material)){
                $material->name = $request ->name;
                $material->year = $request ->year;
                $material->isbn = $request ->isbn;
                $material->priority = $request ->priority;
                $material->num_pages = $request ->num_pages;
                $material->img = $request ->img;
                $material->type_material_id = $request ->type_material_id;
                $material->pdf = $request ->pdf;
                $material->editorial_id = $request ->editorial_id;
                $material->area_id = $request ->area_id;

                $material->save();
                 return response()->json([
                'res'=> true,
                'mensaje' => 'material actualizado' 
            ]);

            }else{
                return response()->json([
                    'res'=> false,
                    'mensaje' => 'error al actualizar'
                ]);
            }
        }else{
            return "entrada duplicada";
        }
>>>>>>> Stashed changes
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
<<<<<<< Updated upstream
    public function destroy(Request $request,material $material)
    {
        $material = Material::destroy($request->id);
        return $material;
=======
    public function destroy(Request $request, $id)
    {
        $material = Material::find($id);
        if(isset($material)){
            $material->delete();
            return response()->json([
                'res'=> true,
                'mensaje' => 'exito al elimar'
            ]);
        }else{
            return response()->json([
                'res'=> false,
                'mensaje' => 'falla al elimar no se encontro registro'
            ]);
        }
>>>>>>> Stashed changes
    }
}
