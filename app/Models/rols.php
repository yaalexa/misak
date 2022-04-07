<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class rols extends Model
{
    use HasFactory;
    protected $table="rols";
    protected $primaryKey="id";
    protected $fillable=[
        "name"
    ];
    public function users(){
        return $this->hasMany('App\Models\User', 'user_id','id');
    }
}
