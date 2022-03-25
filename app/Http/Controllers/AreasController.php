<?php

namespace App\Http\Controllers;

use App\Models\areas;
use Illuminate\Http\Request;

class AreasController extends Controller
{
    
   /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $Areas = Areas::all(['id','name']);
        return response()->json($Areas);
        
    }

    
    public function store(Request $request)
    {
        $Areas = Areas::create($request->post());
        return response()->json([           
            'Areas'=>$Areas
        ]);
    }

    public function show(Areas $Areas)
    {
        return response()->json($Areas);
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\author  $author
     * @return \Illuminate\Http\Response
     */
    public function edit( $id)
    {
        $Areas=Areas::findOrFail($id);
        return view('edit.edit_areas', compact('areas'));
    }

    
    public function update(Request $request, Areas $id)
    {
       
        
        $id->fill($request->post())->save();
        return response()->json([            
            'Areas'=>$id
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
        
        Areas::destroy($id);
        return redirect('areas');

    }
}
