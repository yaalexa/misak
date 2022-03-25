<?php

namespace App\Http\Controllers;

use App\Models\author;
use Illuminate\Http\Request;

class AuthorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //api
        // $author = author::all();
        // return $author;

        //web
        $author = Author::all(['id','name','address']);
        return response()->json($author);
        /*$author['author']=author::paginate(20);
        return view('show_data.data_author',$author);*/
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('users.author');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //api

        // $author = new author();
        // $author->name = $request->name;
        // $author->address= $request->address;
        // $author->phone = $request->phone;
        // $author->save();

        //web

        // $datosAuthor = request()->all();
        //quita el token ->except('_token') 
        $datosAuthor = request()->except('_token');
        author::insert($datosAuthor);
        return response()->json($datosAuthor);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\author  $author
     * @return \Illuminate\Http\Response
     */
    public function show(author $author)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\author  $author
     * @return \Illuminate\Http\Response
     */
    public function edit( $id)
    {
        $author=author::findOrFail($id);
        return view('edit.edit_author', compact('author'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\author  $author
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Author $id)
    {
        //api
        // $author = author::findOrFail($request->id);
        // $author->name = $request->name;
        // $author->address = $request->address;
        // $author->phone = $request->phone;
        // $author->save();
        // return $author;

        //web
       /* $datosAuthor = request()->except(['_token','_method']);
        author::where('id','=',$id)->update($datosAuthor);
        $author=author::findOrFail($id);
        return view('edit.edit_author', compact('author'));*/
        
        $id->fill($request->post())->save();
        return response()->json([            
            'author'=>$id
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
        //api
        // $author = author::destroy($request->id);
        // return $author;

        //web
        author::destroy($id);
        return redirect('author');

    }
}
