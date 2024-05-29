@extends('layouts.backend')

@section('title', 'Halaman Dashboard')

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Dashboard</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Dashboard v1</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">{{ __('Fitur dan Komponen') }}</div>
                        <div class="card-body">
                            <p>
                            Sistem Manajemen Karyawan: Mengelola Data Karyawan dan Jabatan. (Kelompok 4) <br>
                            Memiliki Fitur : <br>
                            CRUD permissions: <br>
                            Create: tambah data Permissions <br>
                            Read: tampilkan data Permissions <br>
                            Update: edit data Permissions <br>
                            Delete: hapus data Permissions <br>
 <br>
                            CRUD Jabatan: <br>
                            Create: tambah data Jabatan <br>
                            Read: tampilkan data Jabatan <br>
                            Update: edit data Jabatan <br>
                            Delete: hapus data Jabatan <br>
 <br>
                            CRUD Karyawan / User: <br>
                            Create: tambah data karyawan <br>
                            Read: tampilkan data karyawan <br>
                            Update: edit data karyawan <br>
                            Delete: hapus data karyawan <br>
 <br>
                            CRUD Produk: <br>
                            Create: tambah data Produk <br>
                            Read: tampilkan data Produk <br>
                            Update: edit data Produk <br>
                            Delete: hapus data Produk <br>
 <br>
                            login <br>
                            Register <br>
                            roles mgmt <br>
                            factory + seeder (50 data dummy faker) <br>
                            pagination <br>
                            Dynamic Nav Bar <br>
                            <p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /.content -->
@endsection