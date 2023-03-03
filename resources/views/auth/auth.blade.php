<!DOCTYPE html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="description" content="E-SPAMS merupakan Sistem Informasi Pengelolaan Administrasi Keuangan Berbasis Web Kelompok Pengelola Sarana Penyediaan Air Minum dan Sanitasi (KP-SPAMS). Dibangun dengan berpedoman kepada [ POB - Pengelolaan Administrasi Keuangan Penyediaan Air Minum dan Sanitasi Berbasis Masyarakat (PAMSIMAS)">
    <title>Login | SIPAMS</title>
    <link href="https://fonts.googleapis.com/css?family=Nunito:300,400,400i,600,700,800,900" rel="stylesheet">
    <link href="{{asset('/css/themes/lite-purple.min.css')}}" rel="stylesheet">
</head>
<!-- Backgroun Image From Kompas.com (https://nasional.kompas.com/read/2021/12/20/12281001/berdampak-positif-program-pamsimas-dari-kementerian-pupr-buka-akses-air) -->
<div class="auth-layout-wrap" style="background-image: url({{asset('/dgt/bg-pamsimas.jpeg')}})">
    <div class="auth-content">
        <div class="card o-hidden">
            <div class="row">
                <div class="col-md-12">
                    <div class="p-4">
                        <div class="auth-logo text-center mb-4">
                            <img src="{{asset('/dgt/dgt-v1.png')}}" alt="">
                        </div>
                        <form>
                            <div class="form-group">
                                <label for="email">Nama Pengguna</label>
                                <input class="form-control form-control-rounded" id="email" type="off" autofocus autocomplete="off">
                            </div>
                            <div class="form-group">
                                <label for="password">Kata Sandi</label>
                                <input class="form-control form-control-rounded" id="password" type="password" autocomplete="off">
                            </div>
                            <button class="btn btn-rounded btn-primary btn-block mt-3">Masuk</button>
                        </form>
                        <div class="mt-3 text-center">
                            <a class="text-muted" href="forgot.html">
                                <u>Lupa Kata Sandi?</u>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
