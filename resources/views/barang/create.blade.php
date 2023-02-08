@extends('layouts.home')

@section('content')
<div class="container">
<div class="card-body">
<form action="/store" method="POST">
    @csrf
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Nama Barang</label>
    <input type="text" name="namaBarang" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Deskripsi Barang</label>
    <input type="text" name="deskripsiBarang" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">harga</label>
    <input type="text" name="harga" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>

</div>
</div>
@endsection