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
                    <h3 class="text-2xl font-semibold mb-4 text-center">Glow Math Course</h3>
                    <p class="text-gray-700 leading-relaxed text-center">
                        GLOW Math Course merupakan lembaga bimbingan yang berdiri pada tahun 2017, kami telah menjadi
                        mitra terpercaya dalam membimbing lebih dari 500 siswa dalam meraih kesuksesan akademis dan
                        membentuk karakter yang unggul. Dengan mengedepankan kualitas pemahaman serta pendidikan
                        karakter,
                        GLOW Math Course selalu berusaha untuk terus menjadi pusat lembaga bimbingan belajar yang unggul
                        dalam mencetak generasi penerus yang berprestasi dan berintegritas tinggi.
                    </p>
                </div>

                <!-- Container for Visi Misi -->
                <div class="mb-10 py-6">
                    <h3 class="text-2xl font-semibold mb-4 text-center">Visi Misi</h3>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <div class="bg-gray-100 p-4 rounded-lg shadow-md">
                            <h4 class="text-lg font-semibold mb-4 text-center">Visi</h4>
                            <p class="text-gray-700">GLOW Math Course memiliki visi menjadi pusat lembaga bimbingan
                                belajar yang unggul
                                dalam mencetak generasi penerus yang berprestasi dan berintegritas tinggi dengan
                                mengedepankan kualitas pemahaman siswa dan pendidikan karakter.</p>
                        </div>
                        <div class="bg-gray-100 p-4 rounded-lg shadow-md">
                            <h4 class="text-lg font-semibold mb-2 text-center">Misi</h4>
                            <ul class="list-disc list-inside space-y-2">
                                <li class="flex items-start py-2">
                                    <div
                                        class="w-10 h-10 flex justify-center items-center bg-green-500 text-black rounded-md text-lg font-bold">
                                        1</div>
                                    <span class="text-gray-700">Memberikan pelayanan yang berkualitas untuk meningkatkan
                                        pemahaman dan prestasi akademis siswa.</span>
                                </li>
                                <li class="flex items-start py-2">
                                    <div
                                        class="w-10 h-10 flex justify-center items-center bg-green-500 text-black rounded-md text-lg font-bold">
                                        2</div>
                                    <span class="text-gray-700">Mengembangkan metode pembelajaran yang inovatif yang
                                        sesuai dengan kebutuhan individu dan kurikulum terkini.</span>
                                </li>
                                <li class="flex items-start py-2">
                                    <div
                                        class="w-10 h-10 flex justify-center items-center bg-green-500 text-black rounded-md text-lg font-bold">
                                        3</div>
                                    <span class="text-gray-700">Menyediakan lingkungan belajar yang nyaman dan mendukung
                                        untuk meningkatkan motivasi dan konsentrasi belajar siswa.</span>
                                </li>
                                <li class="flex items-start py-2 mb-4">
                                    <div
                                        class="w-10 h-10 flex justify-center items-center bg-green-500 text-black rounded-md text-lg font-bold">
                                        4</div>
                                    <span class="text-gray-700">Melakukan evaluasi dan peningkatan yang berkelanjutan
                                        dalam semua aspek layanan bimbingan belajar.</span>
                                </li>
                            </ul>
                        </div>

                    </div>
                </div>

                <!-- Container for List of Mentors -->
                {{-- <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                    <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-6">
                        <div x-data="{ slide: 0, totalSlides: {{ $mentors->count() }} }">
                            <h3 class="text-2xl font-semibold mb-4">Kenalan dengan Tentor Hebat GLOW, Yuk!</h3>
                            <div class="relative overflow-hidden">
                                <div class="flex transition-transform ease-in-out duration-300 transform -translate-x-full"
                                    :style="'translateX(-' + slide * (100 / totalSlides) + '%)'">
                                    @foreach ($mentors as $mentor)
                                        <div class="w-full sm:w-1/2 lg:w-1/5 px-4">
                                            <div class="bg-gray-100 p-4 rounded-lg shadow-md">
                                                <h4 class="text-lg font-semibold mb-2">{{ $mentor->name }}</h4>
                                                <img src="{{ $mentor->photo }}" alt="{{ $mentor->name }}"
                                                    class="w-full h-32 object-cover rounded-md mb-4">
                                                <p class="text-gray-700">{{ $mentor->description }}</p>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                            <div class="absolute right-0 bottom-0 flex space-x-2 mt-4">
                                <template x-for="n in totalSlides">
                                    <button @click="slide = n - 1"
                                        :class="{ 'bg-gray-800 text-white': slide === n - 1 }"
                                        class="h-4 w-4 rounded-full focus:outline-none"></button>
                                </template>
                            </div>
                        </div>
                    </div>
                </div> --}}
            </div>
        </div>
    </div>
    <x-footer />
</x-app-layout>
