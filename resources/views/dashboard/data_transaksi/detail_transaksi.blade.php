@extends('dashboard.master')

@section('title', 'Detail Transaksi')

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
                                    <th class="text-center">No</th>
                                    <th class="text-center">Nama</th>
                                    <th class="text-center">QTY</th>
                                    <th class="text-center">Total Transaksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php 
                                    $no = 1;
                                    $total = 0;
                                @endphp
                                
                                @foreach ($list as $i)
                                @php
                                    $total += $i->total;
                                @endphp    
                                
                                <tr>
                                    <td class="text-center">{{ $no++ }}</td>
                                    <td class="text-center">{{ $i->barang->nama_barang}}</td>
                                    <td class="text-center">{{ $i->jumlah_barang }}</td>
                                    <td class="text-center">{{ $i->total }}</td>
                                </tr>
                                @endforeach
                                <tr>
                                    <td class="text-right" colspan="3">Total</td>
                                    <td class="text-center" id="total_harga">{{ $total }}</td>
                                </tr>
                                <tr>
                                    <td class="text-right" colspan="3">Diskon</td>
                                    <td class="text-center"><input class="form-control" type="number" name="diskon" id="diskon"></td>
                                </tr>
                                <tr>
                                    <td class="text-right" colspan="3">Total Tagihan</td>
                                    <td class="text-center"><input class="form-control text-center" type="number" name="total" id="total"></td>
                                </tr>
                                <tr>
                                    <td class="text-right" colspan="3">Bayar</td>
                                    <td class="text-center"><input class="form-control" type="number" name="bayar" id="bayar"></td>
                                </tr>
                                <tr>
                                    <td class="text-right" colspan="3">Kembalian</td>
                                    <td class="text-center"><input class="form-control" type="number" name="kembalian" id="kembalian"></td>
                                </tr>
                            </tbody>
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
