@extends('app')

@section('content')
<div class="main-content">
    <div class="breadcrumb">
        <h1 class="mr-2">Dashboard</h1>
    </div>
    <div class="separator-breadcrumb border-top"></div>
    <div class="row">
        <!-- ICON BG-->
        <div class="col-lg-3 col-md-6 col-sm-6">
            <div class="card card-icon-bg card-icon-bg-primary o-hidden mb-4">
                <div class="card-body text-center"><i class="i-Add-User"></i>
                    <div class="content">
                        <p class="text-muted mt-2 mb-0">Pelanggan</p>
                        <p class="text-primary text-24 line-height-1 mb-2" id="total-pelanggan">0</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6">
            <div class="card card-icon-bg card-icon-bg-primary o-hidden mb-4">
                <div class="card-body text-center"><i class="i-Financial"></i>
                    <div class="content">
                        <p class="text-muted mt-2 mb-0">Penerimaan</p>
                        <p class="text-primary text-24 line-height-1 mb-2" id="total-penerimaan">0</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6">
            <div class="card card-icon-bg card-icon-bg-primary o-hidden mb-4">
                <div class="card-body text-center"><i class="i-Money-Bag"></i>
                    <div class="content">
                        <p class="text-muted mt-2 mb-0">Saldo Bank</p>
                        <p class="text-primary text-24 line-height-1 mb-2" id="total-bank">0</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6">
            <div class="card card-icon-bg card-icon-bg-primary o-hidden mb-4">
                <div class="card-body text-center"><i class="i-Money-2"></i>
                    <div class="content">
                        <p class="text-muted mt-2 mb-0">Pengeluaran</p>
                        <p class="text-primary text-24 line-height-1 mb-2" id="total-pengeluaran">0</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-8 col-md-12">
            <div class="card mb-4">
                <div class="card-body">
                    <div class="card-title">Penerimaan Tahun Ini</div>
                    <div id="echartBar" style="height: 300px;"></div>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-sm-12">
            <div class="card mb-4">
                <div class="card-body">
                    <div class="card-title">Pengeluran Berdasarkan Kategori Bulan Ini</div>
                    <div id="echartPie" style="height: 300px;"></div>
                </div>
            </div>
        </div>
    </div>
    <!-- end of main-content -->
</div>
@endSection
