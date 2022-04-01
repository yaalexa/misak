<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class educational_level extends Model
{
    use HasFactory;

    protected $table="educational_levels";
    protected $primaryKey="id";
    protected $fillable=[
        'name'
    ];
    public function material_education_level(){
        return $this->belongsToMany('App\Models\material_educational_level', 'material_educational_level_id','id');
    }
}
