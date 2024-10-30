<?php

namespace App\Http\Controllers;
use App\Models\data;

use Illuminate\Http\Request;

class dashboard extends Controller
{
    public function dashboard(){
        return view ('login');
    }
    // public function read(){
    //     return view ('read');
    // }
    public function login(){
        return view ('login');
    }
    public function create(){
        return view ('create');
    }
    public function tambah(){
        return view ('tambah');
    }
    public function edit(){
        return view ('edit');
    }
    public function read(Request $request){
        $data = new data();
        $data->nim = $request->input('nim');
        $data->nama = $request->input('nama');
        $data->jabatan = $request->input('jabatan');
        $data->jurusan = $request->input('jurusan');
        $data->save();

        return 'data berhasil disimpan';

    }

    public function tampil(){
        $data = data::all();
        return view ('read', compact('data'));
    }


    public function delete(string $id){
        $data = data::findOrFail($id);
        $data -> delete();

        return 'data dihapus';
    }
    public function editform($id){
        $data = data::findOrFail($id);
        
        return view ('edit', ['data' => $data]);
    }

    public function update(Request $request, $id){
        $data = data::findOrFail($id);
        $data->nim = $request->input('nim');
        $data->nama = $request->input('nama');
        $data->jabatan = $request->input('jabatan');
        $data->jurusan = $request->input('jurusan');
        $data->save();

        return"data berhasil d update";
    }

    
}
