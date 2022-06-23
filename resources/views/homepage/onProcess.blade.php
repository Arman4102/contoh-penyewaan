@php
$order = \App\Models\Order::where('user_id', Auth::user() -> id) -> where('status', 1) -> first();

if(!empty($order)){
$orderDetails = \App\Models\OrderDetail::where('order_id', $order -> id) -> get();
}
@endphp
@extends('homepage.layouts.main')
@section('content')
<div class="container-xxl py-5 bg-primary hero-header mb-5">
    <div class="container my-5 py-5 px-lg-5">
        <div class="row g-5 py-5">
            <div class="col-12 text-center">
                <h1 class="text-white animated zoomIn">Cart</h1>
                <hr class="bg-white mx-auto mt-0" style="width: 90px;">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center">
                        <li class="breadcrumb-item"><a class="text-white" href="/">Home</a></li>
                        <li class="breadcrumb-item text-white active" aria-current="page">Cart</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>

<div class="container-xxl py-5">
    <div class="container px-lg-5">
        <div class="section-title position-relative text-center mb-5 pb-2 wow fadeInUp" data-wow-delay="0.1s">
            <h6 class="position-relative d-inline text-primary ps-4">Keranjang</h6>
            <h2 class="mt-2">Pesanan anda</h2>

        </div>
        <div class="row mb-3">
            <div class="col-md-12">
                <div class="btn-group w-100" role="group">
                    <a href="/cart" class="btn btn-outline-primary {{ Request::is('cart') ? 'active' : '' }}">Belum
                        bayar <i class="far fa-credit-card"></i></a>
                    <a href="/onProcess"
                        class="btn btn-outline-primary {{ Request::is('onProcess') ? 'active' : '' }}">Dalam
                        pemimjaman <i class="fas fa-car"></i></a>
                    <a href="/history"
                        class="btn btn-outline-primary {{ Request::is('history') ? 'active' : '' }}">History
                        pinjam <i class="fas fa-history"></i></a>
                </div>
            </div>
        </div>
        <div class="row g-4">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <table class="table text-center">
                            <thead class="justify-center">
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Image</th>
                                    <th scope="col">Kendaraan</th>
                                    <th scope="col">Status</th>
                                    <th scope="col">Tanggal Sewa</th>
                                    <th scope="col">Durasi</th>
                                    <th scope="col">Option</th>
                                    <th scope="col">Total Bayar</th>
                                    <th scope="col">Catatan</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody class="align-baseline">
                                @if (!empty($order))
                                @foreach ($orderDetails as $item)
                                <tr>
                                    <td>
                                        {{ $loop -> iteration }}
                                    </td>
                                    <td>
                                        <img src="@if (!$item -> kendaraan -> image)
                                                                                {{ asset('img/kendaraan/'.$item -> kendaraan -> slug.'.png') }}
                                                                                @else
                                                                                {{asset('storage/'.$item -> kendaraan->image)}}
                                                                              @endif" alt="" width="200px">
                                    </td>
                                    <td>{{ $item -> kendaraan -> nama }}</td>
                                    <td>
                                        @if ($item -> order -> status == 0)
                                        <span class="badge rounded-pill bg-danger">Belum bayar</span>
                                        @elseif ($item -> order -> status == 1)
                                        <span class="badge rounded-pill bg-warning">Dalam Peminjaman</span>
                                        @elseif ($item -> order -> status == 2)
                                        <span class="badge rounded-pill bg-success">Selesai</span>
                                        @endif
                                    </td>
                                    <td>{{ $item -> tanggal_sewa }}</td>
                                    <td>{{ $item -> lama_sewa }}</td>
                                    <td>@if ($item -> opsi == 1)
                                        {{ 'Tanpa Sopir' }}
                                        @elseif ($item -> opsi == 2)
                                        {{ 'Dengan Sopir' }}
                                        @else
                                        {{ 'Dengan Supir + BBM' }}
                                        @endif</td>
                                    <td>Rp.{{ number_format($item -> total_bayar) }}</td>
                                    <td>{{ $item -> catatan }}</td>
                                    <td><button type="button" class="btn btn-warning" data-bs-toggle="modal"
                                            data-bs-target="#exampleModal">
                                            <img src="{{ asset('img/back.png') }}" alt="" height="40px">
                                        </button></td>
                                </tr>
                                @endforeach
                                @else
                                <tr>
                                    <td colspan="9" class="text-center">
                                        <h5>Masih belum ada pemesanan</h5>
                                    </td>
                                </tr>
                                @endif
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content">
            <form action="/return" method="POST">
                @csrf
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Pengembalian Kendaraan</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="tanggal" class="form-label">Tanggal Kembali</label>
                        <input type="date" class="form-control" id="tanggal" name="tanggal_kembali"
                            value="{{ date('Y-m-d') }}">
                    </div>
                    @if (!empty($order))
                    @foreach ($orderDetails as $item)
                    <div class="mb-3">
                        <label for="tanggal" class="form-label">id</label>
                        <input type="text" class="form-control" id="tanggal" name="order_id" value="{{ $item -> id }}">
                    </div>
                    @endforeach
                    @endif
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save changes</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection