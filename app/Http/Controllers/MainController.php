<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MainController extends Controller
{
    public function shop(){
        $result = DB::table("products")->get();
        return view('shop',['products' => $result]);
    }

    public function admin()
    {
        $products = DB::table("products")->get();
        return view('admin', ['products' => $products]);
    }

    public function input(){
        return view('input');
    }

    public function search(Request $request){
        $search = $request->search;
        $result = DB::table("products")
        ->where('nama','like',"%".$search."%")->paginate();
        return view('admin',['products' => $result]);
    }

    public function insert(Request $request){
    $nama = $request->nama;
    $harga = $request->harga;
    $jenis = $request->jenis;
    $stok = $request->stok;
    $image = $request->image;

    DB::table("products")->insert([
        'nama' => $nama,
        'harga' => $harga,
        'jenis' => $jenis,
        'stok' => $stok,
        'created_at' => now(),
        'updated_at' => now(),
        'image' => $image,
    ]);

    return redirect('/admin')->with('success', 'Sayuran berhasil ditambahkan!');
}

public function update(Request $request, $id)
{
    $product = DB::table('products')->where('id_produk', $id)->first();

    if (!$product) {
        abort(404);
    }

    $request->validate([
        'nama' => 'required',
        'harga' => 'required|numeric',
        'jenis' => 'required',
        'stok' => 'required|numeric',
    ]);

    DB::table('products')
        ->where('id_produk', $id)
        ->update([
            'nama' => $request->nama,
            'harga' => $request->harga,
            'jenis' => $request->jenis,
            'stok' => $request->stok,
        ]);

    return redirect('/admin')->with('success', 'Data produk berhasil diperbarui');
}

public function delete($id)
{
    DB::table('products')->where('id_produk', $id)->delete();

    return redirect('/admin')->with('success', 'Data produk berhasil dihapus');
}


}
