<!DOCTYPE html>
<html lang="en" dir="">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width,initial-scale=1" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="description" content="E-SPAMS merupakan Sistem Informasi Pengelolaan Administrasi Keuangan Berbasis Web Kelompok Pengelola Sarana Penyediaan Air Minum dan Sanitasi (KP-SPAMS). Dibangun dengan berpedoman kepada [ POB - Pengelolaan Administrasi Keuangan Penyediaan Air Minum dan Sanitasi Berbasis Masyarakat (PAMSIMAS)">
    <title>SIPAMS ADMIN | SIPAMS</title>
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
            <div class="content-body">

            </div>
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

    <script src="{{asset('/js/scripts/customizer.script.min.js')}}"></script>
    <script src="{{asset('/js/sipams.js')}}"></script>
    <script>
        let form_default = 'dashboard-dashboard';
        let current_page = 'dashboard-dashboard';
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        })

        $(document).ready(function(e) {
            loadMenu("{{url('menu/')}}/" + form_default)
        })

        function loadMenu(menu) {
            $.ajax({
                type: 'get',
                url: "{{url('cek_session')}}",
                dataType: 'json',
                async: false,
                success: function(res) {
                    if (!res.status) {
                        window.location.href = "{{url('sesi-habis')}}";
                    } else {
                        $('.content-body').load(menu);
                        // history.pushState('', '', menu);
                    }
                },
                error: function(xhr) {
                    console.log(xhr)
                }
            })
        }

        $('.a_link').on('click', function(e) {
            e.preventDefault();
            $('.nav-item').removeClass('active');
            $('.sidebar-left-secondary').removeClass('open');
            var form = $(this).attr('href')
            var url = "{{url('menu')}}/" + form
            loadMenu(url)
        })

        $('.new-window').on('click', function(e) {
            e.preventDefault()
        })
    </script>
</body>

</html>