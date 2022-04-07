<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $table="users";
    protected $fillable = [
        'name',
        'full_name',
        'email',
        'password',
        'document_type',
        'document_number',
        'certificate_misak',
       
    ];
    protected $hidden = [
        'created_at',
        'updated_at',
        'remember_token'
    ];


    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

     public function rol(){
        return $this->BelongsTo('App\Rol','user_id','id');
    }
    //relacion de muchos a muchos
    public function material(){
        return $this->hasMany('App\Models\Material_User','material_id','id');
    }
}


   


   

