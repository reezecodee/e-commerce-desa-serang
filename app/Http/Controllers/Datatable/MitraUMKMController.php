<?php

namespace App\Http\Controllers\Datatable;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class MitraUMKMController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        $mitraUMKM = collect([
            ['id' => 1, 'mitra' => 'Budi', 'toko' => 'Toko Sari', 'alamat' => 'Kp. Cibuntu, Desa Serang', 'produk' => 1],
            ['id' => 2, 'mitra' => 'Sari', 'toko' => 'Kopi Nusantara', 'alamat' => 'Kp. Ciawi, Desa Serang', 'produk' => 3],
            ['id' => 3, 'mitra' => 'Joko', 'toko' => 'UMKM Jaya', 'alamat' => 'Kp. Cileutik, Desa Serang', 'produk' => 2],
            ['id' => 4, 'mitra' => 'Dewi', 'toko' => 'Craft Lokal', 'alamat' => 'Kp. Pasir, Desa Serang', 'produk' => 4],
            ['id' => 5, 'mitra' => 'Rina', 'toko' => 'Snack Sehat', 'alamat' => 'Kp. Sukawangi, Desa Serang', 'produk' => 1],
            ['id' => 6, 'mitra' => 'Suparman', 'toko' => 'Toko Suparman', 'alamat' => 'Kp. Cibuntu, Desa Serang', 'produk' => 3],
            ['id' => 7, 'mitra' => 'Mutia Sarni', 'toko' => 'Kain Perca Sejahtera', 'alamat' => 'Kp. Ciawi, Desa Serang', 'produk' => 1],
            ['id' => 8, 'mitra' => 'Tono', 'toko' => 'Sejahtera Jaya', 'alamat' => 'Kp. Cileutik, Desa Serang', 'produk' => 2],
            ['id' => 9, 'mitra' => 'Zaskia', 'toko' => 'Zaskia Kopi', 'alamat' => 'Kp. Pasir, Desa Serang', 'produk' => 3],
            ['id' => 10, 'mitra' => 'Karina', 'toko' => 'Citra Kain', 'alamat' => 'Kp. Sukawangi, Desa Serang', 'produk' => 10],
        ]);


        return DataTables::of($mitraUMKM)
            ->addIndexColumn()
            ->addColumn('action', function ($row) {
                return '
                <div class="flex space-x-2">
                <a href="#" class="inline-flex items-center px-3 py-1.5 bg-blue-600 text-white text-sm font-medium rounded hover:bg-blue-700 transition">
                    Edit
                </a>
                <button type="button" class="inline-flex items-center px-3 py-1.5 bg-red-600 text-white text-sm font-medium rounded hover:bg-red-700 transition">
                    Delete
                </button>
            </div>
            ';
            })
            ->rawColumns(['action'])
            ->make(true);
    }
}
