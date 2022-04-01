<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class material extends Model
{
    use HasFactory;

    protected $table="material";
    protected $primaryKey="id";
    protected $fillable=[
        "name",
          "isbn" ,
          "year", 
          "num_pages",
          "priority",
          "pdf",
          "img",
          "material_users_id",
          "type_material_id",
          "author_books_id",
          "editorial_id" ,
          "area_id",
          "material_educational_leves_id"
    ];
}
