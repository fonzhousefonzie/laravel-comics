<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('partials.home.index');
})->name('home');

Route::get('/{id}', function ($id) {
    $comics = config('comics');
    $foundcomic = null;
    foreach ($comics as $i => $comic) {
        if ($comic['id'] === intval($id)) {
            $foundcomic = $comic;
            break;
        }
    }
    if(is_null($foundcomic)){
        abort("404");
    }
    return view("partials.home._comic", [
        "comic" => $foundcomic
    ]);
})->name('home.comic');
