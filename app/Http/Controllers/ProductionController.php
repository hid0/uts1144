<?php

namespace App\Http\Controllers;

use App\Models\Production;
use Illuminate\Http\Request;

class ProductionController extends Controller
{
	public function index()
	{
		$products = Production::all();
		return view('produksi.index', compact('products'));
	}

	public function create()
	{
		return view('produksi.create');
	}
}
