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
    return view('welcome');
    $links = \App\Link::all();

    // with()
    return view('welcome')->with('links', $links);

    // dynamic method to name the variable
    return view('welcome')->withLinks($links);
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/submit', function () {
    return view('submit');
});

use Illuminate\Http\Request;

Route::post('/submit', function (Request $request) {
    $data = $request->validate([
        'title' => 'required|max:255',
        'url' => 'required|url|max:255',
        'description' => 'required|max:255',
    ]);

    $link = new \App\Link;
    $link->title = $data['title'];
    $link->url = $data['url'];
    $link->description = $data['description'];

    // Save the model
    $link->save();

    return redirect('/');
});

Route::get('/maps', function() {
    return view('maps');
});


