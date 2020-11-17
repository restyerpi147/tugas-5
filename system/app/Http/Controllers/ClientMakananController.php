<?php 


namespace App\Http\Controllers;
use App\Models\Makanan;
use App\Models\ClientMakanan;

/**
 * 
 */
class ClientMakananController extends Controller
{
	
	function index()
	{
		$data['list_makanan'] = Makanan::all();
		return view('client/index', $data);
	}
	
	function create(Makanan $makanan)
	{
		$data['makanan'] = $makanan;
		return view('client/create', $data);
	}
	
	function store(Makanan $makanan)
	{
		$data['makanan'] = $makanan;
		$pesanan = new ClientMakanan;
		$pesanan->nama = request('nama');
		$pesanan->harga = request('harga');
		$pesanan->jumlah = request('jumlah');
		$pesanan->save();

		return redirect('bayar')->with('success', 'Makanan Berhasil di Pesan');
	}
	
	function show()
	{
		$data['list_pesanan'] = ClientMakanan::all();
		return view('client/bayar', $data);
	}
	
	function edit(ClientMakanan $makanan)
	{
		$data['makanan'] = $makanan;
		return view('client/edit', $data);
		
	}
	
	function update(ClientMakanan $makanan)
	{
		$makanan->nama = request('nama');
		$makanan->harga = request('harga');
		$makanan->jumlah = request('jumlah');
		$makanan->save();

		return redirect('bayar')->with('success', 'Pesanan Berhasil di Update');
	}
	
	function destroy(Makanan $makanan)
	{
		$makanan->delete();

		return redirect('bayar')->with('danger', 'Pesanan Berhasil di Hapus');
	}
}