<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produk;

class ProdukController extends Controller
{
    public function index(){
        $produk = Produk::all();
        return view('produk.index', ['datas' => $produk]);

    }

    public function create()
    {
        $produk = Produk::all();
        return view('produk.create', ['datas' => $produk]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'gambar' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);
    
        if ($request->hasFile('gambar')) {
            $gambar = $request->file('gambar');
            $nama_gambar = time() . '_' . $gambar->getClientOriginalName();
            $lokasi = public_path('uploads');
            $gambar->move($lokasi, $nama_gambar);
            echo "Gambar berhasil diunggah.";
            $request['gambar'] = $nama_gambar;
        } else {
            echo "Gagal mengunggah gambar.";
            return redirect()->back()->with('error', 'Gagal mengunggah gambar.');
        }
    
        $data_produk = [
            'nama'          => $request->nama,
            'gambar'        => $nama_gambar,
            'harga'    => $request->harga,
            'stok'          => $request->stok
        ];
        
        produk::create($data_produk);
        
    
        return redirect()->route('produk.index')->with('success', 'Produk berhasil disimpan');
    }
    
    
    
        // halaman edit
        public function edit($id){
           // Menggunakan first() untuk mendapatkan satu hasil
        $produk = Produk::where('id', $id)->first();
        
        
        
        // Memastikan produk ditemukan sebelum diteruskan ke view
        if(!$produk){
            return redirect()->route('produk.index')->with('error', 'Produk tidak ditemukan');
        }
    
        // Mengirimkan data produk dan kategori ke view
        return view('produk.edit', ['data' => $produk]);
        }
    
        //kirim data edit
        public function update(Request $request, Produk $data)
        {
    
            $request->validate([
                'gambar' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            ]);
            $nama_gambar='';
            if ($request->hasFile('gambar')) {
                $gambar = $request->file('gambar');
                $nama_gambar = time() . '_' . $gambar->getClientOriginalName();
                $lokasi = public_path('uploads');
                $gambar->move($lokasi, $nama_gambar);
                echo "Gambar berhasil diunggah.";
                $request['gambar'] = $nama_gambar;
            } 
            else {
                echo "Gagal mengunggah gambar.";
                return redirect()->back()->with('error', 'Gagal mengunggah gambar.');
            }
        
            $data_produk = [
                'nama'          => $request->nama,
                'gambar'        => $nama_gambar, 
                'harga'    => $request->harga,
                'stok'          => $request->stok
            ];
            // produk::create($data_produk)
            $produk = Produk::where("id", $request->id)->first();
            // var_dump($produk);die();
            $produk->update($data_produk);
    
        
    
            return redirect()->route('produk.index')->with('success', 'Update Berhasil');
        }
        
    
        //hapus data
        public function destroy($id)
        {
            Produk::findOrFail($id)->delete();
    
            return redirect()->route('produk.index')->with('success', 'Produk berhasil dihapus');
        }
    
    }



