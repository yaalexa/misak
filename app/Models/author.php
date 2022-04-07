<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class author extends Model
{
    use HasFactory;

    protected $table="authors";
    protected $primaryKey="id";
    protected $fillable=[
        'name','address','phone'
    ];

    public function author_books(){
        return $this->belongsToMany('App\Models\author_books', 'author_books_id','id');
    }
}
