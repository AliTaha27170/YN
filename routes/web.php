<?php

use App\Http\Controllers\editAdmin\textContorller;
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

Route::group(
    [
        'prefix' => LaravelLocalization::setLocale(),
        'middleware' => ['localeSessionRedirect', 'localizationRedirect', 'localeViewPath',]
    ],
    function () {

        Route::get('/', "PagesController@home");
        Route::get('/career', "PagesController@career");
        Route::get('/services', "PagesController@services");
        Route::get('/warehouse', "PagesController@warehouse");
        Route::get('/contact', "PagesController@contact");
        Route::get('/about', "PagesController@about");

        Route::post("/postJobRequest", "PagesController@PostJobRequest");
        Route::post('/postContact', "PagesController@postContact")->name('postContact');

        Route::get('/manage', "AdminController@LoginPage")->name('manage');

        Route::get('/manage/jobs/resumes', "JobsController@jobRequests");
        Route::resource("/manage/jobs", "JobsController");

        Route::get('/manage/contactMessages', "AdminController@contactMessages");

        Auth::routes();

        Route::get('/home', 'HomeController@index')->name('home');
    }





);

/*DirctEdit*/
Route::prefix('admin')->namespace('editAdmin')->middleware('AdminLogin')->group(function () {

    /*Home*/
    Route::get ('home'                , 'textContorller@home'        )->name('homeEd'         );
    Route::post('push/{from}/{to}'    , 'textContorller@update'      )->name('mainPush'       );

    /*Services*/
    Route::get ('services'            , "ServicesController@index"   )->name('serviceEd'      );
    Route::post('services/store/{dad}', "ServicesController@store"   )->name('serviceStore'   );
    Route::post('services/storeDad'   , "ServicesController@storeDad")->name('serviceStoreDad');
    Route::get ('s-edit/{id}/form'    , "ServicesController@form"    )->name('editService'    );
    Route::post ('s-update/{id}'      , "ServicesController@update"  )->name('updateService'    );
    Route::get ('services-delete/{id}', "ServicesController@delete"  )->name('deleteService'  );

    /*warehouse*/
    Route::get ('warehouse'           , "WarehouseController@index"  )->name('warehouseEd'    );
    Route::post('question-store'      , "WarehouseController@store"  )->name('questionStore'  );
    Route::get ('question-edit'       , "WarehouseController@edit"   )->name('editQuestion'   );
    Route::get ('question-delete'     , "WarehouseController@delete" )->name('deleteQuestion' );

    /*career*/
    Route::get('career'               , 'CareerController@index'     )->name('careerEd'      );

    /*contact*/
    Route::get('contact'              , 'ContactController@index'    )->name('contactEd'     );

    /*about*/
    Route::get('about'                , 'AboutController@index'      )->name('aboutEd'       );

    /*Video*/
    Route::post('video-store'         , "home@Videostore"            )->name('videoStore'    );


});
