@extends('layouts.home')

@section('content')
<div class="container">
<div class="card-body">
<form action="/update/{{ $data->id }}" method="POST">
    @csrf
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Nama Barang</label>
    <input type="text" name="namaBarang" value="{{ $data->namaBarang }}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Deskripsi Barang</label>
    <input type="text" name="deskripsiBarang" value="{{ $data->deskripsiBarang }}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">harga</label>
    <input type="text" name="harga" value="{{ $data->harga }}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>

</div>
</div>
@endsection