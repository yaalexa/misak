<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class material_users extends Model
{
    use HasFactory;
    protected $table="material_users";
    protected $primaryKey="id";
    protected $fillable=[
        "manejo_users","detalle_material"
    ];
    public function material_users(){
        return $this->belongsToMany('App\Models\material', 'material_users_id','id');
    }
    public function users(){
        return $this->belongsToMany('App\Models\User', 'users_id','id');
    }
    
}
