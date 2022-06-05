<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Category;
use App\Models\Kendaraan;
use Illuminate\Http\Request;

class HomepageController extends Controller
{
    public function home()
    {
        $kendaraan = Kendaraan::where('id', '2')->orWhere('id', '19')->orWhere('id', '22')->orWhere('id', '31')->orWhere('id', '32')->orWhere('id', '41')->get();
        return view('homepage.index', [
            'kendaraan' => $kendaraan,
            'title' => 'Home',
        ]);
    }

    public function show(Kendaraan $kendaraan)
    {
        return view('homepage.details', [
            'kendaraan' => $kendaraan,
            'title' => 'Details ' . $kendaraan->name,
        ]);
    }
    public function service()
    {
        return view('homepage.service', [
            'title' => 'Service',
        ]);
    }
    public function about()
    {
        return view('homepage.about', [
            'title' => 'About',
        ]);
    }
    public function project()
    {

        $kendaraan = Kendaraan::latest();
        // $brand = Brand::all();
        // // Mengambil kolom nama dalam table brand
        // // $brand_name = $brand->nama;
        // // dd($brand_name);
        // // $category = Category::all();

        if (request('search')) {
            $kendaraan->where('nama', 'like', '%' . request('search') . '%');
        }

        return view('homepage.project', [
            'kendaraan' => $kendaraan->paginate(6),
            'title' => 'Collection',
        ]);
    }
    public function team()
    {
        return view('homepage.team', [
            'title' => 'Team',
        ]);
    }
    public function contact()
    {
        return view('homepage.contact', [
            'title' => 'Contact',
        ]);
    }
    public function testimonial()
    {
        return view('homepage.testimonial', [
            'title' => 'Testimonial',
        ]);
    }
}
