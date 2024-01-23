@extends('dashboard.master')

@section('title', 'Data Menu')

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
                    <a href="{{ route('akses.index') }}" type="button" class="btn btn-warning mb-2">Kembali</a>
                    <form action="{{ route('akses.update',$data->id) }}" method="post">
                        @csrf
                        @method('PUT')
                        <label for="">Menu</label>
                        <input type="text" class="form-control" name="menu"
                         value="{{$data->menu}}">
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
