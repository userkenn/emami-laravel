@extends('layouts.template_dashboard_admin')

@section('judul', 'EMAMI - Dashboard Admin')

@section('isi')

<h1>Mengelola Users</h1> <br>
<a href="{{ route('users.createUsers') }}"><button class="tombol-tambah">Tambah User</button></a>
<table>
    <thead>
        <tr>
            <th>User ID</th>
            <th>Username</th>
            <th>Nama Lengkap</th>
            <th>Nomor Telepon</th>
            <th>Role</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        @foreach($users as $user)
            <tr>
                <td>{{ $user->user_id }}</td>
                <td>{{ $user->username }}</td>
                <td>{{ $user->nama_lengkap }}</td>
                <td>{{ $user->nomor_telepon }}</td>
                <td>{{ $user->role }}</td>
                <td>
                    <a href="{{ route('users.editUsers', $user->user_id) }}">
                        <img src="{{ asset('assets/img/penjual/edit.png') }}" alt="Edit">
                    </a> |
                    
                    <a href="#" onclick="confirmDelete('{{ route('users.destroyUsers', $user) }}')">
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