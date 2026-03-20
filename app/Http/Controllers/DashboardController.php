<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DaurUlang;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index()
    {
        $riwayat = DaurUlang::where('user_id', Auth::id())
            ->latest()
            ->take(5)
            ->get();

        return view('dashboard', compact('riwayat'));
    }
}