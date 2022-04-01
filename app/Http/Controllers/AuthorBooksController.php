<?php

namespace App\Http\Controllers;

use App\Models\author_books;
use App\Models\author;
use Illuminate\Http\Request;

class AuthorBooksController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $author_books = author_books::all(['author_id']);
        $author_books = author::all(['id','name','address','phone']);
        return response()->json($author_books);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $author_books = new author_books();
        $author_books = author::pluck('id','name','address','phone');
        return view('users.author_books',compact('author_books'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $author_books = request()->except('_token');
        author_books::insert($author_books);
        return response()->json($author_books);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\author_books  $author_books
     * @return \Illuminate\Http\Response
     */
    public function show(author_books $author_books)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\author_books  $author_books
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $author_books=author_books::findOrFail($id);
        $author_books = author::pluck('id','name','address','phone');
        return view('edit.edit_author_books', compact('author_books'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\author_books  $author_books
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, author_books  $id)
    {
        $id->fill($request->post())->save();
        return response()->json([            
            'author_books'=>$id
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\author_books  $author_books
     * @return \Illuminate\Http\Response
     */
    public function destroy(author_books $author_books,$id)
    {
        author_books::destroy($id);
        return redirect('author_books');
    }
}
