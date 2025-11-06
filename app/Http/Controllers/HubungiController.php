<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HubungiController extends Controller
{
    public function kirim(Request $request)
    {
        // ✅ Validasi reCAPTCHA
        $request->validate([
            'g-recaptcha-response' => 'required|captcha',
        ], [
            'g-recaptcha-response.required' => 'Captcha harus dicentang.',
            'g-recaptcha-response.captcha' => 'Captcha tidak valid.',
        ]);

        // ✅ Di sini kamu bisa lanjut proses form, misal kirim email
        // Contoh sederhana:
        return back()->with('success', 'Pesan berhasil dikirim!');
    }
}
