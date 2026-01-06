<?php

namespace App\Http\Controllers;

use App\Models\Kategori;

use Illuminate\Http\Request;

class KategoriController extends Controller
{
    public function index()
    {
       $frame = Kategori::all();
        return view('kategori', compact('frame'));
    }
    public function store(Request $request)
    {
        //dd($request->all());
        $detail = request()->validate([
       'kategori'=>'required'
        ]);
        //dd($detail);
        kategori::create($detail);
        return redirect("/kategori");
    }
}
