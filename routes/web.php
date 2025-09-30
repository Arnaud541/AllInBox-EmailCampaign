<?php

use App\Http\Controllers\EmailCampaignController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/email-campaign/create', function () {
    return view('email-campaign.create');
});

Route::post('/email-campaign/store', [EmailCampaignController::class, 'store'])->name('email-campaign.store');
