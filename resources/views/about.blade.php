@php
    $mentors = [
        ['name' => 'John Doe', 'photo' => 'path-to-photo.jpg', 'description' => 'Deskripsi John Doe'],
        ['name' => 'Jane Smith', 'photo' => 'path-to-photo.jpg', 'description' => 'Deskripsi Jane Smith'],
        ['name' => 'Jane Smith', 'photo' => 'path-to-photo.jpg', 'description' => 'Deskripsi Jane Smith'],
        ['name' => 'Jane Smith', 'photo' => 'path-to-photo.jpg', 'description' => 'Deskripsi Jane Smith'],
        ['name' => 'Jane Smith', 'photo' => 'path-to-photo.jpg', 'description' => 'Deskripsi Jane Smith'],
        // tambahkan data mentor lainnya
    ];
@endphp
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Tentang Kami
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-6">
                <!-- Container for Glow Math -->
                <div class="mb-8">
                    <h3 class="text-2xl font-semibold mb-4">Glow Math</h3>
                    <p class="text-gray-700 leading-relaxed">
                        Deskripsi singkat tentang Glow Math, misalnya, sejarah, tujuan, dan filosofi.
                    </p>
                </div>

                <!-- Container for Visi Misi -->
                <div class="mb-8">
                    <h3 class="text-2xl font-semibold mb-4">Visi Misi</h3>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <div class="bg-gray-100 p-4 rounded-lg shadow-md">
                            <h4 class="text-lg font-semibold mb-2">Visi</h4>
                            <p class="text-gray-700">Deskripsi visi Glow Math.</p>
                        </div>
                        <div class="bg-gray-100 p-4 rounded-lg shadow-md">
                            <h4 class="text-lg font-semibold mb-2">Misi</h4>
                            <p class="text-gray-700">Deskripsi misi Glow Math.</p>
                        </div>
                    </div>
                </div>

                <!-- Container for List of Mentors -->
                <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                    <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-6">
                        <!-- Container for List of Mentors -->
                        <div x-data="{ slide: 0, totalSlides: 4 }">
                            <h3 class="text-2xl font-semibold mb-4">List Mentor</h3>
                            <div class="relative overflow-hidden">
                                <div class="flex transition-transform ease-in-out duration-300 transform -translate-x-full" :style="'translateX(-' + slide * (100 / totalSlides) + '%)'">
                                    @foreach ($mentors as $mentor)
                                        <div class="w-full sm:w-1/2 lg:w-1/5 px-4">
                                            <div class="bg-gray-100 p-4 rounded-lg shadow-md">
                                                <h4 class="text-lg font-semibold mb-2">{{ $mentor['name'] }}</h4>
                                                <img src="{{ $mentor['photo'] }}" alt="{{ $mentor['name'] }}" class="w-full h-32 object-cover rounded-md mb-4">
                                                <p class="text-gray-700">{{ $mentor['description'] }}</p>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                            <div class="absolute right-0 bottom-0 flex space-x-2 mt-4">
                                <template x-for="n in totalSlides">
                                    <button @click="slide = n - 1" :class="{ 'bg-gray-800 text-white': slide === n - 1 }" class="h-4 w-4 rounded-full focus:outline-none"></button>
                                </template>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <x-footer />
</x-app-layout>
