<ul class="sidebar-menu" data-widget="tree">
    <li class="header">Pengiriman</li>
    <!-- Optionally, you can add icons to the links -->
    <li class="{{ Request::is('pengiriman/baru') ? 'active' : '' }}"><a href="{{url('/pengiriman/baru')}}"><i class="fa fa-send"></i> <span>Pengiriman Baru</span></a></li>
    <li class="{{ Request::is('pengiriman/lihat') ? 'active' : '' }}"><a href="{{url('/pengiriman/lihat')}}"><i class="fa fa-box"></i> <span>Lihat Semua Pengiriman</span></a></li>
    <li class="header">Kendaraan</li>
    <li class="{{ Request::is('kendaraan/baru') ? 'active' : '' }}"><a href="{{url('/kendaraan/baru')}}"><i class="fa fa-send"></i> <span>Kendaraan Baru</span></a></li>
    <li class="{{ Request::is('kendaraan/lihat') ? 'active' : '' }}"><a href="{{url('/kendaraan/lihat')}}"><i class="fa fa-car"></i> <span>Lihat Semua Kendaraan</span></a></li>
    <li class="header">Rekomendasi</li>
    <li class="{{ Request::is('/rekomendasi') ? 'active' : '' }}"><a href="{{url('/rekomendasi')}}"><i class="fa fa-send"></i> <span>Lihat Semua Kendaraan</span></a></li>

    {{--    <li class="treeview">--}}
{{--        <a href="#"><i class="fa fa-link"></i> <span>Pengiriman</span>--}}
{{--            <span class="pull-right-container">--}}
{{--                <i class="fa fa-angle-left pull-right"></i>--}}
{{--              </span>--}}
{{--        </a>--}}
{{--        <ul class="treeview-menu">--}}
{{--            <li class="active"><a href="{{url('/pengiriman/baru')}}"><i class="fa fa-send"></i> <span>Pengiriman Baru</span></a></li>--}}
{{--            <li class="active"><a href="{{url('/pengiriman/lihat')}}"><i class="fa fa-box"></i> <span>Lihat Semua Pengiriman</span></a></li>--}}
{{--            <li><a href="#">Link in level 2</a></li>--}}
{{--        </ul>--}}
{{--    </li>--}}

{{--    <li><a href="#"><i class="fa fa-link"></i> <span>Another Link</span></a></li>--}}
{{--    <li class="treeview">--}}
{{--        <a href="#"><i class="fa fa-link"></i> <span>Multilevel</span>--}}
{{--            <span class="pull-right-container">--}}
{{--                <i class="fa fa-angle-left pull-right"></i>--}}
{{--              </span>--}}
{{--        </a>--}}
{{--        <ul class="treeview-menu">--}}
{{--            <li><a href="#">Link in level 2</a></li>--}}
{{--            <li><a href="#">Link in level 2</a></li>--}}
{{--        </ul>--}}
{{--    </li>--}}
</ul>
