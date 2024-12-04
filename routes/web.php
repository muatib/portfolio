<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Mail\ContactMail;
use Illuminate\Support\Facades\Mail;
use ReCaptcha\ReCaptcha;

Route::get('/', function () {
    return view('index');
})->name('home');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::post('/contact-submit', function (Request $request, ReCaptcha $recaptcha) {
    // Vérification du captcha
    $response = $recaptcha->verify($request->input('g-recaptcha-response'));

    if (!$response->isSuccess()) {
        return back()->withErrors(['captcha' => 'Veuillez valider le captcha']);
    }

    $request->validate([
        'name' => 'required',
        'email' => 'required|email',
        'subject' => 'required',
        'message' => 'required'
    ]);

    $data = $request->all();

    try {
        Mail::to('vincdubois14@gmail.com')->send(new ContactMail($data));
        return redirect()->back()->with('success', 'Message envoyé avec succès!');
    } catch (\Exception $e) {
        return redirect()->back()->with('error', 'Erreur: ' . $e->getMessage());
    }
})->name('contact.submit');
