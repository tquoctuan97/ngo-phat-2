<?php
use AppHttpControllers\HomeContronller;
use AppHttpControllers\PageContronller;

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
Route::get('/', [
    'as'=>'trang-chu',
    'uses'=>'HomeController@getIndex'
]
); 

//Route::get('/','HomeController@getSlider');
Route::get('order', [
    'as'=>'order',
    'uses'=>'HomeController@getOrder'
]
); 
Route::get('/dich-vu', [
    'as'=>'services',
    'uses'=>'HomeController@Services'
]
);
Route::get('/danh-muc-bai-viet', [
    'as'=>'posts',
    'uses'=>'HomeController@Post'
]
);  

Route::get('/tin-tuc/{id}', [
    'as'=>'post',
    'uses'=>'HomeController@getPost',
]
);
Route::get('/dich-vu/{id}', [
    'as'=>'service',
    'uses'=>'HomeController@getService',
]
);
Route::get('about', [
    'as'=>'about',
    'uses'=>'HomeController@about'
]
);
Route::get('lien-he',[
    'as'=>'form',
    'uses'=> 'HomeController@getForm']);
Route::post('handle-form',[
    'as'=>'contact',
    'uses'=> 'HomeController@handleRequest']);

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
    
});
