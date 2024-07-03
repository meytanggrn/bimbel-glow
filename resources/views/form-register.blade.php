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
                    <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative" role="alert">
                        <strong class="font-bold">Sukses!</strong>
                        <span class="block sm:inline">{{ session('success') }}</span>
                    </div>
                @endif

                <form action="{{ url('/payment') }}" method="POST" class="w-full items-center">
                    @csrf

                    <div class="mb-4">
                        <label for="name" class="block text-sm font-medium text-gray-700">Nama</label>
                        <x-input type="text" name="name" id="name" class="form-input rounded-md shadow-sm mt-1 block w-full" required />
                    </div>

                    <div class="mb-4">
                        <label for="phone" class="block text-sm font-medium text-gray-700">Nomor Telepon</label>
                        <x-input type="text" name="phone" id="phone" class="form-input rounded-md shadow-sm mt-1 block w-full" required />
                    </div>

                    <div class="mb-4">
                        <x-label for="jenjang" class="block text-sm font-medium text-gray-700">Jenjang</x-label>
                        <select name="jenjang" id="jenjang" class="form-select rounded-md shadow-sm mt-1 block w-full" required>
                            <option value="">Pilih Jenjang</option>
                            <option value="SD">SD</option>
                            <option value="SMP">SMP</option>
                            <option value="SMA">SMA</option>
                            <option value="UMUM">UMUM</option>
                        </select>
                    </div>

                    <div class="mb-4">
                        <x-label for="subjects" class="block text-sm font-medium text-gray-700">Mata Pelajaran</x-label>
                        <div id="subjects-container">
                            <!-- Checkbox untuk mata pelajaran akan diisi oleh JavaScript -->
                        </div>
                    </div>

                    <div class="mb-4">
                        <x-label for="parent_phone" class="block text-sm font-medium text-gray-700">Nomor Telepon Orang Tua</x-label>
                        <x-input type="text" name="parent_phone" id="parent_phone" class="form-input rounded-md shadow-sm mt-1 block w-full" required />
                    </div>

                    <div class="mb-4">
                        <x-label for="school" class="block text-sm font-medium text-gray-700">Asal Sekolah</x-label>
                        <x-input type="text" name="school" id="school" class="form-input rounded-md shadow-sm mt-1 block w-full" required />
                    </div>

                    <div class="mb-4">
                        <x-label for="class_type" class="block text-sm font-medium text-gray-700">Tipe Kelas</x-label>
                        <select name="class_type" id="class_type" class="form-select rounded-md shadow-sm mt-1 block w-full" required>
                            <option value="private">Private</option>
                            <option value="kelompok">Kelompok</option>
                        </select>
                    </div>

                    <div id="group_textarea" class="mb-4 hidden">
                        <x-label for="group_info" class="block text-sm font-medium text-gray-700">Informasi Kelompok</x-label>
                        <textarea name="group_info" id="group_info" class="form-textarea rounded-md shadow-sm mt-1 block w-full"></textarea>
                    </div>

                    <div class="flex items-center justify-end mt-4">
                        <button type="submit" class="bg-blue-500 text-black px-4 py-2 rounded-md hover:bg-blue-600 focus:outline-none focus:bg-blue-600">
                            Daftar
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const classTypeSelect = document.getElementById('class_type');
            const groupTextarea = document.getElementById('group_textarea');

            const jenjangSelect = document.getElementById('jenjang');
            const subjectsContainer = document.getElementById('subjects-container');

            const subjectsOptions = {
                'SD': ['Matematika', 'Bahasa Indonesia', 'IPA'],
                'SMP': ['Matematika', 'Fisika', 'Biologi', 'Kimia', 'Bahasa Inggris'],
                'SMA': ['Matematika', 'Fisika', 'Biologi', 'Kimia', 'Bahasa Inggris'],
                'UMUM': ['SNBT 8X', 'SNBT 12X', 'Kedinasan']
            };

            jenjangSelect.addEventListener('change', function() {
                const selectedJenjang = jenjangSelect.value;
                const options = subjectsOptions[selectedJenjang] || [];

                // Clear the current options
                subjectsContainer.innerHTML = '';

                // Add new options
                options.forEach(function(subject) {
                    const checkboxWrapper = document.createElement('div');
                    checkboxWrapper.classList.add('flex', 'items-center', 'mb-2');

                    const checkbox = document.createElement('input');
                    checkbox.type = 'checkbox';
                    checkbox.name = 'subjects[]';
                    checkbox.value = subject;
                    checkbox.classList.add('form-checkbox', 'h-4', 'w-4', 'text-indigo-600', 'transition', 'duration-150', 'ease-in-out');

                    const label = document.createElement('label');
                    label.htmlFor = subject;
                    label.classList.add('ml-2', 'block', 'text-sm', 'leading-5', 'text-gray-700');
                    label.textContent = subject;

                    checkboxWrapper.appendChild(checkbox);
                    checkboxWrapper.appendChild(label);

                    subjectsContainer.appendChild(checkboxWrapper);
                });
            });

            classTypeSelect.addEventListener('change', function() {
                if (classTypeSelect.value === 'kelompok') {
                    groupTextarea.classList.remove('hidden');
                } else {
                    groupTextarea.classList.add('hidden');
                }
            });
        });
    </script>
</x-app-layout>
