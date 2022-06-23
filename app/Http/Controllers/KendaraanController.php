<?php

namespace App\Http\Controllers;

use App\Models\Kendaraan;
use App\Http\Requests\StoreKendaraanRequest;
use App\Http\Requests\UpdateKendaraanRequest;
use App\Models\Brand;
use App\Models\Category;
use App\Models\Type;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class KendaraanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.kendaraan.index', [
            'kendaraans' => Kendaraan::all(),
            'brands' => Brand::all(),
            'categories' => Category::all(),
            'types' => Type::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.kendaraan.create', [
            'brands' => Brand::all(),
            'categories' => Category::all(),
            'types' => Type::all(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreKendaraanRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreKendaraanRequest $request)
    {
        $validatedata = $request->validate([
            'nama' => 'required|string|max:255',
            'brand_id' => 'required',
            'category_id' => 'required',
            'type_id' => 'required',
            'image' => 'image|file',
            'warna' => 'required',
            'tahun' => 'required',
            'harga' => 'required',
            'deskripsi' => 'required',
        ]);



        $validatedata['slug'] = Str::slug($validatedata['nama']);
        if ($request->file('image')) {
            $validatedata['image'] = $request->file('image')->store('kendaraan', 'public');
        }
        Kendaraan::create($validatedata);

        return redirect('/dashboard/kendaraan')->with('toast_success', 'Kendaraan berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Kendaraan  $kendaraan
     * @return \Illuminate\Http\Response
     */
    public function show(Kendaraan $kendaraan)
    {
        return view('admin.kendaraan.show', [
            'kendaraan' => $kendaraan,
            'brand' => Brand::all(),
            'category' => Category::all(),
            'type' => Type::all(),
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Kendaraan  $kendaraan
     * @return \Illuminate\Http\Response
     */
    public function edit(Kendaraan $kendaraan)
    {
        return view('admin.kendaraan.edit', [
            'kendaraan' => $kendaraan,
            'brands' => Brand::all(),
            'categories' => Category::all(),
            'types' => Type::all(),
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateKendaraanRequest  $request
     * @param  \App\Models\Kendaraan  $kendaraan
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateKendaraanRequest $request, Kendaraan $kendaraan)
    {
        $rules = [
            'nama' => 'required|string|max:255',
            'brand_id' => 'required',
            'category_id' => 'required',
            'type_id' => 'required',
            'image' => 'image|file',
            'warna' => 'required',
            'tahun' => 'required',
            'harga' => 'required',
            'deskripsi' => 'required',
        ];

        $validatedata = $request->validate($rules);

        if ($request->file('image')) {
            if ($request->oldImage) {
                Storage::delete($request->oldImage);
            }
            $validatedata['image'] = $request->file('image')->store('kendaraan', 'public');
        }

        $validatedata['slug'] = Str::slug($validatedata['nama']);

        Kendaraan::where('id', $kendaraan->id)->update($validatedata);


        return redirect('/dashboard/kendaraan')->with('toast_success', 'Kendaraan berhasil di edit!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Kendaraan  $kendaraan
     * @return \Illuminate\Http\Response
     */
    public function destroy(Kendaraan $kendaraan)
    {
        Kendaraan::destroy($kendaraan->id);
        return redirect('/dashboard/kendaraan')->with('toast_success', 'Kendaraan berhasil di hapus!');
    }
}
