@extends('dashboard.master')

@section('title', 'Data Petugas')

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
                    <a href="{{ route('data.petugas') }}" type="button" class="btn btn-warning mb-2">Kembali</a>
                    <form action="{{ route('data.petugas.update',$data->id) }}" method="post">
                        @csrf
                        @method('PUT')
                        <label for="">NIK</label>
                        <input type="text" class="form-control" name="nik" value="{{$data->detailUser->nik}}">
                        <label for="">Nama</label>
                        <input type="text" class="form-control" name="name" value="{{ $data->name }}">
                        <label for="">Nama Lengkap</label>
                        <input type="text" class="form-control" name="nama_lengkap" value="{{$data->detailUser->nama_lengkap}}">
                        <label for="">Tanggal lahir</label>
                        <input type="date" class="form-control" name="tanggal_lahir" value="{{$data->detailUser->tanggal_lahir}}">
                        <label for="">Email</label>
                        <input type="email" class="form-control" name="email" value="{{$data->email}}">
                        <label for="">Alamat</label>
                        <input type="text" class="form-control" name="alamat" value="{{$data->detailUser->alamat}}">
                        <label for="">No Telepon</label>
                        <input type="text" class="form-control" name="no_tlfn" value="{{$data->detailUser->no_tlfn}}">
                     
                        <button type="submit" class="btn btn-warning mt-2">Edit</button>
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
