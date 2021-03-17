<?php

Route::post('/admin/login', 'AuthController@login')->name('admin.login');

Route::prefix('Admin')->group(function () {
    Route::get('/login', function () {
        return view('Admin.loginAdmin');
    });
    Route::group(['middleware' => 'roles', 'roles' => ['Admin']], function () {

        Route::get('/logout/logout', 'AuthController@logout')->name('user.logout');
        Route::get('/home', 'AuthController@index')->name('admin.dashboard');

        // Profile Route
        Route::prefix('profile')->group(function () {
            Route::get('/index', 'profileController@index')->name('profile.index');
            Route::post('/index', 'profileController@update')->name('profile.update');
        });

        // Admin Routes
        Route::prefix('Admin')->group(function () {
            Route::get('/index', 'AdminController@index')->name('Admin.index');
            Route::get('/allData', 'AdminController@allData')->name('Admin.allData');
            Route::post('/create', 'AdminController@create')->name('Admin.create');
            Route::get('/edit/{id}', 'AdminController@edit')->name('Admin.edit');
            Route::post('/update', 'AdminController@update')->name('Admin.update');
            Route::get('/destroy/{id}', 'AdminController@destroy')->name('Admin.destroy');
        });

        /** Slider Route */
        Route::prefix('Slider')->group(function () {
            Route::get('/index', 'SliderController@index')->name('Slider.index');
            Route::get('/allData', 'SliderController@allData')->name('Slider.allData');
            Route::post('/create', 'SliderController@create')->name('Slider.create');
            Route::get('/edit/{id}', 'SliderController@edit')->name('Slider.edit');
            Route::post('/update', 'SliderController@update')->name('Slider.update');
            Route::get('/destroy/{id}', 'SliderController@destroy')->name('Slider.destroy');
            Route::get('/ChangeStatus/{id}', 'SliderController@ChangeStatus')->name('Slider.ChangeStatus');
        });

        /** Media Route */
        Route::prefix('Media')->group(function () {
            Route::get('/index', 'MediaController@index')->name('Media.index');
            Route::get('/allData', 'MediaController@allData')->name('Media.allData');
            Route::post('/create', 'MediaController@create')->name('Media.create');
            Route::get('/edit/{id}', 'MediaController@edit')->name('Media.edit');
            Route::post('/update', 'MediaController@update')->name('Media.update');
            Route::get('/destroy/{id}', 'MediaController@destroy')->name('Media.destroy');
            Route::get('/ChangeStatus/{id}', 'MediaController@ChangeStatus')->name('Media.ChangeStatus');
        });

        /** Voulnter Route */
        Route::prefix('Voulnter')->group(function () {
            Route::get('/index', 'VoulnterController@index')->name('Voulnter.index');
            Route::get('/allData', 'VoulnterController@allData')->name('Voulnter.allData');
            Route::post('/create', 'VoulnterController@create')->name('Voulnter.create');
            Route::get('/edit/{id}', 'VoulnterController@edit')->name('Voulnter.edit');
            Route::post('/update', 'VoulnterController@update')->name('Voulnter.update');
            Route::get('/destroy/{id}', 'VoulnterController@destroy')->name('Voulnter.destroy');
            Route::get('/ChangeStatus/{id}', 'VoulnterController@ChangeStatus')->name('Voulnter.ChangeStatus');
        });

        /** Team Route */
        Route::prefix('Team')->group(function () {
            Route::get('/index', 'TeamController@index')->name('Team.index');
            Route::get('/allData', 'TeamController@allData')->name('Team.allData');
            Route::post('/create', 'TeamController@create')->name('Team.create');
            Route::get('/edit/{id}', 'TeamController@edit')->name('Team.edit');
            Route::post('/update', 'TeamController@update')->name('Team.update');
            Route::get('/destroy/{id}', 'TeamController@destroy')->name('Team.destroy');
            Route::get('/ChangeStatus/{id}', 'TeamController@ChangeStatus')->name('Team.ChangeStatus');
            Route::get('/view/{id}', 'TeamController@view')->name('Team.View');
        });

        /** Skills Route */
        Route::prefix('Skills')->group(function () {
            Route::get('/allData/{id}', 'SkillsController@allData')->name('Skills.allData');
            Route::post('/create', 'SkillsController@create')->name('Skills.create');
            Route::get('/edit/{id}', 'SkillsController@edit')->name('Skills.edit');
            Route::post('/update', 'SkillsController@update')->name('Skills.update');
            Route::get('/destroy/{id}', 'SkillsController@destroy')->name('Skills.destroy');
        });

        /** Work Route */
        Route::prefix('Work')->group(function () {
            Route::get('/allData/{id}', 'WorkController@allData')->name('Work.allData');
            Route::post('/create', 'WorkController@create')->name('Work.create');
            Route::get('/edit/{id}', 'WorkController@edit')->name('Work.edit');
            Route::post('/update', 'WorkController@update')->name('Work.update');
            Route::get('/destroy/{id}', 'WorkController@destroy')->name('Work.destroy');
        });
    });
});

