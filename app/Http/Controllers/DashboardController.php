<?php

// app/Http/Controllers/DashboardController.php

namespace App\Http\Controllers;

// use App\Models\Kategori;
use App\Models\Produk;
use App\Models\Transaksi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class DashboardController extends Controller
{
    public function index()
    {
        $user = Auth::user();

        // Mengambil nilai ID pengguna
        // $userId = $user->name;
        
        // // Dump nilai ID untuk debugging
        // var_dump($userId);die();
        $totalProduk = Produk::count();
        $totalTransaksi = Transaksi::count();
        return view('dashboard.index', compact('totalProduk','totalTransaksi'));
    }
    // public function __construct()
    // {
    // $this->middleware('auth');
    // }

}