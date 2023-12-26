<div id="menu-toggle">&#9776;</div>

<div id="sidebar">
    <div id="navbar">
        <a href="{{ url('/admin') }}">Dashboard</a>
        <a href="{{ url('/admin/profil') }}">Profil Admin</a>
        <a href="{{ url('/admin/mengelola_users') }}">Mengelola Users</a>
        <a href="{{ url('/admin/banner') }}">Mengelola Banner</a>
        <a href="{{ url('/admin/produk_user') }}">Mengelola Produk</a>
        <a href="{{ url('/logout') }}">Logout</a>
    </div>
</div>

<script src="{{ asset('assets/js/dashboard.js') }}"></script>