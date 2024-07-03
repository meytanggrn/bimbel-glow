<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ $title }}
        </h2>
    </x-slot>

    <div class="py-8">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-teal-300 overflow-hidden shadow-xl sm:rounded-lg p-6">
                
                <div class="flex items-center mb-6">
                    <div>
                        <img src="../../img/register-photo.png" alt="Register" class="w-50 h-50 object-cover rounded-full">
                    </div>
                    <div>
                        <h2 class="text-2xl font-semibold">Daftar Sekarang</h2>
                        <p class="text-gray-600">Ayo daftarkan diri Anda sekarang untuk memulai perjalanan pendidikan bersama kami!</p>
                    </div>
                    <!-- Tempat untuk foto, bisa diisi dengan elemen <img> jika ada foto yang ingin ditampilkan -->

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
                        <img src="../../../img/reg.png" alt="SD Image" class="w-full h-full object-cover rounded-md mb-4">
                        {{-- <h3 class="text-lg font-semibold mb-2 text-center">SD</h3> --}}
                        {{-- <ul class="list-disc list-inside text-center">
                            <li>Calistung, Tematik, Matematika, IPA, IPS</li>
                            <li>Tarif Private Rp. 110.000 Tarif Kelompok Rp. 80.000</li>
                            <li>Kelompok maksimal 6 orang</li>
                        </ul> --}}
                    </div>
                    <div class="bg-gray-100 p-6 rounded-lg shadow-md">
                        <img src="../../../img/smp.png" alt="SMP Image" class="w-full h-full object-cover rounded-md mb-4">
                        {{-- <h3 class="text-lg font-semibold mb-2 text-center">SMP</h3>
                        <ul class="list-disc list-inside text-center">
                            <li>Fasilitas 1</li>
                            <li>Fasilitas 2</li>
                            <li>Fasilitas 3</li>
                        </ul> --}}
                    </div>
                    <div class="bg-gray-100 p-6 rounded-lg shadow-md">
                        <img src="../../../img/sma.png" alt="SMA Image" class="w-full h-full object-cover rounded-md mb-4">
                        {{-- <h3 class="text-lg font-semibold mb-2 text-center">SMA</h3>
                        <ul class="list-disc list-inside text-center">
                            <li>Fasilitas 1</li>
                            <li>Fasilitas 2</li>
                            <li>Fasilitas 3</li>
                        </ul> --}}
                    </div>
                    <div class="bg-gray-100 p-6 rounded-lg shadow-md">
                        <img src="../../../img/dinas.png" alt="UMUM Image" class="w-full h-full object-cover rounded-md mb-4">
                        {{-- <h3 class="text-lg font-semibold mb-2 text-center">UMUM</h3>
                        <ul class="list-disc list-inside text-center">
                            <li>Fasilitas 1</li>
                            <li>Fasilitas 2</li>
                            <li>Fasilitas 3</li>
                        </ul> --}}
                    </div>
                    <div class="bg-gray-100 p-6 rounded-lg shadow-md">
                        <img src="../../../img/snbt_8.png" alt="UMUM Image" class="w-full h-full object-cover rounded-md mb-4">
                        {{-- <h3 class="text-lg font-semibold mb-2 text-center">UMUM</h3>
                        <ul class="list-disc list-inside text-center">
                            <li>Fasilitas 1</li>
                            <li>Fasilitas 2</li>
                            <li>Fasilitas 3</li>
                        </ul> --}}
                    </div>
                    <div class="bg-gray-100 p-6 rounded-lg shadow-md">
                        <img src="../../../img/snbt_12.png" alt="UMUM Image" class="w-full h-full object-cover rounded-md mb-4">
                        {{-- <h3 class="text-lg font-semibold mb-2 text-center">UMUM</h3>
                        <ul class="list-disc list-inside text-center">
                            <li>Fasilitas 1</li>
                            <li>Fasilitas 2</li>
                            <li>Fasilitas 3</li>
                        </ul> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
