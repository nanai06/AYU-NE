<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DaurUlang;
use Illuminate\Support\Facades\Auth;

class RecyclingController extends Controller
{
    public function index(Request $request)
    {
        if ($request->lokasi) {
            session(['lokasi_pilih' => $request->lokasi]);
        }

        return view('scan-kemasan');
    }

    public function uploadFoto(Request $request)
    {
        if ($request->lokasi) {
            session(['lokasi_pilih' => $request->lokasi]);
        }

        $request->validate([
            'foto_kemasan'   => 'required|array|min:1',
            'foto_kemasan.*' => 'image|mimes:jpg,jpeg,png|max:5048',
        ]);

        $paths = [];

        foreach ($request->file('foto_kemasan') as $foto) {
            $paths[] = $foto->store('kemasan', 'public');
        }

        // penting: simpan 1 foto pertama aja
        session(['foto_kemasan' => $paths[0]]);

        return redirect()->route('scan-qr');
    }

    public function scanQR()
    {
        return view('scan-qr');
    }

    public function prosesQR(Request $request)
    {
        $kode = $request->qr_code;
        $lokasiDipilih = session('lokasi_pilih');

        if ($kode == 'AYUNE-001') {
            $lokasiQR = 'A';
        } elseif ($kode == 'AYUNE-002') {
            $lokasiQR = 'B';
        } else {
            return back()->withErrors(['qr_code' => 'QR tidak valid']);
        }

        if (!$lokasiDipilih) {
            return back()->withErrors(['qr_code' => 'Lokasi belum dipilih']);
        }

        if ($lokasiDipilih != $lokasiQR) {
            return back()->withErrors(['qr_code' => 'QR tidak sesuai lokasi']);
        }

        // 🔥 FIX: simpan 10 biar sinkron
        DaurUlang::create([
            'user_id' => Auth::id(),
            'foto_kemasan' => session('foto_kemasan'),
            'qr_code' => $kode,
            'koin' => 10
        ]);

        return redirect()->route('daur-ulang-sukses', [
            'lokasi' => $lokasiQR
        ]);
    }

    public function sukses(Request $request)
    {
        return view('daur-ulang-sukses', [
            'lokasi' => $request->lokasi,
            'koin' => 10
        ]);
    }
}