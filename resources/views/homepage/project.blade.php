@extends('homepage.layouts.main')

@section('content')
<div class="container-xxl py-5 bg-primary hero-header mb-5">
    <div class="container my-5 py-5 px-lg-5">
        <div class="row g-5 py-5">
            <div class="col-12 text-center">
                <h1 class="text-white animated zoomIn">Kendaran</h1>
                <hr class="bg-white mx-auto mt-0" style="width: 90px;">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center">
                        <li class="breadcrumb-item"><a class="text-white" href="#">Home</a></li>
                        <li class="breadcrumb-item"><a class="text-white" href="#">Pages</a></li>
                        <li class="breadcrumb-item"><a class="text-white" href="#">Kendaraan</a></li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>
<!-- Portfolio Start -->
<div class="container-xxl py-5">
    <div class="container px-lg-5">
        <div class="section-title position-relative text-center mb-5 pb-2 wow fadeInUp" data-wow-delay="0.1s">
            <h6 class="position-relative d-inline text-primary ps-4">Our Collection</h6>
            <h2 class="mt-2">Recently Launched Collection</h2>
        </div>
        <div class="row mt-n2 wow fadeInUp justify-content-center" data-wow-delay="0.1s">
            <div class="col-6 mb-5">
                <form action="/project ">
                    <div class="input-group mb-5">
                        <input type="text" class="form-control" placeholder="Mau cari apa?" name="search">
                        <button class="btn btn-outline-primary" type="submit" id="button-addon2"><i
                                class="fas fa-search fa-2x"></i></button>
                    </div>
                </form>
            </div>
        </div>
        @if ($kendaraan -> count() > 0)
        <div class="row g-4 portfolio-container">
            @foreach ($kendaraan as $item)
            <div class="col-lg-4 col-md-6 portfolio-item wow zoomIn" data-wow-delay="0.1s" style="height: 300px;">
                <div class=" rounded overflow-hidden">
                    <img class="img-fluid w-100" src="{{ asset('img/kendaraan/'.$item -> slug.'.png') }}" alt="">
                    <a class="btn btn-light" href="/detail/{{ $item -> slug }}"><i
                            class="fa fa-plus fa-2x text-primary"></i>
                    </a>
                    <div class="portfolio-overlay">
                        <div class="mt-auto">
                            <small class="text-white"><i
                                    class="fa fa-folder me-2"></i>{{ $item -> brand -> nama }}</small>
                            <a class="h5 d-block text-white mt-1 mb-0" href="">{{ $item -> nama }}</a>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        <div class="d-flex justify-content-center" style="margin-top: 100px">
            {{ $kendaraan -> links() }}
        </div>
        @else
        <div class="text-center">
            <img src="/img/sad.png" alt="" width="200px" class="img-fluid mb-3">
            <p class="text-center fs-2">Data tidak ditemukan!</p>
        </div>
        @endif
    </div>
</div>

<!-- Portfolio End -->
@endsection