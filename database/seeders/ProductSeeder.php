<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $products = [
            [
                'nama' => 'Cola',
                'harga' => 5000,
                'jenis' => 'drink',
                'stok' => 10,
                'image' => "https://images.unsplash.com/photo-1562952546-12992a813a51?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8Mnx8Y29sYXxlbnwwfHwwfHx8MA%3D%3D&auto=format&fit=crop&w=500&q=60"
            ],
            [
                'nama' => 'Sari Roti Coklat',
                'harga' => 8000,
                'jenis' => 'food',
                'stok' => 50,
                'image' => "https://www.sariroti.com/storage/app/media/03-product/rotitawar/roti_isi_coklat.jpg",
            ],
            [
                'nama' => 'Shampo',
                'harga' => 30000,
                'jenis' => 'body care',
                'stok' => 12,
                'image' => "https://images.ctfassets.net/tvk6kqbaexbr/3mAFhhYwj1Bss03akw0uab/6c1f6a11467c1fd4b5e030d453ea8e7c/04902430429368_C1N1_150ml_Front_White.jpg",
            ],
            [
                'nama' => 'Stella',
                'harga' => 1800,
                'jenis' => 'home care',
                'stok' => 7,
                'image' => "https://s3-ap-southeast-1.amazonaws.com/data-pesanan/images/397/products/square/16814430187366_stela_all_in_one_orange_70g.png",
            ],
            [
                'nama' => 'Crayon',
                'harga' => 25000,
                'jenis' => 'stationary',
                'stok' => 4,
                'image' => "https://faber-castell.co.id/cfind/source/images/product/pl/700x700-pl/120057.jpg",
            ],
            [
                'nama' => 'Rinso',
                'harga' => 35000,
                'jenis' => 'laundry',
                'stok' => 20,
                'image' => "https://www.rinso.com/images/h0nadbhvm6m4/7iS8cFl3h6Z84ZbyTKQbxn/f064a1c4d4fd2197d365c3c6a975eb7e/UG93ZGVyX3JveWFsX2dvbGQucG5n/1080w-1080h/rinso-molto-deterjen-bubuk-royal-gold-packshot.jpg",
            ],
        ];

        foreach ($products as $product) {
            DB::table('products')->insert($product);
        }
    }


}
