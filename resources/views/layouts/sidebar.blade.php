<div id="menu-toggle">&#9776;</div>

<div id="sidebar">
    <div id="navbar">
        <a href="{{ url('/penjual') }}">Dashboard</a>
        <a href="{{ url('/penjual/users') }}">Profil Penjual</a>
        <a href="{{ route('produk.index') }}">Mengelola Produk</a>
        <a href="{{ url('/logout') }}">Logout</a>
    </div>
</div>

<script src="{{ asset('assets/js/dashboard.js') }}"></script>