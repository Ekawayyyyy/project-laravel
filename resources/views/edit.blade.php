@extends('dashboard')
@section('content')
@include('style.create')

    <div class="isi"> 
        <h2>form edit</h2>      
        <form  class="datanya" action="/update/{{ $data->id }}" method="post">
            @csrf
            @method('PUT')
            <input type="text" id="nim" name="nim" placeholder="masukkan nim" value="{{$data->nim}}" required><br>
            <input type="text" id="nama"name="nama" placeholder="masukkan nama" value="{{$data->nama}}" required><br>
            <input type="text" id="jabatan"name="jabatan" placeholder="masukkan jabatan" value="{{$data->jabatan}}" required><br>
            <input type="text" id="jurusan"name="jurusan" placeholder="masukkan jurusan" value="{{$data->jurusan}}" required><br><br><br>
            <button type="submit" name="submit">simpan</button>
        </form>
    </div>
@endsection