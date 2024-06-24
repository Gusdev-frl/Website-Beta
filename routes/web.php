<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

//Testing Beta

Route::get('/', function () {
    return view( "Home Page" , [
        'title' => 'Home',
    ]);
});

Route::get('/account', function () {
    return view ('Account', [
        'title'=> 'Account',
        "name" => "Candra Winata",
        "email"=> "farrel.candrawinata@gmail.com",
        "image"=> "kumadai.jpg"        
    ]);
});




Route::get('/post', function () {

    $news_posts = [
    
        [
        "title"=> "Check it out",
            "author"=> "mmm",
            "body"=> "Lorem ipsum dolor sit amet consectetur adipisicing elit. Quasi quos magni, magnam architecto id eligendi reiciendis obcaecati ad, iste exercitationem alias asperiores officia dolor praesentium minima nemo eius dolorum fugit.",
        ]
    
        [
            "title"=> 'First News',
            "author"=> "???",
            "body"=> "Lorem ipsum dolor sit amet consectetur adipisicing elit. Quasi quos magni, magnam architecto id eligendi reiciendis obcaecati ad, iste exercitationem alias asperiores officia dolor praesentium minima nemo eius dolorum fugit.",
        ]
    
        [
            "title"=> "Double Thing",
            "author"=> "zxz",
            "body"=> "Lorem ipsum dolor sit amet consectetur adipisicing elit. Quasi quos magni, magnam architecto id eligendi reiciendis obcaecati ad, iste exercitationem alias asperiores officia dolor praesentium minima nemo eius dolorum fugit.",
        ]
    ]

    return view( "post", [
        "title" => "news",
        "posts" => $news_posts
    ] );
});