@extends('admin.layout.main')
@section('content')
<div class="content-body">
    <div class="container">

        <div class="row page-titles">
            <ol class="breadcrumb">
                <li class="breadcrumb-item active"><a href="javascript:void(0)">Table</a></li>
                <li class="breadcrumb-item"><a href="javascript:void(0)">Data Denda</a></li>
            </ol>
        </div>
        <!-- row -->
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Denda</h4>
                        <div><a href="/dashboard/category/create" class="btn btn-primary">
                                <i class="fas fa-plus"> Tambah Data</i>
                            </a></div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="example5" class="display text-center" style="min-width: 1000px">
                                <thead>
                                    <tr>
                                        <th>
                                            <div class="form-check custom-checkbox ms-2">
                                                <input type="checkbox" class="form-check-input" id="checkAll"
                                                    required="">
                                                <label class="form-check-label" for="checkAll"></label>
                                            </div>
                                        </th>
                                        <th>Nama</th>
                                        <th>Payment</th>
                                        <th>Total</th>
                                        <th>Bukti Pembayaran</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($dendas as $denda)
                                    <tr>
                                        <td>
                                            <div class="form-check custom-checkbox ms-2">
                                                <input type="checkbox" class="form-check-input" id="customCheckBox2"
                                                    required="">
                                                <label class="form-check-label" for="customCheckBox2"></label>
                                            </div>
                                        </td>
                                        <td>{{ $denda->user->name }}</td>
                                        <td>
                                            @if(!empty($denda -> bank_id))
                                            <img src="{{ asset('img/payments/'.$denda -> bank -> name.'.png') }}" alt=""
                                                width="100px">
                                            @else
                                            <strong class="text-danger">Belum melakukan <br>pembayaran!</strong>
                                            @endif
                                        </td>
                                        <td>Rp. {{ number_format($denda -> total) }}</td>
                                        <td>
                                            @if(!empty($denda -> bukti_pembayaran))
                                            <img src="{{ asset('storage/'.$denda -> bukti_pembayaran) }}" alt=""
                                                width="100px">
                                            @endif

                                        <td>
                                            <div class="d-flex">
                                                <form action="">
                                                    <button class="btn btn-warning shadow sharp me-1"><i
                                                            class="fas fa-check-circle"
                                                            style="font-size: 1.5em"></i></button>
                                                </form>
                                                <a href="/dashboard/denda/{{$denda->id}}"
                                                    class="btn btn-info shadow  sharp me-1"><i class="fas fa-eye "
                                                        style="font-size: 1.5em"></i>
                                                </a>
                                                <form action="/dashboard/category/{{ $denda->slug }}" method="POST"
                                                    class="d-inline">
                                                    @method('delete')
                                                    @csrf
                                                    <button class="btn btn-danger shadow  sharp"
                                                        onclick="return confirm('Yakin?')"><i class="fa fa-trash "
                                                            style="font-size: 1.5em"></i></button>
                                                </form>
                                            </div>
                                        </td>
                                        @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@include('sweetalert::alert')

@endsection