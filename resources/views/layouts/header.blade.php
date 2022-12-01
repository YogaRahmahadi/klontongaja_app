<header class="main-header">
    <!-- Logo -->
    {{-- <a class="navbar-brand" href="/admin/home">
        <!-- Logo icon -->
        <b class="logo-icon">
          <!-- Dark Logo icon -->
          <img src="{{ asset('assets/plugins/images/logo-klontong.png') }}" class="w-100" alt="homepage" />
        </b>
    </a> --}}
    <a href="" class="logo" style="background-color:red;">
        <!-- mini logo for sidebar mini 50x50 pixels -->
        {{-- @php
            $words = explode(' ', $setting->nama_perusahaan);
            $word  = '';
            foreach ($words as $w) {
                $word .= $w[0];
            }
        @endphp
        <span class="logo-mini">{{ $word }}</span> --}}
        <!-- logo for regular state and mobile devices -->
        <span class="logo-lg"><b>Klontong Aja</b></span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top" style="background-color:red;">
        <!-- Sidebar toggle button-->
        <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button" style="background-color:red;">
            <span class="sr-only">Toggle navigation</span>
        </a>

        <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
                <!-- User Account: style can be found in dropdown.less -->
                <li class="dropdown user user-menu">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <img src="{{ url(auth()->user()->foto ?? '') }}" class="user-image img-profil"
                            alt="User Image">
                        <span class="hidden-xs">{{ auth()->user()->name }}</span>
                    </a>
                </li>
            </ul>
        </div>
    </nav>
</header> --}}