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

    $data =
        [
            [
                "id" => 1,
                "name" => "Mahmoud",
                "mail" => "mahmoudhosam23@gmail.com",
                "gender" => "male"
            ],
            [
                "id" => 2,
                "name" => "nour",
                "mail" => "nour@gmail.com",
                "gender" => "female"
            ],
            [
                "id" => 3,
                "name" => "mona",
                "mail" => "hi@gmail.com",
                "gender" => "female"
            ],



        ];
    return view('posts.post', ['data' =>  $data]);
});

// show
Route::get('/show/{id}', function ($id) {
    $postshow = [
        "id" => $id,
        "name" => "nour",
        "mail" => "nour@12",
        "gender" => "female"
    ];
    return view('posts.show', $postshow);
})->where('id', '[0-9]+');


// update
Route::get('/edit/{id}', function ($id) {
    $postedit = [
        "id" => $id,
        "name" => "nour",
        "mail" => "nour@12",
        "gender" => "female"
    ];
    return view('posts.edit', $postedit);
});

Route::post('/update', function () {
    return "update page";
});
Route::get('/create', function () {
    return view("posts.create");
});

Route::post('/store', function () {
    return "created page";
});
