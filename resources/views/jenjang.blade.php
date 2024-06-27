<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ $title }}
        </h2>
    </x-slot>

    <div class="py-8">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-6">
                <!-- Bagian Register -->
                <div class="flex justify-between items-center mb-6">
                    <div>
                        <h2 class="text-2xl font-semibold">Daftar Sekarang</h2>
                        <p class="text-gray-600">Ayo daftarkan diri Anda sekarang untuk memulai perjalanan pendidikan bersama kami!</p>
                    </div>
                    <!-- Tempat untuk foto, bisa diisi dengan elemen <img> jika ada foto yang ingin ditampilkan -->
                    <div>
                        <!-- Contoh placeholder untuk foto -->
                        <img src="path-to-register-image.jpg" alt="Register Image" class="w-24 h-24 object-cover rounded-full">
                    </div>
                    <div class="mt-8 text-center">
                        <a href="{{ route('form-register') }}" class="inline-block bg-blue-500 hover:bg-blue-600 text-white px-4 py-2 rounded-md">
                            Register
                        </a>
                    </div>
                    {{-- <x-button href="{{ route('register') }}" class="inline-block bg-blue-500 hover:bg-blue-600 text-white px-4 py-2 rounded-md">
                        Register
                    </x-button> --}}
                </div>

                <!-- Kotak-kotak Jenjang -->
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                    <div class="bg-gray-100 p-6 rounded-lg shadow-md">
                        <img src="path-to-sd-image.jpg" alt="SD Image" class="w-full h-32 object-cover rounded-md mb-4">
                        <h3 class="text-lg font-semibold mb-2 text-center">SD</h3>
                        <ul class="list-disc list-inside text-center">
                            <li>Fasilitas 1</li>
                            <li>Fasilitas 2</li>
                            <li>Fasilitas 3</li>
                        </ul>
                    </div>
                    <div class="bg-gray-100 p-6 rounded-lg shadow-md">
                        <img src="path-to-smp-image.jpg" alt="SMP Image" class="w-full h-32 object-cover rounded-md mb-4">
                        <h3 class="text-lg font-semibold mb-2 text-center">SMP</h3>
                        <ul class="list-disc list-inside text-center">
                            <li>Fasilitas 1</li>
                            <li>Fasilitas 2</li>
                            <li>Fasilitas 3</li>
                        </ul>
                    </div>
                    <div class="bg-gray-100 p-6 rounded-lg shadow-md">
                        <img src="path-to-sma-image.jpg" alt="SMA Image" class="w-full h-32 object-cover rounded-md mb-4">
                        <h3 class="text-lg font-semibold mb-2 text-center">SMA</h3>
                        <ul class="list-disc list-inside text-center">
                            <li>Fasilitas 1</li>
                            <li>Fasilitas 2</li>
                            <li>Fasilitas 3</li>
                        </ul>
                    </div>
                    <div class="bg-gray-100 p-6 rounded-lg shadow-md">
                        <img src="path-to-umum-image.jpg" alt="UMUM Image" class="w-full h-32 object-cover rounded-md mb-4">
                        <h3 class="text-lg font-semibold mb-2 text-center">UMUM</h3>
                        <ul class="list-disc list-inside text-center">
                            <li>Fasilitas 1</li>
                            <li>Fasilitas 2</li>
                            <li>Fasilitas 3</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
