<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use App\Models\Matakuliah;
use Illuminate\Http\Request;

class DataController extends Controller {
    // Operasi CRUD untuk Mahasiswa

    public function mahasiswaIndex() {
        $mahasiswa = Mahasiswa::all();
        return view('mahasiswa', ['mahasiswa' => $mahasiswa]);
    }

    public function mahasiswaStore(Request $request) {
        Mahasiswa::create([
            'nama' => $request->nama,
            'nim' => $request->nim,
            'asal' => $request->asal,
        ]);

        return redirect()->route('mahasiswa.index');
    }

    public function mahasiswaEdit($id) {
        $mahasiswa = Mahasiswa::findOrFail($id);
        return view('edit-mahasiswa', compact('mahasiswa'));
    }

    public function mahasiswaUpdate(Request $request, $id) {
        $mahasiswa = Mahasiswa::findOrFail($id);
        
        $mahasiswa->nama = $request->nama;
        $mahasiswa->nim = $request->nim;
        $mahasiswa->asal = $request->asal;
        
        $mahasiswa->save();
        
        return redirect()->route('mahasiswa.index');
    }

    public function mahasiswaDestroy($id) {
        $mahasiswa = Mahasiswa::findOrFail($id);
        $mahasiswa->delete();

        return redirect()->route('mahasiswa.index');
    }

    // Operasi CRUD untuk Matakuliah

    public function matakuliahIndex() {
        $matakuliah = Matakuliah::all();
        return view('matakuliah', ['matakuliah' => $matakuliah]);
    }

    public function matakuliahStore(Request $request) {
        Matakuliah::create([
            'nama_matkul' => $request->nama_matkul,
            'sks' => $request->sks,
            'ruang' => $request->ruang,
        ]);

        return redirect()->route('matakuliah.index');
    }

    public function matakuliahEdit($id) {
        $matakuliah = Matakuliah::findOrFail($id);
        return view('edit-matakuliah', compact('matakuliah'));
    }

    public function matakuliahUpdate(Request $request, $id) {
        $matakuliah = Matakuliah::findOrFail($id);
        
        $matakuliah->nama_matkul = $request->nama_matkul;
        $matakuliah->sks = $request->sks;
        $matakuliah->ruang = $request->ruang;
        
        $matakuliah->save();
        
        return redirect()->route('matakuliah.index');
    }

    public function matakuliahDestroy($id) {
        $matakuliah = Matakuliah::findOrFail($id);
        $matakuliah->delete();

        return redirect()->route('matakuliah.index');
    }
}

