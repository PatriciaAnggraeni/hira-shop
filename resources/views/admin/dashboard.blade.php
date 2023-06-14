@extends('layouts.template')

@section('header')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Dashboard</h1>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('content')
    <section class="content">
        <div class="d-flex flex-row flex-wrap align-items-center">
            <!-- card view: data pelanggan-->
            <div class="col-lg-3 col-6">
                <div class="small-box bg-primary">
                    <div class="inner">
                        <h3>0</h3>
                        <p>Data Pelanggan</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-ios-people"></i>
                    </div>
                    <a href="#" class="small-box-footer">More info <i  class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>

            <!-- card view: data barang -->
            <div class="col-lg-3 col-6">
                <div class="small-box bg-success">
                    <div class="inner">
                        <h3>0</h3>
                        <p>Data Barang</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-ios-game-controller-a"></i>
                    </div>
                    <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>

            <!-- card view: data kategori -->
            <div class="col-lg-3 col-6">
                <div class="small-box bg-danger">
                    <div class="inner">
                        <h3>0</h3>
                        <p>Data Kategori</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-social-buffer"></i>
                    </div>
                    <a href="#" class="small-box-footer">More info <i  class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>

            <!-- card view: data pesanan -->
            <div class="col-lg-3 col-6">
                <div class="small-box bg-info">
                    <div class="inner">
                        <h3>0</h3>
                        <p>Data Pesanan</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-ios-cart"></i>
                    </div>
                    <a href="#" class="small-box-footer">More info <i  class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>

            <!-- card view: data pengiriman -->
            <div class="col-lg-3 col-6">
                <div class="small-box bg-info">
                    <div class="inner">
                        <h3>0</h3>
                        <p>Data Pengiriman</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-navicon-round"></i>
                    </div>
                    <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>

            <!-- card view: data pembayaran -->
            <div class="col-lg-3 col-6">
                <div class="small-box bg-warning">
                    <div class="inner">
                        <h3>0</h3>
                        <p>Data Pembayaran</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-social-usd"></i>
                    </div>
                    <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
        </div>
    </section>
@endsection
