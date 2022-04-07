<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    use HasFactory;
    protected $table = 'authors';

    protected $fillable = [
        'name',
        'address',
        'phone'
    ];
    protected $hidden = [
        'created_at',
        'updated_at'
    ];

    //relacion muchos a muchos
    public function material(){
        return $this->hasMany('App\Models\Material','material_id','id');
    }
    
}

