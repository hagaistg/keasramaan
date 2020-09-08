<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AsramaController extends Controller
{
    
    // public function getAsrama(){
    // 	$asramas = \App\Asrama::all();
    // 	return response()->json($asramas);
    // }
    // public function addAsrama(Request $request){
    // 	// dd($request->all());
    // 	// dd($request->body);

    // 	// membuat data baru
    // 	$asrama = new Asrama();
    // 	$asrama->nama_asrama = $request->nama_asrama;
    // 	$asrama->pembina_asrama = $request->pembina_asrama;
    // 	$asrama->jumlah_kamar = $request->jumlah_kamar;
    // 	$asrama->lokasi = $request->lokasi;
    // 	$asrama->save();
    // }
    public function index()
    {
        $data_asrama = \App\Asrama::all();
        return view('asrama.index',['data_asrama' => $data_asrama]);
    } 
    public function create(Request $request)
    {
        \App\Asrama::create($request->all());
        return redirect('asramas')->with('sukses','Data berhasil diinput');
    }
    public function edit($id)
    {
        $asramas = \App\Asrama::find($id);
        return view ('asrama/edit',['asramas' => $asramas]);
    }
    public function update(Request $request,$id)
    {
        $asramas = \App\Asrama::find($id);
        $asramas->update($request->all());
        return redirect('/asramas')->with('sukses','data berhasil diupdate');
    }
    public function delete($id)
    {
        $asramas = \App\Asrama::find($id);
        $asramas->delete($asramas);
        return redirect('/asramas')->with('sukses','data berhasil dihapus');   
    }

    // public function create(Request $request)
    // {
    //     \App\Asrama::create($request->all());
    //     return redirect('/asramas')->with('sukses', 'Data berhasil diinput');

    // }

    // public function edit($id)
    // {
    //     $asramas = \App\Petani::find($id);
    //     return view('asramas/edit',['asramas' => $asrama]);
    // }

    // public function update(Request $request,$id)
    // {
    //     $asramas = \App\Petani::find($id);
    //     $asramas->update($request->all());
    //     return redirect('/asramas')->with('sukses', 'Data berhasil diupdate');

    // }

    // public function delete($id)
    // {
    //     $asramas = \App\Petani::find($id);
    //     $asramas->delete($asrama);
    //     return redirect('/asramas')->with('sukses', 'Data berhasil dihapus');
    // }

}
