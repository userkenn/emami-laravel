@extends('layouts.template_dashboard_admin')

@section('judul', 'EMAMI - Dashboard Penjual')

@section('isi')
<div class="container">
    <h1> Daftar Produk User: {{ $user->nama_lengkap }}</h1>
</div>
<a href="{{ route('produk.tampilUsers') }}">Kembali</a>

    @if ($produk->count() > 0)
        <table border="1">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Gambar Produk</th>
                    <th>Nama Produk</th>
                    <th>Harga Produk</th>
                    <th>Produk Terjual</th>
                    <th>Stok Produk</th>
                    <th>Kategori Produk</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($produk as $product)
                    <tr>
                        <td>{{ $product->kode_produk }}</td>
                        <td>
                            @if ($product->gambar_produk)
                            <img src="{{ asset('assets/img/gambar_produk/' . $product->gambar_produk) }}" width="100"
                                alt="Gambar Produk">
                            @else
                                No Image
                            @endif
                        </td>
                        <td>{{ $product->nama_produk }}</td>
                        <td>Rp{{ number_format($product->harga_produk, 0, ',', '.') }}</td>
                        <td>{{ $product->produk_terjual }}</td>
                        <td>{{ $product->stok_produk }}</td>
                        <td>{{ $product->kategori_produk }}</td>
                        <td>
                            <a href="{{ route('produk.edit', $product->kode_produk) }}">
                                <img src="{{ asset('assets/img/penjual/edit.png') }}" alt="Edit">
                            </a> |
                            
                            <a href="#" onclick="confirmDelete('{{ route('produk.destroy', $product) }}')">
                                <img src="{{ asset('assets/img/penjual/delete.png') }}" alt="Hapus">
                            </a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @else
        <p>Tidak ada produk untuk user ini.</p>
    @endif

    <script>
        function confirmDelete(deleteUrl) {
            if (confirm('Yakin ingin menghapus data?')) {
                // Lakukan penghapusan dengan mengarahkan ke rute DELETE
                var form = document.createElement('form');
                form.setAttribute('method', 'POST');
                form.setAttribute('action', deleteUrl);

                var csrfToken = document.createElement('input');
                csrfToken.setAttribute('type', 'hidden');
                csrfToken.setAttribute('name', '_token');
                csrfToken.setAttribute('value', '{{ csrf_token() }}');

                var methodField = document.createElement('input');
                methodField.setAttribute('type', 'hidden');
                methodField.setAttribute('name', '_method');
                methodField.setAttribute('value', 'DELETE');

                form.appendChild(csrfToken);
                form.appendChild(methodField);

                document.body.appendChild(form);
                form.submit();
            }
        }
    </script>
@endsection
