        <?php

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

        use Illuminate\Support\Facades\Route;
        Auth::routes();

        Route::get('/', function () {
            return view('welcome');
        })->name('welcome');


        Route::get('/home', 'HomeController@index')->name('home');
        Route::post('/users/{$id}/destroy', 'UserController@destroy');
        Route::post('/jobs/{$id}/destroy', 'JobController@destroy');
        Route::post('/offers/{$id}/destroy', 'OfferController@destroy');
        Route::post('/orders/{$id}/destroy', 'OrderController@destroy');



        Route::resource('/users',  'UserController')->middleware('auth');

        Route::resource('/payments',  'PaymentController')->middleware('auth');
        Route::resource('/jobs', 'JobController')->middleware('auth');
        Route::resource('/offers', 'OfferController')->middleware('auth');
        Route::resource('/orders', 'OrderController')->middleware('auth');
