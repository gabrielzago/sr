<?php

	namespace App\Http\Controllers;

	use Illuminate\Http\Request;

	use App\Http\Requests;

	class Funcionario extends Controller{

	    public function index(){
	 		return view('funcionarios.index');
	    }

	    public function novo(){

	    	return view('funcionarios.novo');
	    }

   	    public function lista() {

    		return view('funcionarios.lista');
	    }

	}
