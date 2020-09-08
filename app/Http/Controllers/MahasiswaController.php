<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mahasiswa;
use App\Asrama;

class MahasiswaController extends Controller
{
    //
    // public function getMahasiswa(){
    // 	$mahasiswas = Mahasiswa::all();

    // 	return response()->json($mahasiswas);
    // }

    // public function addMahasiswa(Request $request){
    // 	// dd($request->all());

    // 	// dd($request->body);

    	
    // 	// membuat data baru
    // 	$mahasiswa = new Mahasiswa();
    // 	$mahasiswa->nama_mahasiswa = $request->nama_mahasiswa;
    // 	$mahasiswa->prodi_mahasiswa = $request->prodi_mahasiswa;
    // 	$mahasiswa->angkatan = $request->angkatan;
    // 	$mahasiswa->id_asrama = $request->id_asrama;
    // 	$mahasiswa->save();	
    // }
    public function index()
    {
        $data_mahasiswa = Mahasiswa::all(); 
        return view('mahasiswa.index',['data_mahasiswa' => $data_mahasiswa]);
    } 
    public function create(Request $request)
    {
        \App\Mahasiswa::create($request->all());
        return redirect('mahasiswa')->with('sukses','Data berhasil diinput');
    }
    public function edit($id)
    {
        $mahasiswas = \App\Mahasiswa::find($id);
        return view ('mahasiswa/edit',['mahasiswa' => $asramas]);
    }
    public function update(Request $request,$id)
    {
        $mahasiswas = \App\Mahasiswa::find($id);
        $mahasiswas->update($request->all());
        return redirect('/mahasiswas')->with('sukses','data berhasil diupdate');
    }
    public function delete($id)
    {
        $mahasiswas = \App\Mahasiswa::find($id);
        $mahasiswas->delete($mahasiswas);
        return redirect('/mahasiswas')->with('sukses','data berhasil dihapus');   
    }
}
