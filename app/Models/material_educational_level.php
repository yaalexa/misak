<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class material_educational_level extends Model
{
    use HasFactory;

    protected $table="material_educational_levels";
    protected $primaryKey="id";

    public function material_education_level(){
        return $this->belongsToMany('App\Models\material', 'material_educational_level_id','id');
    }

    public function education_level(){
        return $this->belongsToMany('App\Models\educational_level', 'educational_level_id','id');
    }
}
