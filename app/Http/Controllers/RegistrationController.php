<?php

namespace App\Http\Controllers;

use Midtrans\Snap;
use Midtrans\Config;
use Midtrans\Notification;
use Illuminate\Http\Request;
use App\Models\Registration; 

class RegistrationController extends Controller
{
    public function showRegistrationForm()
    {
        return view('form-register');
    }

    public function processRegistration(Request $request)
    {
        // Validasi input
        $request->validate([
            'name' => 'required|string|max:255',
            'phone' => 'required|string|max:255',
            'jenjang' => 'required|string',
            'parent_phone' => 'required|string|max:255',
            'school' => 'required|string|max:255',
            'class_type' => 'required|string',
            'subjects' => 'required|array',
        ]);

        // Simpan data registrasi ke database (contoh menggunakan model Registration)
        $registration = Registration::create([
            'name' => $request->name,
            'phone' => $request->phone,
            'jenjang' => $request->jenjang,
            'parent_phone' => $request->parent_phone,
            'school' => $request->school,
            'class_type' => $request->class_type,
            'group_info' => $request->class_type == 'kelompok' ? $request->group_info : 'private',
            'subjects' => json_encode($request->subjects),
        ]);

        $params = [
            'transaction_details' => [
                'order_id' => $registration->id,
                'gross_amount' => 100000, // amount in IDR
            ],
            'customer_details' => [
                'first_name' => $registration->name,
                'email' => 'customer@example.com',
                'phone' => $registration->phone,
            ],
        ];

        // Redirect ke halaman lain atau tampilkan pesan sukses
        $snapToken = Snap::getSnapToken($params);

        return view('payment', compact('registration', 'snapToken'));
    }

    public function __construct()
    {
        // Set Midtrans configuration
        Config::$serverKey = config('services.midtrans.SB-Mid-server-D8wG47EQNhcMavRpQLjNwjh_');
        Config::$isProduction = config('services.midtrans.is_production');
        Config::$isSanitized = true;
        Config::$is3ds = true;
    }

    public function payment(Request $request)
    {
        $notif = new Notification();

        $transaction = $notif->transaction_status;
        $type = $notif->payment_type;
        $orderId = $notif->order_id;
        $fraud = $notif->fraud_status;

        $registration = Registration::findOrFail($orderId);

        if ($transaction == 'capture') {
            if ($type == 'credit_card') {
                if ($fraud == 'challenge') {
                    // Payment status challenge
                    $registration->update(['status' => 'challenge']);
                } else {
                    // Payment status success
                    $registration->update(['status' => 'success']);
                }
            }
        } elseif ($transaction == 'settlement') {
            // Payment status settlement
            $registration->update(['status' => 'settlement']);
        } elseif ($transaction == 'pending') {
            // Payment status pending
            $registration->update(['status' => 'pending']);
        } elseif ($transaction == 'deny') {
            // Payment status deny
            $registration->update(['status' => 'deny']);
        } elseif ($transaction == 'expire') {
            // Payment status expire
            $registration->update(['status' => 'expire']);
        } elseif ($transaction == 'cancel') {
            // Payment status cancel
            $registration->update(['status' => 'cancel']);
        }

        return;
    }
}
