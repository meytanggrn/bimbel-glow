<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Pembayaran
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

                <div>
                    <p>Jenjang: {{ $jenjang }}</p>
                    <p>Mata Pelajaran Dipilih:</p>
                    <ul>
                        @foreach ($selectedSubjects as $subject)
                            <li>{{ $subject }}</li>
                        @endforeach
                    </ul>
                </div>
                <form action="{{ url('/') }}" method="POST" class="w-full items-center">
                    @csrf
                    <div id="subjects-container">
                        @foreach ($subjectPrices as $subjectPrice)
                            <div class="mb-4">
                                <label for="{{ $subjectPrice->subject->name }}" class="block text-sm font-medium text-gray-700">{{ $subjectPrice->subject->name }}</label>
                                <p class="text-gray-700">Harga: {{ $subjectPrice->price }}</p>
                            </div>
                        @endforeach
                    </div>
                    <div class="flex items-center justify-end mt-4">
                        <button type="submit" class="bg-blue-500 text-black px-4 py-2 rounded-md hover:bg-blue-600 focus:outline-none focus:bg-blue-600">
                            Lanjutkan Pembayaran
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
