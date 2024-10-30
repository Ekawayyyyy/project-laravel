
@extends ('dashboard')
@section ('content')
@include('style.read')
    <div class="card">
                <h5 class="card-header">Bordered Table</h5>
                <div class="card-body">
                  <div class="table-responsive text-nowrap">
                    <table class="table table-bordered table align-items-center mb-0">
                      <thead>
                        <tr>
                          <th>No</th>
                          <th>NIM</th>
                          <th>Nama</th>
                          <th>Jabatan</th>
                          <th>Jurusan</th>
                          <th>tanggal</th>
                          <th>Aksi</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach ($data as $dt)
                                <tr>
                                    <td>{{$dt->id}}</td>
                                    <td>{{$dt->nim}}</td>
                                    <td>{{$dt->nama}}</td>
                                    <td>{{$dt->jabatan}}</td>
                                    <td>{{$dt->jurusan}}</td>
                                    <td>{{$dt->created_at}}</td>
                                    <td class="align-middle text-center text-sm w-15  d-flex ">
                                        <button class="edit">
                                            <a href="/edit-data/{{ $dt->id }}" >Edit</a>
                                        </button>
                                        <form action="/delete/{{ $dt->id }}">
                                            @csrf
                                            @method ('DELETE')
                                            <button type="submit" class="delete">delete</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
@endsection