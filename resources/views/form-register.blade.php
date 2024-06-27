<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Form Registrasi
        </h2>
    </x-slot>

    <div class="py-8">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-6">
                @if (session('success'))
                    <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative"
                        role="alert">
                        <strong class="font-bold">Sukses!</strong>
                        <span class="block sm:inline">{{ session('success') }}</span>
                    </div>
                @endif

                <form action="{{ route('register') }}" method="POST" class="w-1/2 items-center"> <!-- Mengatur lebar form menjadi setengah dari lebar maksimum -->
                    @csrf

                    <div class="mb-4">
                        <label for="name" class="block text-sm font-medium text-gray-700">Nama</label>
                        <x-input type="text" name="name" id="name"
                            class="form-input rounded-md shadow-sm mt-1 block w-full" required />
                    </div>

                    <div class="mb-4">
                        <label for="phone" class="block text-sm font-medium text-gray-700">Nomor Telepon</label>
                        <x-input type="text" name="phone" id="phone"
                            class="form-input rounded-md shadow-sm mt-1 block w-full" required />
                    </div>

                    <div class="mb-4">
                        <x-label for="jenjang" class="block text-sm font-medium text-gray-700">Jenjang</x-label>
                        <select name="jenjang" id="jenjang" class="form-select rounded-md shadow-sm mt-1 block w-full"
                            required>
                            <option value="SD">SD</option>
                            <option value="SMP">SMP</option>
                            <option value="SMA">SMA</option>
                            <option value="UMUM">UMUM</option>
                        </select>
                    </div>

                    <div class="mb-4">
                        <x-label for="parent_phone" class="block text-sm font-medium text-gray-700">Nomor Telepon Orang
                            Tua</x-label>
                        <x-input type="text" name="parent_phone" id="parent_phone"
                            class="form-input rounded-md shadow-sm mt-1 block w-full" required />
                    </div>

                    <div class="mb-4">
                        <x-label for="school" class="block text-sm font-medium text-gray-700">Asal Sekolah</x-label>
                        <x-input type="text" name="school" id="school"
                            class="form-input rounded-md shadow-sm mt-1 block w-full" required />
                    </div>

                    <div class="flex items-center justify-end mt-4">
                        <button type="submit"
                            class="bg-blue-500 text-black px-4 py-2 rounded-md hover:bg-blue-600 focus:outline-none focus:bg-blue-600">
                            Daftar
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
