@extends('layouts.master')

@section('title')
    Daftar Produk
@endsection

@section('breadcrumb')
    @parent
    <li class="active">Daftar Produk</li>
@endsection

@section('content')
<div class="row">
    <div class="col-lg-12">
        <div class="box">
            <div class="box-header with-border">
                <div class="btn-group">
                    <a onclick="addForm('{{ route('produk.store') }}')" style="background-color: #3CCF4E" class="float-end btn btn-success text-light">Tambah Data</a>
                </div>
            </div>
            <div class="box-body table-responsive">
                <form action="" method="post" class="form-produk">
                    @csrf
                    <table class="table table-stiped table-bordered">
                        <thead>
                            <th>Kode</th>
                            <th>Nama</th>
                            <th>Kategori</th>
                            <th>Harga Beli</th>
                            <th>Harga Jual</th>
                            <th>Stok</th>
                            <th width="10%">Action</th>
                            <th>Satuan</th>
                            <th>Foto</th>
                        </thead>
                    </table>
                </form>
            </div>
        </div>
    </div>
</div>

@include('produk.script')

@includeIf('produk.form')
@endsection
