@extends('layouts.master')

@section('title')
    Dashboard
@endsection

@section('breadcrumb')
    @parent
    <li class="active">Dashboard</li>
@endsection

@section('content')
<!-- Small boxes (Stat box) -->
<div class="row">
    <div class="col-lg-12 col-xlg-3 col-md-12">
        <div class="white-box">
                <div class="overlay-box">
                    <div class="user-content">
                        <center><h3>Selamat Datang !</h3></center>
                        <center><h2>Sistem Pengelolaan Data Barang dan Keuangan</h2></center>
                        <center><h2>Anda Login sebagai Staf</h2></center>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-12 col-xlg-3 col-md-12">
        <div class="white-box">
            <div class="user-bg">
                <center><img width="45%" alt="user" src="{{ asset('assets/plugins/images/logo-klontong.png') }}"></center>
            </div>
        </div>
    </div>
</div>
<!-- /.row (main row) -->
@endsection