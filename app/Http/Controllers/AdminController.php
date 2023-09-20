<?php

namespace App\Http\Controllers;
/* use App\Models\Vente;*
/* use App\Models\Montre;*/
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\User;

class AdminController extends Controller
{
    //
    public function dashboard()
    {
        // Logique du tableau de bord d'administration
        return view('admin.main');
    }

    public function ajout(){
        return view('admin.ajout');
    }

    public function liste(){
        return view('admin.liste');
    }

    public function listevente(){
        return view('listevente');
    }


}
