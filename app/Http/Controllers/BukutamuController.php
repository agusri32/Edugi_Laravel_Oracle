<?php

namespace App\Http\Controllers;

use App\BukutamuModel;
use Illuminate\Http\Request;

class BukutamuController extends Controller
{
    public function index()
    {
        $result = BukutamuModel::all();
        return view('view_bukutamu.index', compact('result'));
    }

    public function create()
    {
        return view('view_bukutamu.create');
    }
	
	public function store(Request $request)
    {
        $validasi = $request->validate([
            'nama'   => 'required',
            'alamat' => 'required',
			'pesan'  => 'required'
        ]);
		
        $query = BukutamuModel::create($validasi);
   
        return redirect('/bukutamu')->with('success', 'Selamat data berhasil ditambah!');
    }
	
	public function show($id)
    {
		$result = BukutamuModel::find($id);
        return view('view_bukutamu.cetak', ['result' => $result]);
    }
	
	public function edit($id)
    {
		$result = BukutamuModel::find($id);
        return view('view_bukutamu.edit', compact('result'));
    }

    public function update(Request $request, $id)
    {
        $validasi = $request->validate([
            'nama'   => 'required',
			'alamat' => 'required',
            'pesan'  => 'required'
        ]);
		
        $query = BukutamuModel::whereId($id)->update($validasi);

        return redirect('/bukutamu')->with('success', 'Data berhasil di update');
    }

    public function destroy($id)
    {
        $query = BukutamuModel::findOrFail($id);
        $query->delete();

        return redirect('/bukutamu')->with('success', 'Data berhasil dihapus!');
    }
}
