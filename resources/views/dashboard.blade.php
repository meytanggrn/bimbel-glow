<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Selamat datang di GlowMath Course') }}
        </h2>
    </x-slot>

    <!-- Container untuk foto dan tombol register -->
    <div class="bg-teal-300 py-12">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 flex flex-col items-center justify-center">
            <div class="text-center mb-6">
                <!-- Gambar bisa disesuaikan dengan ukuran dan gaya yang diinginkan -->
                <img src="../../../img/register-photo.png" alt="Welcome Image" class="w-full rounded-lg shadow-md">
            </div>
            <a href="{{ route('register') }}"
                class="bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-4 rounded-md shadow-md">
                Daftar Sekarang
            </a>
        </div>
    </div>


    <!-- Section untuk 4 kotak berisi icon dan penjelasan -->
    <div class="bg-white py-12">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
            <!-- Contoh kotak pertama -->
            <div class="bg-gray-100 p-6 rounded-lg shadow-md flex items-center">
                <div
                    class="w-16 h-16 flex justify-center items-center bg-teal-300 text-black rounded-full text-3xl font-bold mr-4">
                </div>
                <div>
                    <i class="fa-solid fa-book w-50 h-50 flex justify-center items-center"></i>
                    <h3 class="text-xl font-semibold text-gray-800 mb-2">Pelayanan Berkualitas</h3>
                    <p class="text-gray-700">Sistem pembelajaran yang fleksibel dengan metode sesuai kebutuhan individu
                        dilengkapi dengan pilihan paket yang beragam dijamin buat kamu makin betah untuk belajar.</p>
                </div>
            </div>
            <div class="bg-gray-100 p-6 rounded-lg shadow-md flex items-center">
                <div
                    class="w-16 h-16 flex justify-center items-center bg-teal-300 text-black rounded-full text-3xl font-bold mr-4">
                </div>
                <div>
                    <i class="fa-solid fa-book w-50 h-50 flex justify-center items-center"></i>
                    <h3 class="text-xl font-semibold text-gray-800 mb-2">Siap Bantai Ujian</h3>
                    <p class="text-gray-700">Beragam latihan soal yang diberikan akan bantu memaksimalkan persiapanmu
                        dalam menghadapi berbagai jenis ujian seperti UTS, UAS, UTBK, Ujian Mandiri, hingga Tes
                        Kedinasan.</p>
                </div>
            </div>
            <div class="bg-gray-100 p-6 rounded-lg shadow-md flex items-center">
                <div
                    class="w-16 h-16 flex justify-center items-center bg-teal-300 text-black rounded-full text-3xl font-bold mr-4">
                </div>
                <div>
                    <i class="fa-solid fa-book w-50 h-50 flex justify-center items-center"></i>
                    <h3 class="text-xl font-semibold text-gray-800 mb-2">Tentor Friendly</h3>
                    <p class="text-gray-700">Tentor bersahabat dan menciptakan lingkungan belajar yang fun akan membantu
                        kamu memahami pelajaran sesuai kebutuhanmu sebagai siswa.</p>
                </div>
            </div>
            <div class="bg-gray-100 p-6 rounded-lg shadow-md flex items-center">
                <div
                    class="w-16 h-16 flex justify-center items-center bg-teal-300 text-black rounded-full text-3xl font-bold mr-4">
                </div>
                <div>
                    <i class="fa-solid fa-book w-50 h-50 flex justify-center items-center"></i>
                    <h3 class="text-xl font-semibold text-gray-800 mb-2">Informasi Up-To-Date</h3>
                    <p class="text-gray-700">Bingung dengan peralihan sistem pembelajaran yang berubah-ubah? Tenang aja,
                        tentor akan bantu kamu untuk cari tau segala informasi terkait sekolah dan info pendidikan
                        lanjut lainnya.</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Section untuk fasilitas-->


    <!-- Section untuk carousel testimoni -->
    <div class="bg-white py-12">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <!-- Tambahkan carousel testimoni disini -->
            <div class="owl-carousel owl-theme">
                <!-- Contoh item carousel -->
                <div class="item">
                    <img src="../../../img/t-01.jpg" alt="Testimonial 1" class="w-full rounded-lg shadow-md">
                </div>
                <div class="item">
                    <img src="../../../img/t-02.jpg" alt="Testimonial 2" class="w-full rounded-lg shadow-md">
                </div>
                <div class="item">
                    <img src="../../../img/t-03.jpg" alt="Testimonial 3" class="w-full rounded-lg shadow-md">
                </div>
                <div class="item">
                    <img src="../../../img/t-04.jpg" alt="Testimonial 4" class="w-full rounded-lg shadow-md">
                </div>
                <div class="item">
                    <img src="../../../img/t-05.jpg" alt="Testimonial 5" class="w-full rounded-lg shadow-md">
                </div>
                <div class="item">
                    <img src="../../../img/t-06.jpg" alt="Testimonial 6" class="w-full rounded-lg shadow-md">
                </div>
                <div class="item">
                    <img src="../../../img/t-07.jpg" alt="Testimonial 7" class="w-full rounded-lg shadow-md">
                </div>
                <div class="item">
                    <img src="../../../img/t-08.jpg" alt="Testimonial 8" class="w-full rounded-lg shadow-md">
                </div>
                <!-- Pastikan jumlah gambar sesuai dengan jumlah yang ingin ditampilkan -->
            </div>
        </div>
    </div>

    <script>
        $(document).ready(function() {
            $(".owl-carousel").owlCarousel({
                loop: true,
                margin: 10,
                nav: true,
                dots: false,
                autoplay: true, // Menambahkan autoplay
                autoplayTimeout: 3000, // Durasi interval autoplay (dalam milidetik)
                responsive: {
                    0: {
                        items: 1
                    },
                    600: {
                        items: 2
                    },
                    1000: {
                        items: 4
                    }
                }
            });
        });
    </script>
    <x-footer />
</x-app-layout>
