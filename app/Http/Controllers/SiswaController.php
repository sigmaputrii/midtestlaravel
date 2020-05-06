<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiswaController extends Controller
{
    public function index(Request $request)
    {
    	if($request->has('cari')){
    		$data_siswa = \App\Siswa::where('nama_depan', 'LIKE', '%'.$request->cari.'%')-> get();
    	}else{
    		$data_siswa = \App\Siswa::all();
    	} 
    	return view('siswa.index', ['data_siswa' => $data_siswa]);
    }
    //Request digunakan untuk menangkap data dari form
    public function create(Request $request)
    {
    	//menangkap data
    	\App\Siswa::create($request->all());
    	return redirect('/siswa')->with('sukses', 'Data Berhasil ditambahkan!');
    }
    public function edit($id)
    {
    	//menemukan id siswa
    	$siswa = \App\Siswa::find($id);
    	return view('siswa/edit',['siswa'=> $siswa]);
    }
    //Request digunakan untuk menangkap data dari form
     public function update(Request $request, $id)
    {
    	//menemukan id siswa
    	$siswa = \App\Siswa::find($id);
    	//mengambil data
    	$siswa-> update($request->all());
    	return redirect('/siswa')->with('sukses', 'Data Berhasil diperbarui!');
    }
    public function delete($id)
    {
    	//menemukan id siswa
    	$siswa = \App\Siswa::find($id);
    	$siswa->delete($siswa);
    	return redirect('/siswa')->with('sukses', 'Data Berhasil dihapus!');
    }
    public function profile($id)
    {
        //menemukan id siswa
        $siswa = \App\Siswa::find($id);
        return view('siswa.profile',['siswa' => $siswa]);
    }
}
