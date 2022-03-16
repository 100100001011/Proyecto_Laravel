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
    protected $fillable = [
        'name',
        'email',
        'password',
        'url',
        'departamentos_id',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

     //Relacion 1:n usuario recetas
    //Un usuario puede tener muchas recetas
    public function userApp1(){
        //            1:n     modelo     
        return $this->hasMany(App1::class);
    }

     //RELACION USUARIOS - PERFILES 1 : 1
     public function userPerfil(){
        return $this->hasOne(Perfil::class);
    }

     //SE CREA UN EVENTO
     protected static function booted(){
        parent::booted();
        static::created(function($user){
            //asignar un perfil
            $user->userPerfil()->create();
        });

        
    }
}
