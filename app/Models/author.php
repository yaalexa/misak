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
}
