<?php 


namespace App\Http\Controllers;
use App\Models\Makanan;

/**
 * 
 */
class MakananController extends Controller
{
	
	function index()
	{
		$data['list_makanan'] = Makanan::all();
		return view('admin/makanan/index', $data);
	}
	
	function create()
	{
		return view('admin/makanan/create');
	}
	
	function store()
	{
		$makanan = new Makanan;
		$makanan->nama = request('nama');
		$makanan->harga = request('harga');
		$makanan->kategori = request('kategori');
		$makanan->deskripsi = request('deskripsi');
		$makanan->save();

		return redirect('admin/makanan')->with('success', 'Data Berhasil di Tambahkan');
	}
	
	function show(Makanan $makanan)
	{
		$data['makanan'] = $makanan;
		return view('admin/makanan/show', $data);
	}
	
	function edit(Makanan $makanan)
	{
		$data['makanan'] = $makanan;
		return view('admin/makanan/edit', $data);
		
	}
	
	function update(Makanan $makanan)
	{
		$makanan->nama = request('nama');
		$makanan->harga = request('harga');
		$makanan->kategori = request('kategori');
		$makanan->deskripsi = request('deskripsi');
		$makanan->save();

		return redirect('admin/makanan')->with('success', 'Data Berhasil di Update');
	}
	
	function destroy(Makanan $makanan)
	{
		$makanan->delete();

		return redirect('admin/makanan')->with('danger', 'Data Berhasil di Hapus');
	}
}