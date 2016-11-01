<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Requests\contactoRequest as contactoRequest;
use App\Http\Controllers\Controller;

class Encuesta1Controller extends Controller
{
    public function index(){
    	return view('vwEncuesta1');
    }

    public function contacto(contactoRequest $rq){
    	dd($rq);
    }
}
