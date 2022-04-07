<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class author_books extends Model
{
    use HasFactory;
    protected $table="author_books";
    protected $primaryKey="id";
    protected $fillable=[
    ];
    public function author_books(){
        return $this->belongsToMany('App\Models\material', 'author_books_id','id');
    }

    public function author(){
        return $this->belongsToMany('App\Models\author', 'author_id','id');
    }
}
