<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Karyawan;
use Illuminate\Http\Request;

class KaryawanController extends Controller
{
    public function index()
    {
        $karyawans = Karyawan::paginate(10);
        return view('admin.karyawan.index', compact('karyawans'));
    }

    public function create()
    {
        return view('admin.karyawan.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama' => 'required|string|max:255',
            'email' => 'required|email|unique:karyawans,email',
            'posisi' => 'required|string|max:100',
            // tambahkan field lain sesuai kebutuhan
        ]);

        Karyawan::create($validated);

        return redirect()->route('karyawan.index')->with('success', 'Data karyawan berhasil ditambahkan.');
    }

    public function show(Karyawan $karyawan)
    {
        return view('admin.karyawan.show', compact('karyawan'));
    }

    public function edit(Karyawan $karyawan)
    {
        return view('admin.karyawan.edit', compact('karyawan'));
    }

    public function update(Request $request, Karyawan $karyawan)
    {
        $validated = $request->validate([
            'nama' => 'required|string|max:255',
            'email' => 'required|email|unique:karyawans,email,' . $karyawan->id,
            'posisi' => 'required|string|max:100',
        ]);

        $karyawan->update($validated);

        return redirect()->route('karyawan.index')->with('success', 'Data karyawan berhasil diupdate.');
    }

    public function destroy(Karyawan $karyawan)
    {
        $karyawan->delete();
        return redirect()->route('karyawan.index')->with('success', 'Data karyawan berhasil dihapus.');
    }
}
