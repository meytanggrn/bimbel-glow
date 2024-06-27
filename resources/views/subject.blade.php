<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Pilih Mata Pelajaran
        </h2>
    </x-slot>

    <div class="py-8">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-6">
                <form action="{{ route('subject') }}" method="POST">
                    @csrf

                    <div class="mb-4">
                        <label for="jenjang" class="block text-sm font-medium text-gray-700">Jenjang</label>
                        <select name="jenjang" id="jenjang" class="form-select rounded-md shadow-sm mt-1 block w-full" required>
                            <option value="SD">SD</option>
                            <option value="SMP">SMP</option>
                            <option value="SMA">SMA</option>
                            <option value="Umum">Umum</option>
                        </select>
                    </div>

                    <div class="mb-4" id="matpelContainer">
                        <label for="mata_pelajaran" class="block text-sm font-medium text-gray-700">Mata Pelajaran</label>
                        <select name="mata_pelajaran" id="mata_pelajaran" class="form-select rounded-md shadow-sm mt-1 block w-full" required>
                            <!-- Options akan di-generate menggunakan JavaScript -->
                        </select>
                    </div>

                    <div id="groupSection" class="hidden mb-4">
                        <label for="group_description" class="block text-sm font-medium text-gray-700">Deskripsi Kelompok</label>
                        <textarea name="group_description" id="group_description" rows="3" class="form-textarea mt-1 block w-full rounded-md shadow-sm"></textarea>
                    </div>

                    <div class="flex items-center justify-end mt-4">
                        <x-button type="submit"
                            class="bg-blue-500 text-white px-4 py-2 rounded-md hover:bg-blue-600 focus:outline-none focus:bg-blue-600">
                            Lanjutkan
                        </x-button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script>
        // Ambil elemen-elemen yang dibutuhkan dari DOM
        const jenjangSelect = document.getElementById('jenjang');
        const matpelSelect = document.getElementById('mata_pelajaran');
        const groupSection = document.getElementById('groupSection');

        // Daftar mata pelajaran berdasarkan jenjang
        const mataPelajaran = {
            'SD': ['Matematika', 'Bahasa Indonesia', 'IPA'],
            'SMP': ['Matematika', 'Fisika', 'Biologi', 'Kimia', 'Bahasa Inggris'],
            'SMA': ['Matematika', 'Fisika', 'Biologi', 'Kimia', 'Bahasa Inggris'],
            'Umum': ['SNBT 8X', 'SNBT 12X']
        };

        // Fungsi untuk meng-update pilihan mata pelajaran berdasarkan jenjang yang dipilih
        function updateMataPelajaran(jenjang) {
            // Kosongkan pilihan mata pelajaran sebelumnya
            matpelSelect.innerHTML = '';

            // Buat pilihan baru berdasarkan jenjang yang dipilih
            mataPelajaran[jenjang].forEach(matpel => {
                const option = document.createElement('option');
                option.textContent = matpel;
                option.value = matpel;
                matpelSelect.appendChild(option);
            });

            // Tampilkan atau sembunyikan bagian deskripsi kelompok berdasarkan jenjang
            if (jenjang === 'Umum') {
                groupSection.classList.remove('hidden');
            } else {
                groupSection.classList.add('hidden');
            }
        }

        // Panggil fungsi untuk meng-update mata pelajaran saat halaman dimuat pertama kali
        updateMataPelajaran(jenjangSelect.value);

        // Tambahkan event listener untuk perubahan dropdown jenjang
        jenjangSelect.addEventListener('change', function() {
            updateMataPelajaran(this.value);
        });
    </script>
</x-app-layout>