<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{
    use SoftDeletes;
    //apunta el modelo Post a la tabla de posts
    protected $table ='posts'; 
    //deleted_at se crea a partir del uso de SoftDeletes
    protected $dates =['deleted_at']; 

    //funcion
    public function user(){
    	//belongsTo: funcion inversa del hasMany
    	return $this->belongsTo('App\User','user_id','id');
    }

    public function picture(){
    	return $this->hasOne('App\Picture','post_id','id');
    }

    //comments en plural porque es de uno a muchos
    public function comments(){
    	return $this->hasMany('App\Comment','post_id','id');
    }

    //many to many: se usa la tabla pivote (nombre singular de ambas tablas)
    public function categories(){
    	//primer parametro es el modelo
    	//segundo parametro es el nombre de la tabla pivote
    	//tercer parametro es el campo en la tabla al que se referencia en la tabla category_post
    	//cuarto parametro es el campo en Categories
    	return $this->belongsToMany('App\Category','category_post','post_id','category_id');
    }
}
