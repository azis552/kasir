@extends('dashboard.master')

@section('title', 'Data Transaksi')

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
                            <li class="breadcrumb-item"><a href="#">Transaksi</a></li>
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
                        
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama</th>
                                    <th>Tanggal</th>
                                    <th>Total Transaksi</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php $no = 1; @endphp
                                @foreach ($data as $i)
                                <tr>
                                    <td>{{ $no++ }}</td>
                                    <td>{{ $i->detail_penjualan->nama_pemesan}}</td>
                                    <td>{{ $i->tanggal_penjualan }}</td>
                                    <td>{{ formatRupiah($i->total_harga) }}</td>
                                    <td>
                                        <form action="{{ route('data.petugas.delete', $i->id) }}"
                                            method="post" class="delete-form">
                                            @csrf
                                            @method('DELETE')
                                            <a href=" {{ route('transaksi.detail', $i->id) }} "
                                                 class="btn btn-warning" type="button">Bayar</a>
                                            <button type="submit" class="btn btn-danger">
                                                Batal</button>
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
