<?php

use App\Components\TextArea;
use App\Livewire\TestForm;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/app/testing', TestForm::class);

