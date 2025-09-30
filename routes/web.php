<?php

use App\Http\Controllers\EmailCampaignController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::controller(EmailCampaignController::class)->group(function () {
    Route::get('/email-campaign', 'index')->name('email-campaign.index');
    Route::get('/email-campaign/create', 'create')->name('email-campaign.create');
    Route::post('/email-campaign/store', 'store')->name('email-campaign.store');
});
