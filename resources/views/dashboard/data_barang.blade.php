@extends('dashboard.master')

@section('title', 'Data Barang')

@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">@yield('title')</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Data Master</a></li>
                            <li class="breadcrumb-item active">@yield('title')</li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->



        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">@yield('title')</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        @if (session('success'))
                            <div class="alert alert-success" role="alert">
                                {{ session('success') }}
                            </div>
                        @endif
                        <a href="{{ route('barang.create') }}" type="button" class="btn btn-warning mb-2">Tambah
                            Barang</a>
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama</th>
                                    <th>Petugas</th>
                                    <th>Harga</th>
                                    <th>Stok</th>
                                    <th>Foto</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php $no = 1; @endphp
                                @foreach ($data as $i)
                                <tr>
                                    <td>{{ $no++ }}</td>
                                    <td>{{ $i->nama_barang}}</td>
                                    <td>{{ $i->user->name }}</td>
                                    <td>{{ formatRupiah($i->harga) }}</td>
                                    <td>{{ $i->stok }}</td>
                                    <td> <img src="{{ asset('storage/'.$i->photo) }}" alt="photo" height="100"> </td>
                                    <td>
                                        
                                        
                                        <!-- Modal -->
                                        <div class="modal fade" id="tambah_stok_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                <h5 class="modal-title" id="tambah_stok_modal">Tambah Stok</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                                </div>
                                                <div class="modal-body">
                                                <form action="{{ route('tambah_stok') }}" method="post">
                                                    @csrf
                                                    <label for="">Nama Barang</label>
                                                    <input type="text" class="form-control" id="nama_barang" name="nama_barang">
                                                    <input type="hidden" class="id" name="id" id="id">
                                                    <label for="">Stok</label>
                                                    <input type="number" class="form-control" name="tambah_stok" id="tambah_stok">
                                            
                                                
                                                </div>
                                                <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                <button type="submit" class="btn btn-primary">Save changes</button>
                                            </form>
                                                </div>
                                            </div>
                                            </div>
                                        </div>
                                        <form action="{{ route('barang.destroy', $i->id) }}"
                                            method="post" class="delete-form">
                                            @csrf
                                            @method('DELETE')
                                            <!-- Button trigger modal -->
                                            <button type="button" data-id="{{ $i->id }}" data-nama="{{$i->nama_barang}}" class="btn btn-primary tambah_stok" data-toggle="modal" data-target="#tambah_stok_modal">
                                                Tambah Stok
                                            </button>
                                            <a href=" {{ route('barang.edit', $i->id) }} "
                                                 class="btn btn-warning" type="button">Edit</a>
                                            <button type="submit" class="btn btn-danger">
                                                Delete</button>
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                        </table>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div><!--/. container-fluid -->
        </section>
        <!-- /.content -->
    </div>
@endsection
<!-- Content Wrapper. Contains page content -->


<!-- /.content-wrapper -->
