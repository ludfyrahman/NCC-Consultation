@extends('layouts.app')

@section('content-app')
    <div class="container mt-4">
        <div class="card">
            <div class="card-header pb-0">
                <div class="d-flex justify-content-between">
                    <h4 class="card-title mg-b-0">Data Users</h4>
                    <a href="{{ url('/user/create') }}" class="btn btn-sm btn-primary"><i class="mdi mdi-plus"></i> Tambah
                        User</a>

                </div>
                <p class="tx-12 tx-gray-500 mb-2">Data pengguna</p>
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
                <div class="table-responsive">
                    <table class="table text-md-nowrap" id="example1">
                        <thead>
                            <tr>
                                <th class="wd-15p border-bottom-0">Username</th>
                                <th class="wd-20p border-bottom-0">Role</th>
                                <th class="wd-15p border-bottom-0">Status</th>
                                <th class="wd-25p border-bottom-0">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($data as $item)
                                <tr>
                                    <td>{{ $item->username }}</td>
                                    <td>{{ $item->role }}</td>
                                    <td>{{ $item->status }}</td>
                                    <td><a href="{{url('/user/'.$item->id.'/edit')}}" class="btn btn-sm btn-info"> <i class="mdi mdi-pencil"></i>
                                            Ubah</a>
                                        <a href="" class="btn btn-sm btn-danger"><i class="mdi mdi-delete"></i>
                                            Hapus</a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
