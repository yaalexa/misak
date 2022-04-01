<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class editorial extends Model
{
    use HasFactory;

    

    protected $table="editorials";
    protected $primaryKey="id";
    protected $fillable=[
        'name'
    ];

    public function editorials(){
        return $this->hasMany('App\Models\material', 'editorial_id','id');
    }
}
