<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class HubungiController extends Controller
{
    public function kirim(Request $request)
    {
        // Validasi reCAPTCHA dari Google
        $response = Http::asForm()->post('https://www.google.com/recaptcha/api/siteverify', [
            'secret' => env('NOCAPTCHA_SECRET'),
            'response' => $request->input('g-recaptcha-response'),
        ]);

        // Tampilkan hasil respon Google untuk debugging
        dd($response->json());

        // (Nanti setelah berhasil, kita ubah ini jadi logika kirim pesan)
        return back()->with('success', 'Pesan berhasil dikirim!');
    }
}
