<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes - RZ Digital Creative Company Profile Landing Page
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('rz-digital.index');
})->name('home');

Route::get('/company-profile', function () {
    return view('rz-digital.index');
})->name('company-profile');

Route::get('/rz-digital', function () {
    return view('rz-digital.index');
})->name('rz-digital');

/*
|--------------------------------------------------------------------------
| SEO: sitemap.xml
|--------------------------------------------------------------------------
| Dilayani lewat Laravel supaya URL selalu ikut APP_URL (http/https, domain).
| Daftarkan https://rzdigitalcreative.my.id/sitemap.xml di Google Search Console.
*/
Route::get('/sitemap.xml', function () {
    $lastmod = now()->toAtomString();

    $urls = [
        ['loc' => rtrim(route('home'), '/') . '/', 'priority' => '1.0', 'changefreq' => 'weekly'],
    ];

    $xml = view('sitemap', compact('urls', 'lastmod'))->render();

    return response($xml, 200, ['Content-Type' => 'application/xml; charset=UTF-8']);
})->name('sitemap');


// Google Search Console verification file served via Laravel route.
Route::get('/google1c7e1bac881571e0.html', function () {
    return response('google-site-verification: google1c7e1bac881571e0.html')
        ->header('Content-Type', 'text/html; charset=UTF-8');
});
