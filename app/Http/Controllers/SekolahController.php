<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sekolah;

class SekolahController extends Controller

{
    public function index()

    {
        return view('sekolahs.index', [
            'sekolahs' => sekolah::get(),
        ]);
    }

    public function create()

    {
        return view('sekolahs.create');
    }

    public function store(Request $request)
    {
        $sekolah = new Sekolah();

        $sekolah->namasekolah = $request->namasekolah;
        $sekolah->alamat = $request->alamat;
        $sekolah->jurusan = $request->jurusan;
        $sekolah->jumlahguru = $request->jumlahguru;

        $sekolah->save();

        return redirect()->route('sekolahs.index');
    }

    public function edit($id)
    {
        $sekolah = Sekolah::find($id);

        return view('sekolahs.edit', [
            'sekolah' => $sekolah,
        ]);
    }

    public function update(Request $request, $id)
    {
        $sekolah = Sekolah::find($id);

        $sekolah->namasekolah = $request->namasekolah;
        $sekolah->alamat = $request->alamat;
        $sekolah->jurusan = $request->jurusan;
        $sekolah->jumlahguru = $request->jumlahguru;

        $sekolah->save();

        return redirect()->route('sekolahs.index');
    }

    public function destroy($id)
    {
        $sekolah = Sekolah::find($id);

        $sekolah->delete();

        return redirect()->route('sekolahs.index');

    }

}
