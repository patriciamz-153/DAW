<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    protected $table ='users'; 

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    //FUNCION
    public function posts(){
        //this(Usuario) retonra tiene muchos Posts(App\Post)
        //user_id: llave foranea dentro de la tabla Post(tabla hija)
        //id: llave primaria en la tabla Usuarios(tabla padre)
        //hasMany-> uno a muchos
        return $this->hasMany('App\Post','user_id','id');
    }
}
