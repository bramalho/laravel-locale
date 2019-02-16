<?php

use BRamalho\LaravelLocale\Http\Controller\LocaleController;

Route::post('/locale', [LocaleController::class, 'index'])->name('locale');
