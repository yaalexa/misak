<?php

namespace App\Http\Controllers;

use App\Models\material_users;
use App\Models\User;
use Illuminate\Http\Request;

class MaterialUsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $material_users = material_users::all(['manejo_users','detalle_material']);
        $material_users = User::all(['name','full_name','email','password','document_type','document_number',
        'certificate_misak']);
        return response()->json($material_users);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $user = new User();
        $user = User::pluck('name','full_name','email','password','document_type','document_number',
        'certificate_misak');
        return view('users.material_users',compact('user'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $material_users = request()->except('_token');
        material_users::insert($material_users);
        return response()->json($material_users);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\material_users  $material_users
     * @return \Illuminate\Http\Response
     */
    public function show(material_users $material_users)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\material_users  $material_users
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $material_users=material_users::findOrFail($id);
        $user = User::pluck('name','full_name','email','password','document_type','document_number',
        'certificate_misak');
        return view('edit.edit_material_users', compact('uer'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\material_users  $material_users
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, material_users $id)
    {
        $id->fill($request->post())->save();
        return response()->json([            
            'material_users'=>$id
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\material_users  $material_users
     * @return \Illuminate\Http\Response
     */
    public function destroy(material_users $material_users,$id)
    {
        material_users::destroy($id);
        return redirect('material_users');
    }
}
