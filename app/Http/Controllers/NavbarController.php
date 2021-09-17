<?php

namespace App\Http\Controllers;

use App\Models\Navbar;
use Illuminate\Http\Request;

class NavbarController extends Controller
{
    
    public function index(){
        $navbars = Navbar::all();
        return view('backoffice.navbar.all', compact('navbars'));
    }
    public function edit (Navbar $navbar){

        return view('backoffice.navbar.edit', compact('navbar'));
    }
    public function update (Navbar $id, Request $request) {
        $navbars = $id;
        $navbars->titre = $request->titre;
        $navbars->nav1 = $request->nav1;
        $navbars->nav2 = $request->nav2;
        $navbars->nav3 = $request->nav3;
        $navbars->save();
        return redirect()->route('navbar.index');
    }
}
