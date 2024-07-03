<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Pembayaran
        </h2>
    </x-slot>

    <div class="py-8">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-6">
                <p>Silakan lakukan pembayaran dengan menekan tombol di bawah ini.</p>
                <button id="pay-button" class="bg-blue-500 text-white px-4 py-2 rounded-md hover:bg-blue-600">Bayar Sekarang</button>
                <!-- Menampilkan informasi mata pelajaran yang dipilih -->
                @if (!empty($selectedSubjects))
                    <p>Mata Pelajaran: {{ implode(', ', $selectedSubjects) }}</p>
                @endif
            </div>
        </div>
    </div>

    <!-- Include script untuk Midtrans Snap -->
    <script src="https://app.sandbox.midtrans.com/snap/snap.js" data-client-key="{{ env('MIDTRANS_CLIENT_KEY') }}"></script>
    <script type="text/javascript">
        document.getElementById('pay-button').onclick = function(){
          // SnapToken acquired from previous step
        snap.pay('{{ $transaction->snap_token }}', {
            // Optional
            onSuccess: function(result){
            document.getElementById('result-json').innerHTML += JSON.stringify(result, null, 2);
            },
            // Optional
            onPending: function(result){
            document.getElementById('result-json').innerHTML += JSON.stringify(result, null, 2);
            },
            // Optional
            onError: function(result){
            document.getElementById('result-json').innerHTML += JSON.stringify(result, null, 2);
            }
        });
        };
    </script>
</x-app-layout>
