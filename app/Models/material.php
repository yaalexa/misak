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
        'name','isbn','year','num_pages','pdf'
    ];
}
