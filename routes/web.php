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

 // Protfolio Controller.................. 

Route::get('/', 'ProtController@HomeShow');

Route::get('/home', 'ProtController@HomeShow');

Route::get('/about-us', 'ProtController@AboutUsShow');

Route::get('/services', 'ProtController@ServicesShow');

Route::get('/portfolio', 'ProtController@PortfolioShow');

Route::get('/elements', 'ProtController@ElementsShow');

Route::get('/blog', 'ProtController@BlogShow');

Route::get('/single-blog', 'ProtController@SingleBlogShow');

Route::get('/blog-details', 'ProtController@BlogDetailsShow');


// Contact Controller

Route::get('/contact', 'ContactController@index');

Route::post('/contact', 'ContactController@store');


