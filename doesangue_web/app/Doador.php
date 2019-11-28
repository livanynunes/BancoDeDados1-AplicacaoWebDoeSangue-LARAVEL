<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Doador extends Authenticatable
{
    use Notifiable;

    protected $guard = 'doador';
    protected $table = 'doadores'; // importante, para reconhecer a tabela doadores

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'data_nascimento', 'd_cpf', 'd_endereco', 'd_telefone', 'password','d_peso','d_sexo','tipo_sangue',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    // protected $primaryKey = 'user_id';
    
    

}
