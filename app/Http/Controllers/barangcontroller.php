<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class barangcontroller extends Controller
{
    public function index(){
        return "ini pakai controllermi";
    }

    public function carabaru($barang){
        return view ('cara-baru', compact('barang'));
    }
}
