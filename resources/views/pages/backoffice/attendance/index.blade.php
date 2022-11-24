@extends('layouts.app')

@section('content-app')
    <div class="container mt-4">

        <div class="card">
            <div class="card-header pb-0">
                <div class="d-flex justify-content-between">
                    <h4 class="card-title mg-b-0">{{ $title }}</h4>

                </div>

                @if (session('success'))
                    <div class="alert alert-success mg-b-0" role="alert">
                        <button aria-label="Close" class="close" data-bs-dismiss="alert" type="button">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        {{ session('success') }}
                    </div>
                @endif

            </div>
            <div class="card-body">
                <div class="col-md-12 mb-3 d-flex justify-content-between">
                    <div></div>
                    <form action="">
                        <div class="row">
                            <div class="col-md-4">
                                {{-- <label for=""></label> --}}
                                <input class="form-control" placeholder="Enter your password" type="date">
                            </div>
                            <div class="col-md-1">
                                <label for="" class="mt-2">S/d</label>
                            </div>
                            <div class="col-md-4">
                                <input class="form-control" placeholder="Enter your password" type="date">
                            </div>
                            <div class="col-md-3">
                                <button class="btn btn-main-primary btn-block">Filter</button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="table-responsive">
                    <table class="table text-md-nowrap" id="example1">
                        <thead>
                            <tr>
                                <th class=" border-bottom-0">No</th>
                                <th class=" border-bottom-0">Nama Karyawan</th>
                                <th class=" border-bottom-0">Hadir</th>
                                <th class=" border-bottom-0">Izin</th>
                                <th class=" border-bottom-0">Sakit</th>
                                <th class=" border-bottom-0">Tanpa Keterangan</th>
                                <th class=" border-bottom-0">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            {{-- @foreach ($data as $item)
                                <tr>
                                    <td>{{ $item->kode }}</td>
                                    <td>{{ $item->nama }}</td>
                                    <td>{{ Helper::rupiah($item->harga_jual) }}</td>
                                    <td>{{ Helper::rupiah($item->harga_beli) }}</td>
                                    <td>{{ $item->stok }}</td>
                                    <td>{{ $item->satuan }}</td>
                                    <td>{{ $item->kategori }}</td>
                                    <td class="d-flex">
                                        <a href="{{ route('stok.show', $item->id)}}" class="btn btn-sm btn-info me-2"> <i class="mdi mdi-book"></i>
                                            Detail</a>
                                    </td>
                                </tr>
                            @endforeach --}}
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection