<?php

namespace App\Http\Controllers;

namespace App\Http\Controllers;


use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\Production;
use Illuminate\Http\Request;

class ProductionController extends Controller
{
	public function index()
	{
		$product = Production::all();
		return view('produksi.index', compact('products'));
	}

	public function create()
	{
		return view('produksi.create');
	}
}
