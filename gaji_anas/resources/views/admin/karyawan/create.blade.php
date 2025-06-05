<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Tambah Data Pegawai') }}
        </h2>
    </x-slot>

    <div class="py-6">
        <div class="max-w-4xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white p-6 rounded shadow-md">
                @if ($errors->any())
                    <div class="mb-4 text-sm text-red-600">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <form action="{{ route('karyawan.store') }}" method="POST">
                    @csrf

                    <div class="mb-4">
                        <label for="name" class="block font-medium text-sm text-gray-700">Nama Lengkap</label>
                        <input type="text" name="name" id="name" class="form-input rounded-md shadow-sm mt-1 block w-full" required>
                    </div>

                    <div class="mb-4">
                        <label for="email" class="block font-medium text-sm text-gray-700">Email</label>
                        <input type="email" name="email" id="email" class="form-input rounded-md shadow-sm mt-1 block w-full" required>
                    </div>

                    <div class="mb-4">
                        <label for="password" class="block font-medium text-sm text-gray-700">Password</label>
                        <input type="password" name="password" id="password" class="form-input rounded-md shadow-sm mt-1 block w-full" required>
                    </div>

                    <div class="mb-4">
                        <label for="phone" class="block font-medium text-sm text-gray-700">Nomor HP (Opsional)</label>
                        <input type="text" name="phone" id="phone" class="form-input rounded-md shadow-sm mt-1 block w-full">
                    </div>

                    <input type="hidden" name="role" value="karyawan">

                    <div class="flex justify-end">
                        <a href="{{ route('karyawan.index') }}" class="inline-flex items-center px-4 py-2 bg-gray-200 text-gray-700 rounded-md hover:bg-gray-300 mr-2">
                            Batal
                        </a>
                        <button type="submit" class="inline-flex items-center px-4 py-2 bg-blue-600 text-white rounded-md hover:bg-blue-700">
                            Simpan
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
