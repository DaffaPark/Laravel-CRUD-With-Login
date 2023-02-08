<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use Illuminate\Http\Request;

class BarangController extends Controller
{
    public function index(){

        $data = Barang::all();
        return view('barang.index',compact('data'));
    }

    public function create(){
        return view('barang.create');
    }


    public function store(Request $request){
        $data = Barang::create($request->all());
        return redirect('/barang')->with('Sukses','Barang Berhasil Ditambahkan');
    }

    public function edit($id){

        $data = Barang::find($id);

        return view('barang.edit', compact('data'));

    }

    public function update(Request $request, $id){
        $data = Barang::find($id);
        $data->update($request->all());
        
        return redirect('/barang')->with('Sukses','Barang Berhasil Diupdate');


    }
    public function delete($id){
        $data = Barang::find($id);
        $data->delete();

        return redirect('/barang')->with('Sukses','Barang Berhasil Dihapus');
    }
}
