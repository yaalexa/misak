<?php

namespace App\Http\Controllers;

use App\Models\rols;
use Illuminate\Http\Request;

class RolsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $rols = rols::all(['id','name']);
        return response()->json($rols);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $rols = new rols();
        return view('rols.create',compact('rols'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $rols = request()->except('_token');
        rols::insert($rols);
        return response()->json($rols);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\rols  $rols
     * @return \Illuminate\Http\Response
     */
    public function show(rols $rols)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\rols  $rols
     * @return \Illuminate\Http\Response
     */
    public function edit(rols $rols,$id)
    {
        $rols=rols::findOrFail($id);
        return view('edit.edit_user', compact('rols'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\rols  $rols
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, rols $id)
    {
        $id->fill($request->post())->save();
        return response()->json([            
            'User'=>$id
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\rols  $rols
     * @return \Illuminate\Http\Response
     */
    public function destroy(rols $rols,$id)
    {
        rols::destroy($id);
        return redirect('rols');
    }
}
