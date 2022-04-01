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
    ];

    public function areas(){
        return $this->belongsTo('App\Models\areas', 'area_id','id');
    }

    public function material_users(){
        return $this->belongsToMany('App\Models\material', 'material_users_id','id');
    }
    public function material_education_level(){
        return $this->belongsToMany('App\Models\material_educational_level', 'material_educational_level_id','id');
    }

    public function editorials(){
        return $this->belongsTo('App\Models\editorial', 'editorial_id','id');
    }
    public function type_materials(){
        return $this->belongsTo('App\Models\type_material', 'type_material_id','id');
    }

    public function author_books(){
        return $this->belongsToMany('App\Models\author_books', 'author_id','id');
    }
}
