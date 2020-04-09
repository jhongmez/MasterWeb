<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    public function pruebas(Request $request) {
        return 'User Controller';
    }

    public function register(Request $request) {
        return "Accion registro";
    }

    public function login(Request $request) {
        return "Accion login";
    }
}
