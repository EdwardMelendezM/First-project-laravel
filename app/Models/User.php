<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;


class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /* Campos que se veran con normalidad */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /* Campos que no se pasaran como metodo de seguridad */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /* Campos que se convertiran a otro tipo de dato */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
