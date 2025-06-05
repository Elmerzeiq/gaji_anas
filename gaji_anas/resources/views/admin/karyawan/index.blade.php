@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Daftar Pegawai</h1>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <a href="{{ route('karyawan.create') }}" class="btn btn-primary mb-3">Tambah Pegawai</a>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Nama</th>
                <th>NIP</th>
                <th>Jabatan</th>
                <th>Email</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($karyawans as $karyawan)
                <tr>
                    <td>{{ $karyawan->nama }}</td>
                    <td>{{ $karyawan->nip }}</td>
                    <td>{{ $karyawan->jabatan }}</td>
                    <td>{{ $karyawan->user->email }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

    {{ $karyawans->links() }}
</div>
@endsection
