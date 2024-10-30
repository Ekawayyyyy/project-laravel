@extends('dashboard')
@section('content')
    @include('style.create')
    <div class="isi"> 
        <h2>form registrasi mahasiswa</h2>      
        <form  class="datanya" action="/read" method="post">
            @csrf
            <input type="text" id="nim" name="nim" placeholder="masukkan nim" required><br>
            <input type="text" id="nama"name="nama" placeholder="masukkan nama" required><br>
            <input type="text" id="jabatan"name="jabatan" placeholder="masukkan jabatan" required><br>
            <input type="text" id="jurusan"name="jurusan" placeholder="masukkan jurusan" required><br><br><br>
            <button type="submit" name="submit">simpan</button>
        </form>
    </div>
@endsection