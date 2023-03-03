<!DOCTYPE html>
<html lang="en" dir="">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width,initial-scale=1" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="description" content="E-SPAMS merupakan Sistem Informasi Pengelolaan Administrasi Keuangan Berbasis Web Kelompok Pengelola Sarana Penyediaan Air Minum dan Sanitasi (KP-SPAMS). Dibangun dengan berpedoman kepada [ POB - Pengelolaan Administrasi Keuangan Penyediaan Air Minum dan Sanitasi Berbasis Masyarakat (PAMSIMAS)">
    <title>{{$title}} | SIPAMS</title>
    <link href="https://fonts.googleapis.com/css?family=Nunito:300,400,400i,600,700,800,900" rel="stylesheet" />
    <link href="{{asset('/css/themes/lite-purple.min.css')}} " rel="stylesheet" />
    <link href="{{asset('/css/plugins/perfect-scrollbar.min.css')}}" rel="stylesheet" />
</head>

<body class="text-left">
    <div class="app-admin-wrap layout-sidebar-large">
        @include('_partials/header')
        @include('_partials/sidebar')
        <!-- =============== Left side End ================-->
        <div class="main-content-wrap sidenav-open d-flex flex-column">
            <!-- ============ Body content start ============= -->
            @yield('content')
            <!-- Footer Start -->
            <div class="flex-grow-1"></div>
            @include('_partials/footer')
            <!-- fotter end -->
        </div>
    </div>

    <script src="{{asset('/js/plugins/jquery-3.3.1.min.js')}}"></script>
    <script src="{{asset('/js/plugins/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('/js/plugins/perfect-scrollbar.min.js')}}"></script>
    <script src="{{asset('/js/scripts/script.min.js')}}"></script>
    <script src="{{asset('/js/scripts/sidebar.large.script.min.js')}}"></script>
    <script src="{{asset('/js/plugins/echarts.min.js')}}"></script>
    <script src="{{asset('/js/scripts/echart.options.min.js')}}"></script>
    <script src="{{asset('/js/scripts/dashboard.v1.script.min.js')}}"></script>
    <script src="{{asset('/js/scripts/customizer.script.min.js')}}"></script>
    <script src="{{asset('/js/sipams.js')}}"></script>
    <script>
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
    </script>
</body>

</html>
