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
}
