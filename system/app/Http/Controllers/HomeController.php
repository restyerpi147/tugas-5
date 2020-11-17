<?php 

namespace App\Http\Controllers;

/**
 * 
 */
class HomeController extends Controller
{
	
	function showBeranda()
	{
		return view('admin/index');
	}
	
	function showKategori()
	{
		return view('admin/kategori');
	}
	
	function showProduk()
	{
		return view('admin/produk');
	}


}