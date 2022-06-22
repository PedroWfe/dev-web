<?php

namespace App\Http\Controllers;

use App\Models\Cadastro;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index(){
        $login = Cadastro::all();
        return view('login.index', ['login'=>$login]);
    }
}
