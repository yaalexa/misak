<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class type_material extends Model
{
    use HasFactory;
    protected $table="type_materials";
    protected $primaryKey="id";
    protected $fillable=[
        'name'
    ];
}
