

<!-- /.content-wrapper -->
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
                        <li class="breadcrumb-item"><a href="#">Tambah Data</a></li>
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
                    <a href="{{ route('barang.index') }}" type="button" class="btn btn-warning mb-2">Kembali</a>
                    <form action="{{ route('barang.update', $data->id) }}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <label for="">Petugas</label>
                        <input type="text" class="form-control" name="nama" value="{{ Auth::user()->name }}" readonly>
                        <input type="hidden" class="form-control" name="id_user" value="{{ Auth::user()->id }}">

                        <label for="">Kategori</label>
                        <select name="id_categori" id="id_categori" class="form-control">
                            <option value="">Kategori Barang</option>
                            @foreach ($categori as $i)
                                <option value="{{ $i->id == $data->id_categori  ? $data->id_user : $i->id}}" 
                                    {{ $i->id == $data->id_categori  ? 'selected' : '' }} >
                                    {{ $i->id == $data->id_categori  ? $i->nama : $i->nama  }} </option>
                            @endforeach
                        </select>

                        <label for="">Nama Barang</label>
                        <input type="text" name="nama_barang" id="nama_barang" value="{{ $data->nama_barang }}" class="form-control">

                        <label for="">Harga</label>
                        <input type="text" name="harga" id="harga" value="{{ $data->harga }}" class="form-control">

                        <label for="">Stok</label>
                        <input type="text" name="stok" id="stok" value="{{ $data->stok }}" class="form-control">

                        <label for="">Jumlah Terjual</label>
                        <input type="text" name="jumlah_terjual" id="jumlah_terjual" value="{{ $data->jumlah_terjual }}" class="form-control">
                        <label for="">Foto</label>
                        <input type="file" name="photo" class="form-control">
                        <button type="submit" class="btn btn-primary mt-2">Simpan</button>
                    </form>
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
