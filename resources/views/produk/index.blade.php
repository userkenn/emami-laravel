@extends('layouts.template_dashboard')

@section('judul', 'EMAMI - Dashboard Penjual')

@section('isi')
    <h2>Daftar Produk</h2>

    <a href="{{ route('produk.create') }}"><button class="tombol-tambah">Tambah Data</button></a>

    <table>
        <thead>
            <tr>
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
            @foreach ($produk as $item)
                <tr>
                    <td>
                        @if ($item->gambar_produk)
                            <img src="{{ asset('assets/img/gambar_produk/' . $item->gambar_produk) }}" width="100"
                                alt="Gambar Produk">
                        @else
                            No Image
                        @endif
                    </td>
                    <td>{{ $item->nama_produk }}</td>
                    <td>Rp{{ number_format($item->harga_produk, 0, ',', '.') }}</td>
                    <td>{{ $item->produk_terjual }}</td>
                    <td>{{ $item->stok_produk }}</td>
                    <td>{{ $item->kategori_produk }}</td>
                    <td>
                        <a href="{{ route('produk.edits', $item->kode_produk) }}">
                            <img src="{{ asset('assets/img/penjual/edit.png') }}" alt="Edit">
                        </a> |
                        
                        <a href="#" onclick="confirmDelete('{{ route('produk.destroys', $item) }}')">
                            <img src="{{ asset('assets/img/penjual/delete.png') }}" alt="Hapus">
                        </a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

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
