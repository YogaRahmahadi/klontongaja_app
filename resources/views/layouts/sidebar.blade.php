<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <ul class="sidebar-menu" data-widget="tree">
            <li>
                <a href="{{ route('dashboard') }}">
                    <i class="fa fa-home"></i> <span>Dashboard</span>
                </a>
            </li>

            @if (auth()->user()->level == 1)
                <li>
                    <a href="{{ route("user.profil") }}">
                        <i class="fa fa-user"></i> <span>Profil</span>
                    </a>
                </li>
                {{-- <li>
                    <a href="{{ route('user.index') }}">
                        <i class="fa fa-users"></i> <span>User</span>
                    </a>
                </li> --}}
                <li>
                    <a href="{{ route('kategori.index') }}">
                        <i class="fa fa-th-large"></i> <span>Kategori</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('produk.index') }}">
                        <i class="fa fa-cube"></i> <span>Produk</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('supplier.index') }}">
                        <i class="fa fa-industry"></i> <span>Supplier</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('pembelian.index') }}">
                        <i class="fa fa-cube"></i> <span>Barang Masuk</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('transaksi.baru') }}">
                        <i class="fa fa-cart-arrow-down"></i> <span>Transaksi</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('laporan.index') }}">
                        <i class="fa fa-usd"></i> <span>Laba</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('penjualan.index') }}">
                        <i class="fa fa-file-pdf-o"></i> <span>Laporan Penjualan</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();">
                        <i class="fa fa-minus" aria-hidden="true"> </i><span>Logout</span>
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </li>
            @else
                <li>
                    <a href="{{ route("user.profil") }}">
                        <i class="fa fa-user"></i> <span>Profil</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('produk.index') }}">
                        <i class="fa fa-cube"></i> <span>Produk</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('pembelian.index') }}">
                        <i class="fa fa-cube"></i> <span>Barang Masuk</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('transaksi.baru') }}">
                        <i class="fa fa-cart-arrow-down"></i> <span>Transaksi</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();">
                        <i class="fa fa-minus" aria-hidden="true"> </i><span>Logout</span>
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </li>
            @endif
        </ul>
    </section>
    <!-- /.sidebar -->
</aside>
