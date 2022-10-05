<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

use Illuminate\Database\Eloquent\Casts\Attribute;

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
    //Mutadores
    protected function name(): Attribute
    {
        return new Attribute(
            /*get: function($value)
            {
                return ucwords($value);//Al momento de obtenerlo las primero letras con MAYUS
            },*///Forma 1
            //Forma 2
            get:fn($value)=>ucwords($value),

            /*set: function($value)
            {
                return strtolower($value);//Al momento que se suba a la BD todas las letras son MINUS
            }*///Forma 1
            //Forma 2
            set:fn($value) => strtolower($value)

        );
    }

    //Accesores
 /*   
    public function getNameAttribute($value)
    {
        return ucwords($value);
    }
    
    public function setNameAttribute($value)
    {
        $this->attributes['name'] = strtolower($value);
    }
    */


}
