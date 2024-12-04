<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use ReCaptcha\ReCaptcha;

class ContactController extends Controller
{
    public function index()
    {
        return view('contact');  // votre vue actuelle
    }

    public function submit(Request $request, ReCaptcha $recaptcha)
    {
        // Validation du captcha
        $response = $recaptcha->verify($request->input('g-recaptcha-response'));

        if (!$response->isSuccess()) {
            return back()->withErrors(['captcha' => 'Veuillez valider le captcha']);
        }

        // Validation des autres champs
        $validated = $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'subject' => 'required',
            'message' => 'required'
        ]);

        // Votre logique d'envoi d'email ou de sauvegarde

        return back()->with('success', 'Message envoyé avec succès!');
    }
}
