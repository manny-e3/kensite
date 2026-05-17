<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/services', function () {
    return view('services');
})->name('services');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

// Service Detail Routes
Route::prefix('services')->group(function () {
    Route::get('/transportation-haulage', function () { return view('services.transportation_haulage'); })->name('services.transportation');
    Route::get('/warehousing', function () { return view('services.warehousing'); })->name('services.warehousing');
    Route::get('/packing', function () { return view('services.packing'); })->name('services.packing');
    Route::get('/hazardous-materials', function () { return view('services.hazardous_materials'); })->name('services.hazardous');
    Route::get('/air-freight', function () { return view('services.air_freight'); })->name('services.air_freight');
    Route::get('/oversized-freight', function () { return view('services.oversized_freight'); })->name('services.oversized');
    Route::get('/international-ocean', function () { return view('services.international_ocean'); })->name('services.ocean');
    Route::get('/home-location', function () { return view('services.home_location'); })->name('services.home_location');
    Route::get('/crating', function () { return view('services.crating'); })->name('services.crating');
});

Route::post('/contact', function (\Illuminate\Http\Request $request) {
    $data = $request->validate([
        'name' => 'required',
        'email' => 'required|email',
        'phone' => 'required',
        'message' => 'required',
    ]);

    \Illuminate\Support\Facades\Mail::raw(
        "You have received a new contact form submission.\n\n" .
        "Name: {$data['name']}\n" .
        "Email: {$data['email']}\n" .
        "Phone: {$data['phone']}\n\n" .
        "Message:\n{$data['message']}", 
        function ($message) use ($data) {
            $message->to('amdin@kenrelocation.com')
                    ->subject('New Contact Form Submission');
            $message->replyTo($data['email'], $data['name']);
        }
    );

    return back()->with('success', 'Your message was sent successfully.');
});
