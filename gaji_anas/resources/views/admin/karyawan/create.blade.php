@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Tambah Karyawan Baru</h1>

    {{-- Tampilkan pesan error validasi jika ada --}}
    @if ($errors->any())
        <div style="color: red;">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('karyawan.store') }}" method="POST">
        @csrf
        <div>
            <label for="name">Nama:</label><br>
            <input type="text" name="name" id="name" value="{{ old('name') }}" required>
        </div>
        <br>
        <div>
            <label for="email">Email:</label><br>
            <input type="email" name="email" id="email" value="{{ old('email') }}" required>
        </div>
        <br>
        <div>
            <label for="password">Password:</label><br>
            <input type="password" name="password" id="password" required>
        </div>
        <br>
        <div>
            <label for="password_confirmation">Konfirmasi Password:</label><br>
            <input type="password" name="password_confirmation" id="password_confirmation" required>
        </div>
        <br>
        <button type="submit">Simpan</button>
        <a href="{{ route('karyawan.index') }}">Batal</a>
    </form>
</div>
@endsection
