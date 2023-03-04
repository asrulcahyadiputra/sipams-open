{{--
/*
 * File ini:
 *
 * View untuk menu navigasi utama di komponen Admin
 *
 * resources/views/_partials/sidebar.blade.php
 */

/*
 *
 * File ini bagian dari:
 *
 * SIPAMS
 *
 * Sistem Informasi Pengelolaan Administrasi Keuangan sumber terbuka untuk memajukan KPSPAMS
 *
 * Aplikasi dan source code ini dirilis berdasarkan lisensi GPL V3
 *
 * Hak Cipta 2019 - 2022 Asrul Cahyadi Putra
 * Hak Cipta 2023 - Sekarang PT Divoc Global Technology (https://divoc.co.id)
 *
 * Dengan ini diberikan izin, secara gratis, kepada siapa pun yang mendapatkan salinan
 * dari perangkat lunak ini dan file dokumentasi terkait ("Aplikasi Ini"), untuk diperlakukan
 * tanpa batasan, termasuk hak untuk menggunakan, menyalin, mengubah dan/atau mendistribusikan,
 * asal tunduk pada syarat berikut:
 *
 * Pemberitahuan hak cipta di atas dan pemberitahuan izin ini harus disertakan dalam
 * setiap salinan atau bagian penting Aplikasi Ini. Barang siapa yang menghapus atau menghilangkan
 * pemberitahuan ini melanggar ketentuan lisensi Aplikasi Ini.
 *
 * PERANGKAT LUNAK INI DISEDIAKAN "SEBAGAIMANA ADANYA", TANPA JAMINAN APA PUN, BAIK TERSURAT MAUPUN
 * TERSIRAT. PENULIS ATAU PEMEGANG HAK CIPTA SAMA SEKALI TIDAK BERTANGGUNG JAWAB ATAS KLAIM, KERUSAKAN ATAU
 * KEWAJIBAN APAPUN ATAS PENGGUNAAN ATAU LAINNYA TERKAIT APLIKASI INI.
 *
 * @package   SIPAMS
 * @author    Asrul Cahyadi Putra - PT Divoc Global Technology
 * @copyright Hak Cipta 2019 - 2022 Asrul Cahyadi Putra
 * @copyright Hak Cipta 2023 - Sekarang PT Divoc Global Technology (https://divoc.co.id)
 * @license   http://www.gnu.org/licenses/gpl.html GPL V3
 * @link      https://github.com/asrulcahyadiputra/sipams-open
 *
 */
--}}
<div class="side-content-wrap">
    <div class="sidebar-left open rtl-ps-none" data-perfect-scrollbar="" data-suppress-scroll-x="true">
        <ul class="navigation-left">

            <li class="nav-item">
                <a class="nav-item-hold a_link" href="dashboard-dashboard">
                    <i class="nav-icon i-Bar-Chart"></i>
                    <span class="nav-text">Dashboard</span>
                </a>
                <div class="triangle"></div>
            </li>

            @foreach($modul as $modul)
            <li class="nav-item" data-item="{{$modul->kode_modul}}">
                <a class="nav-item-hold" href="#">
                    <i class="nav-icon {{$modul->icon}}"></i>
                    <span class="nav-text">{{$modul->nama_modul}}</span>
                </a>
                <div class="triangle"></div>
            </li>
            @endforeach
        </ul>
    </div>


    <div class="sidebar-left-secondary rtl-ps-none" data-perfect-scrollbar="" data-suppress-scroll-x="true">

        @foreach($submodul as $submodul)
        <ul class="childNav" data-parent="{{$submodul['kode_modul']}}">
            @foreach($submodul['child'] as $child)
            <li class="nav-item">
                <a href="{{url($child->url)}}" class="a_link">
                    <i class="nav-icon {{$child->icon}}"></i>
                    <span class="item-name">{{$child->nama_modul}}</span>
                </a>
            </li>
            @endforeach

        </ul>
        @endforeach

    </div>
    <div class="sidebar-overlay"></div>
</div>