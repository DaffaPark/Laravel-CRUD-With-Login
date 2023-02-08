@extends('layouts.home')

@section('content')
<div class="container">
<div class="card-body">
<div class="row">
            @if ($message = Session::get('Sukses'))
            <div class="alert alert-info" role="alert">
              {{ $message }}
            </div>
          
            @endif
</div>
<a href="/create" class="btn btn-primary">Tambah</a>
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nama Barang</th>
      <th scope="col">Deskripsi Barang</th>
      <th scope="col">Harga</th>
      <th scope="col">Aksi</th>
    </tr>
  </thead>
  <tbody>
    @php
      $no = 1;
    @endphp

    @foreach($data as $row)
    <tr>
    <th scope="row">#</th>
      <td>{{ $row->namaBarang }}</td>
      <td>{{ $row->deskripsiBarang }}</td>
      <td>{{ $row->harga }}</td>
      <td>
        <a href="/edit/{{ $row->id }}" class="btn btn-dark mb-2">Edit</a>
        <a href="/hapus/{{ $row->id }}" class="btn btn-danger">Hapus</a>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
</div>
</div>
@endsection