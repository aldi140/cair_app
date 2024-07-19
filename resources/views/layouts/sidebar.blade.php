<!-- ========== Left Sidebar Start ========== -->
<div class="vertical-menu">

    <!-- LOGO -->
    <div class="navbar-brand-box">
        <a href="index" class="logo logo-dark">
            <span class="logo-sm">
                <img src="{{ URL::asset('build/images/logo-dark-sm.png') }}" alt="" height="26">
            </span>
            <span class="logo-lg">
                <img src="{{ URL::asset('build/images/logo-dark.png') }}" alt="" height="28">
            </span>
        </a>

        <a href="index" class="logo logo-light">
            <span class="logo-lg">
                <img src="{{ URL::asset('build/images/logo-light.png') }}" alt="" height="30">
            </span>
            <span class="logo-sm">
                <img src="{{ URL::asset('build/images/logo-light-sm.png') }}" alt="" height="26">
            </span>
        </a>
    </div>

    <button type="button" class="btn btn-sm px-3 font-size-24 header-item waves-effect vertical-menu-btn">
        <i class="bx bx-menu align-middle"></i>
    </button>

    <div data-simplebar class="sidebar-menu-scroll">

        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <!-- Left Menu Start -->
            <ul class="metismenu list-unstyled" id="side-menu">
                <li class="menu-title" data-key="t-menu">Dashboard</li>

                <li>
                    <a href="{{ route('admin.dashboard') }}">
                        <i class="bx bx-home-alt icon nav-icon"></i>
                        <span class="menu-item" data-key="t-dashboard">Dashboard</span>
                        
                    </a>
                   
                </li>

                <li class="menu-title" data-key="t-applications">Kendaraan</li>

                <li>
                    <a href="javascript: void(0);">
                        <i class="bi bi-car-front icon nav-icon me-2"></i>
                        <span class="menu-item" data-key="t-dashboard"> Data
                            Kendaraan</span>
                        <span class="badge rounded-pill bg-primary">2</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{ route('admin.mobil.index') }}" data-key="t-mobil">Mobil</a></li>
                        <li><a href="{{ route('admin.motor.index') }}" data-key="t-motor">Motor</a></li>
                    </ul>
                </li>


                <li class="menu-title" data-key="t-menu">Pengajuan</li>

                <li>
                    <a href="javascript: void(0);">
                        <i class="bi bi-file-earmark-text icon nav-icon"></i>
                        <span class="menu-item" data-key="t-datapengajuan">Data Pengajuan</span>
                        <span class="badge rounded-pill bg-primary">2</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{ route('admin.pengajuan-mobil') }}" data-key="t-pmobil">Mobil</a></li>
                        <li><a href="{{ route('admin.pengajuan-motor') }}" data-key="t-pmotor">Motor</a></li>
                        <li><a href="{{ route('admin.pengajuan-property') }}" data-key="t-pproperty">Property</a></li>
                        <li><a href="{{ route('admin.pengajuan-sertifikasi') }}" data-key="t-psertifikat">Sertifkat</a></li>
                    </ul>
                </li>
                {{-- 
                <li>
                    <a href="{{ route('admin.mobil.index') }}">
                        <i class="bx bx-calendar-event icon nav-icon"></i>
                        <span class="menu-item" data-key="t-calendar">Data Mobil</span>
                    </a>
                </li> --}}



            </ul>
        </div>
        <!-- Sidebar -->
    </div>
</div>
<!-- Left Sidebar End -->
