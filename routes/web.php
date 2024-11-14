<?php

use Illuminate\Support\Facades\Route;
use Psr\Http\Message\ServerRequestInterface;

Route::get('/', function () {
    return view('welcome');
});

Route::post('/', function () {
    return ['request' => app()->make(ServerRequestInterface::class)->getParsedBody()];
});
