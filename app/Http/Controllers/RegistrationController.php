<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Registration; // Sesuaikan dengan model Registrasi yang Anda buat

class RegistrationController extends Controller
{
    public function showRegistrationForm()
    {
        return view('form-register');
    }

    public function processRegistration(Request $request)
    {
        // Validasi input
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'phone' => 'required|string|max:20',
            'jenjang' => 'required|string|in:SD,SMP,SMA,UMUM', // Ubah sesuai pilihan jenjang yang ada
            'parent_phone' => 'required|string|max:20',
            'school' => 'required|string|max:255',
        ]);

        // Simpan data registrasi ke database (contoh menggunakan model Registration)
        $registration = new Registration();
        $registration->name = $validatedData['name'];
        $registration->phone = $validatedData['phone'];
        $registration->jenjang = $validatedData['jenjang'];
        $registration->parent_phone = $validatedData['parent_phone'];
        $registration->school = $validatedData['school'];
        $registration->save();

        // Redirect ke halaman lain atau tampilkan pesan sukses
        return redirect('subject')->route('subject')->with('success', 'Registrasi berhasil!');
    }
}
