<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class KendaraanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('kendaraans')->insert([
            [
                'nama' => 'Avanza',
                'slug' => 'avanza',
                'harga' => 200000,
                'brand_id' => 1,
                'category_id' => 1,
                'type_id' => 1,
                'warna' => 'Hitam',
                'tahun' => '2020',
                'deskripsi' => 'Mobil Avanza merupakan salah satu mobil terbaru dari Toyota. Mobil ini memiliki mesin 2.0 turbo dengan teknologi VVT dan mesin yang memiliki torsi yang lebih besar dari mobil lainnya. ',
            ],
            [
                'nama' => 'Fortuner',
                'slug' => 'fortuner',
                'harga' => 300000,
                'brand_id' => 1,
                'category_id' => 1,
                'type_id' => 1,
                'warna' => 'Putih',
                'tahun' => '2020',
                'deskripsi' => 'Fortuner merupakan mobil terbaru dari Toyota. Mobil ini memiliki mesin 2.0 turbo dengan teknologi VVT dan mesin yang memiliki torsi yang lebih besar dari mobil lainnya. ',
            ],
            [
                'nama' => 'Yaris',
                'slug' => 'yaris',
                'harga' => 100000,
                'brand_id' => 1,
                'category_id' => 1,
                'type_id' => 1,
                'warna' => 'Citrus',
                'tahun' => '2020',
                'deskripsi' => 'Yaris merupakan mobil terbaru dari Toyota. Mobil ini memiliki mesin 2.0 turbo dengan teknologi VVT dan mesin yang memiliki torsi yang lebih besar dari mobil lainnya. ',
            ],
            [
                'nama' => 'Inova',
                'slug' => 'inova',
                'harga' => 100000,
                'brand_id' => 1,
                'category_id' => 1,
                'type_id' => 1,
                'warna' => 'Putih',
                'tahun' => '2020',
                'deskripsi' => 'Inova merupakan mobil terbaru dari Toyota. Mobil ini memiliki mesin 2.0 turbo dengan teknologi VVT dan mesin yang memiliki torsi yang lebih besar dari mobil lainnya. ',
            ],
            [
                'nama' => 'Vios',
                'slug' => 'vios',
                'harga' => 100000,
                'brand_id' => 1,
                'category_id' => 1,
                'type_id' => 1,
                'warna' => 'Merah',
                'tahun' => '2020',
                'deskripsi' => 'Vios merupakan mobil terbaru dari Toyota. Mobil ini memiliki mesin 2.0 turbo dengan teknologi VVT dan mesin yang memiliki torsi yang lebih besar dari mobil lainnya. ',
            ],
            [
                'nama' => 'Rush',
                'slug' => 'rush',
                'harga' => 100000,
                'brand_id' => 1,
                'category_id' => 1,
                'type_id' => 1,
                'warna' => 'Putih',
                'tahun' => '2020',
                'deskripsi' => 'Rush merupakan mobil terbaru dari Toyota. Mobil ini memiliki mesin 2.0 turbo dengan teknologi VVT dan mesin yang memiliki torsi yang lebih besar dari mobil lainnya. ',
            ],
            [
                'nama' => 'calya',
                'slug' => 'calya',
                'harga' => 100000,
                'brand_id' => 1,
                'category_id' => 1,
                'type_id' => 2,
                'warna' => 'Putih',
                'tahun' => '2020',
                'deskripsi' => 'calya merupakan mobil terbaru dari Toyota. Mobil ini memiliki mesin 2.0 turbo dengan teknologi VVT dan mesin yang memiliki torsi yang lebih besar dari mobil lainnya. ',
            ],
            [
                'nama' => 'Terios',
                'slug' => 'terios',
                'harga' => 100000,
                'brand_id' => 6,
                'category_id' => 1,
                'type_id' => 1,
                'warna' => 'Putih',
                'tahun' => '2020',
                'deskripsi' => 'Terios merupakan mobil terbaru dari Toyota. Mobil ini memiliki mesin 2.0 turbo dengan teknologi VVT dan mesin yang memiliki torsi yang lebih besar dari mobil lainnya. ',
            ],
            [
                'nama' => 'Sigra',
                'slug' => 'sigra',
                'harga' => 100000,
                'brand_id' => 6,
                'category_id' => 1,
                'type_id' => 2,
                'warna' => 'Merah',
                'tahun' => '2020',
                'deskripsi' => 'Sigra merupakan mobil terbaru dari Toyota. Mobil ini memiliki mesin 2.0 turbo dengan teknologi VVT dan mesin yang memiliki torsi yang lebih besar dari mobil lainnya. ',
            ],
            [
                'nama' => 'Granmax',
                'slug' => 'granmax',
                'harga' => 100000,
                'brand_id' => 6,
                'category_id' => 1,
                'type_id' => 1,
                'warna' => 'Putih',
                'tahun' => '2020',
                'deskripsi' => 'Granmax merupakan mobil terbaru dari Toyota. Mobil ini memiliki mesin 2.0 turbo dengan teknologi VVT dan mesin yang memiliki torsi yang lebih besar dari mobil lainnya. ',
            ],
            [
                'nama' => 'APV',
                'slug' => 'apv',
                'harga' => 100000,
                'brand_id' => 3,
                'category_id' => 1,
                'type_id' => 1,
                'warna' => 'Putih',
                'tahun' => '2020',
                'deskripsi' => 'APV merupakan mobil terbaru dari Toyota. Mobil ini memiliki mesin 2.0 turbo dengan teknologi VVT dan mesin yang memiliki torsi yang lebih besar dari mobil lainnya. ',
            ],
            [
                'nama' => 'Ignis',
                'slug' => 'ignis',
                'harga' => 100000,
                'brand_id' => 3,
                'category_id' => 1,
                'type_id' => 1,
                'warna' => 'Orange',
                'tahun' => '2020',
                'deskripsi' => 'Ignis merupakan mobil terbaru dari Toyota. Mobil ini memiliki mesin 2.0 turbo dengan teknologi VVT dan mesin yang memiliki torsi yang lebih besar dari mobil lainnya. ',
            ],
            [
                'nama' => 'Xl-7',
                'slug' => 'xl-7',
                'harga' => 100000,
                'brand_id' => 3,
                'category_id' => 1,
                'type_id' => 1,
                'warna' => 'Orange',
                'tahun' => '2020',
                'deskripsi' => 'Xl-7 merupakan mobil terbaru dari Toyota. Mobil ini memiliki mesin 2.0 turbo dengan teknologi VVT dan mesin yang memiliki torsi yang lebih besar dari mobil lainnya. ',
            ],
            [
                'nama' => 'Ertiga',
                'slug' => 'ertiga',
                'harga' => 100000,
                'brand_id' => 3,
                'category_id' => 1,
                'type_id' => 1,
                'warna' => 'Putih',
                'tahun' => '2020',
                'deskripsi' => 'Ertiga merupakan mobil terbaru dari Toyota. Mobil ini memiliki mesin 2.0 turbo dengan teknologi VVT dan mesin yang memiliki torsi yang lebih besar dari mobil lainnya. ',
            ],
            [
                'nama' => 'Terra',
                'slug' => 'terra',
                'harga' => 100000,
                'brand_id' => 5,
                'category_id' => 1,
                'type_id' => 1,
                'warna' => 'Maroon',
                'tahun' => '2020',
                'deskripsi' => 'Terra merupakan mobil terbaru dari Toyota. Mobil ini memiliki mesin 2.0 turbo dengan teknologi VVT dan mesin yang memiliki torsi yang lebih besar dari mobil lainnya. ',
            ],
            [
                'nama' => 'March',
                'slug' => 'march',
                'harga' => 100000,
                'brand_id' => 5,
                'category_id' => 1,
                'type_id' => 1,
                'warna' => 'Merah',
                'tahun' => '2020',
                'deskripsi' => 'March merupakan mobil terbaru dari Toyota. Mobil ini memiliki mesin 2.0 turbo dengan teknologi VVT dan mesin yang memiliki torsi yang lebih besar dari mobil lainnya. ',
            ],
            [
                'nama' => 'Juke',
                'slug' => 'juke',
                'harga' => 100000,
                'brand_id' => 5,
                'category_id' => 1,
                'type_id' => 1,
                'warna' => 'Biru',
                'tahun' => '2020',
                'deskripsi' => 'Juke merupakan mobil terbaru dari Toyota. Mobil ini memiliki mesin 2.0 turbo dengan teknologi VVT dan mesin yang memiliki torsi yang lebih besar dari mobil lainnya. ',
            ],
            [
                'nama' => 'Xtrail',
                'slug' => 'xtrail',
                'harga' => 100000,
                'brand_id' => 5,
                'category_id' => 1,
                'type_id' => 1,
                'warna' => 'Putih',
                'tahun' => '2020',
                'deskripsi' => 'Xtrail merupakan mobil terbaru dari Toyota. Mobil ini memiliki mesin 2.0 turbo dengan teknologi VVT dan mesin yang memiliki torsi yang lebih besar dari mobil lainnya. ',
            ],
            [
                'nama' => 'Pajero Sport',
                'slug' => 'pajero-sport',
                'harga' => 100000,
                'brand_id' => 4,
                'category_id' => 1,
                'type_id' => 1,
                'warna' => 'Abu-abu',
                'tahun' => '2020',
                'deskripsi' => 'Pajero Sport merupakan mobil terbaru dari Toyota. Mobil ini memiliki mesin 2.0 turbo dengan teknologi VVT dan mesin yang memiliki torsi yang lebih besar dari mobil lainnya. ',
            ],
            [
                'nama' => 'Xpander',
                'slug' => 'xpander',
                'harga' => 100000,
                'brand_id' => 4,
                'category_id' => 1,
                'type_id' => 1,
                'warna' => 'Hitam',
                'tahun' => '2020',
                'deskripsi' => 'Xpander merupakan mobil terbaru dari Toyota. Mobil ini memiliki mesin 2.0 turbo dengan teknologi VVT dan mesin yang memiliki torsi yang lebih besar dari mobil lainnya. ',
            ],
            [
                'nama' => 'Brio',
                'slug' => 'brio',
                'harga' => 100000,
                'brand_id' => 2,
                'category_id' => 1,
                'type_id' => 1,
                'warna' => 'Kuning',
                'tahun' => '2020',
                'deskripsi' => 'Brio merupakan mobil terbaru dari Toyota. Mobil ini memiliki mesin 2.0 turbo dengan teknologi VVT dan mesin yang memiliki torsi yang lebih besar dari mobil lainnya. ',
            ],
            [
                'nama' => 'CR-V',
                'slug' => 'cr-v',
                'harga' => 100000,
                'brand_id' => 2,
                'category_id' => 1,
                'type_id' => 1,
                'warna' => 'Putih',
                'tahun' => '2020',
                'deskripsi' => 'CR-V merupakan mobil terbaru dari Toyota. Mobil ini memiliki mesin 2.0 turbo dengan teknologi VVT dan mesin yang memiliki torsi yang lebih besar dari mobil lainnya. ',
            ],
            [
                'nama' => 'Mobilio',
                'slug' => 'mobilio',
                'harga' => 100000,
                'brand_id' => 2,
                'category_id' => 1,
                'type_id' => 1,
                'warna' => 'Abu-abu',
                'tahun' => '2020',
                'deskripsi' => 'Mobilio merupakan mobil terbaru dari Toyota. Mobil ini memiliki mesin 2.0 turbo dengan teknologi VVT dan mesin yang memiliki torsi yang lebih besar dari mobil lainnya. ',
            ],
            [
                'nama' => 'Jazz',
                'slug' => 'jazz',
                'harga' => 100000,
                'brand_id' => 2,
                'category_id' => 1,
                'type_id' => 1,
                'warna' => 'Hitam',
                'tahun' => '2020',
                'deskripsi' => 'Jazz merupakan mobil terbaru dari Toyota. Mobil ini memiliki mesin 2.0 turbo dengan teknologi VVT dan mesin yang memiliki torsi yang lebih besar dari mobil lainnya. ',
            ],
            [
                'nama' => 'Mazda 3',
                'slug' => 'mazda-3',
                'harga' => 100000,
                'brand_id' => 7,
                'category_id' => 1,
                'type_id' => 1,
                'warna' => 'Putih',
                'tahun' => '2020',
                'deskripsi' => 'Mazda 3 merupakan mobil terbaru dari Mazda. Mobil ini memiliki mesin 2.0 turbo dengan teknologi VVT dan mesin yang memiliki torsi yang lebih besar dari mobil lainnya. ',
            ],
            [
                'nama' => 'Mazda 2',
                'slug' => 'mazda-2',
                'harga' => 100000,
                'brand_id' => 7,
                'category_id' => 1,
                'type_id' => 1,
                'warna' => 'Merah',
                'tahun' => '2020',
                'deskripsi' => 'Mazda 2 merupakan mobil terbaru dari Mazda. Mobil ini memiliki mesin 2.0 turbo dengan teknologi VVT dan mesin yang memiliki torsi yang lebih besar dari mobil lainnya. ',
            ],
            [
                'nama' => 'Mazda CX-5',
                'slug' => 'mazda-cx-5',
                'harga' => 100000,
                'brand_id' => 7,
                'category_id' => 1,
                'type_id' => 1,
                'warna' => 'Merah',
                'tahun' => '2020',
                'deskripsi' => 'Mazda CX-5 merupakan mobil terbaru dari Mazda. Mobil ini memiliki mesin 2.0 turbo dengan teknologi VVT dan mesin yang memiliki torsi yang lebih besar dari mobil lainnya. ',
            ],
            [
                'nama' => 'Vixion',
                'slug' => 'vixion',
                'harga' => 100000,
                'brand_id' => 9,
                'category_id' => 2,
                'type_id' => 1,
                'warna' => 'Hitam',
                'tahun' => '2020',
                'deskripsi' => 'Mazda CX-9 merupakan mobil terbaru dari Mazda. Mobil ini memiliki mesin 2.0 turbo dengan teknologi VVT dan mesin yang memiliki torsi yang lebih besar dari mobil lainnya. ',
            ],
            [
                'nama' => 'Beat',
                'slug' => 'beat',
                'harga' => 100000,
                'brand_id' => 2,
                'category_id' => 2,
                'type_id' => 2,
                'warna' => 'Hitam',
                'tahun' => '2020',
                'deskripsi' => 'Beat merupakan mobil terbaru dari Honda. Mobil ini memiliki mesin 2.0 turbo dengan teknologi VVT dan mesin yang memiliki torsi yang lebih besar dari mobil lainnya. ',
            ],
            [
                'nama' => 'Cb150R',
                'slug' => 'cb150r',
                'harga' => 100000,
                'brand_id' => 2,
                'category_id' => 2,
                'type_id' => 1,
                'warna' => 'Hitam',
                'tahun' => '2020',
                'deskripsi' => 'Cb150R merupakan mobil terbaru dari Honda. Mobil ini memiliki mesin 2.0 turbo dengan teknologi VVT dan mesin yang memiliki torsi yang lebih besar dari mobil lainnya. ',
            ],
            [
                'nama' => 'CBR 150R',
                'slug' => 'cbr-150r',
                'harga' => 100000,
                'brand_id' => 2,
                'category_id' => 2,
                'type_id' => 1,
                'warna' => 'Merah',
                'tahun' => '2020',
                'deskripsi' => 'CBR 150R merupakan mobil terbaru dari Honda. Mobil ini memiliki mesin 2.0 turbo dengan teknologi VVT dan mesin yang memiliki torsi yang lebih besar dari mobil lainnya. ',
            ],
            [
                'nama' => 'CRF',
                'slug' => 'crf',
                'harga' => 100000,
                'brand_id' => 2,
                'category_id' => 2,
                'type_id' => 1,
                'warna' => 'Merah',
                'tahun' => '2020',
                'deskripsi' => 'CRF merupakan mobil terbaru dari Honda. Mobil ini memiliki mesin 2.0 turbo dengan teknologi VVT dan mesin yang memiliki torsi yang lebih besar dari mobil lainnya. ',
            ],
            [
                'nama' => 'Supra x 125',
                'slug' => 'supra-x-125',
                'harga' => 100000,
                'brand_id' => 2,
                'category_id' => 2,
                'type_id' => 1,
                'warna' => 'Hitam',
                'tahun' => '2020',
                'deskripsi' => 'Supra x 125 merupakan mobil terbaru dari Honda. Mobil ini memiliki mesin 2.0 turbo dengan teknologi VVT dan mesin yang memiliki torsi yang lebih besar dari mobil lainnya. ',
            ],
            [
                'nama' => 'PCX',
                'slug' => 'pcx',
                'harga' => 100000,
                'brand_id' => 2,
                'category_id' => 2,
                'type_id' => 2,
                'warna' => 'Putih',
                'tahun' => '2020',
                'deskripsi' => 'PCX merupakan mobil terbaru dari Honda. Mobil ini memiliki mesin 2.0 turbo dengan teknologi VVT dan mesin yang memiliki torsi yang lebih besar dari mobil lainnya. ',
            ],
            [
                'nama' => 'Vario 150',
                'slug' => 'vario-150',
                'harga' => 100000,
                'brand_id' => 2,
                'category_id' => 2,
                'type_id' => 2,
                'warna' => 'Hitam',
                'tahun' => '2020',
                'deskripsi' => 'Vario 150 merupakan mobil terbaru dari Honda. Mobil ini memiliki mesin 2.0 turbo dengan teknologi VVT dan mesin yang memiliki torsi yang lebih besar dari mobil lainnya. ',
            ],
            [
                'nama' => 'Scoopy',
                'slug' => 'scoopy',
                'harga' => 100000,
                'brand_id' => 2,
                'category_id' => 2,
                'type_id' => 2,
                'warna' => 'Biru',
                'tahun' => '2020',
                'deskripsi' => 'Scoopy merupakan mobil terbaru dari Honda. Mobil ini memiliki mesin 2.0 turbo dengan teknologi VVT dan mesin yang memiliki torsi yang lebih besar dari mobil lainnya. ',
            ],
            [
                'nama' => 'Aerox',
                'slug' => 'aerox',
                'harga' => 100000,
                'brand_id' => 9,
                'category_id' => 2,
                'type_id' => 2,
                'warna' => 'Hitam',
                'tahun' => '2020',
                'deskripsi' => 'Aerox merupakan mobil terbaru dari Honda. Mobil ini memiliki mesin 2.0 turbo dengan teknologi VVT dan mesin yang memiliki torsi yang lebih besar dari mobil lainnya. ',
            ],
            [
                'nama' => 'R-15',
                'slug' => 'r-15',
                'harga' => 100000,
                'brand_id' => 9,
                'category_id' => 2,
                'type_id' => 1,
                'warna' => 'Biru',
                'tahun' => '2020',
                'deskripsi' => 'R-15 merupakan mobil terbaru dari Honda. Mobil ini memiliki mesin 2.0 turbo dengan teknologi VVT dan mesin yang memiliki torsi yang lebih besar dari mobil lainnya. ',
            ],
            [
                'nama' => 'WR 150',
                'slug' => 'wr-150',
                'harga' => 100000,
                'brand_id' => 9,
                'category_id' => 2,
                'type_id' => 1,
                'warna' => 'Biru',
                'tahun' => '2020',
                'deskripsi' => 'WR 150 merupakan mobil terbaru dari Honda. Mobil ini memiliki mesin 2.0 turbo dengan teknologi VVT dan mesin yang memiliki torsi yang lebih besar dari mobil lainnya. ',
            ],
            [
                'nama' => 'Nmax',
                'slug' => 'nmax',
                'harga' => 100000,
                'brand_id' => 9,
                'category_id' => 2,
                'type_id' => 2,
                'warna' => 'Abu-abu',
                'tahun' => '2020',
                'deskripsi' => 'nmax merupakan mobil terbaru dari Honda. Mobil ini memiliki mesin 2.0 turbo dengan teknologi VVT dan mesin yang memiliki torsi yang lebih besar dari mobil lainnya. ',
            ],
            [
                'nama' => 'Ninja 250',
                'slug' => 'ninja-250',
                'harga' => 100000,
                'brand_id' => 8,
                'category_id' => 2,
                'type_id' => 1,
                'warna' => 'Merah',
                'tahun' => '2020',
                'deskripsi' => 'Ninja 250 merupakan mobil terbaru dari Honda. Mobil ini memiliki mesin 2.0 turbo dengan teknologi VVT dan mesin yang memiliki torsi yang lebih besar dari mobil lainnya. ',
            ],
            [
                'nama' => 'KLX',
                'slug' => 'klx',
                'harga' => 100000,
                'brand_id' => 8,
                'category_id' => 2,
                'type_id' => 1,
                'warna' => 'Hijau',
                'tahun' => '2020',
                'deskripsi' => 'KLX merupakan mobil terbaru dari Honda. Mobil ini memiliki mesin 2.0 turbo dengan teknologi VVT dan mesin yang memiliki torsi yang lebih besar dari mobil lainnya. &&&&',
            ]
        ]);
    }
}
