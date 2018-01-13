<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
/*
Route::get('/', function () {
return view('welcome');
});

Route::auth();

Route::get('/home', 'HomeController@index');
*/
Route::get('/', function () {
	return view('welcome');
});


Route::auth();
Route::group(['middleware' => ['auth']], function() {
	Route::get('/home', 'HomeController@index');
	Route::resource('users','admin\UserController');
	//Route::resource('roles','admin\RoleController');
	//Route::resource('news','admin\NewsController');
	Route::resource('itemCRUD2','admin\ItemCRUD2Controller');
	//Route::resource('uploadImage','admin\uploadImageController');
	Route::post('uploadImage/store', ['as' => 'uploadImage.store', 'uses' => 'admin\UploadImageController@store', 'middleware' => []]);
	//Route::resource('news','admin\NewsController');
	//////////////roles///////////////////
	Route::get('roles', ['as' => 'roles.index', 'uses' => 'admin\RoleController@index', 'middleware' => ['permission:role-list|role-create|role-edit|role-delete']]);
	Route::get('roles/create', ['as' => 'roles.create', 'uses' => 'admin\RoleController@create', 'middleware' => ['permission:role-create']]);
	Route::post('roles/create', ['as' => 'roles.store', 'uses' => 'admin\RoleController@store', 'middleware' => ['permission:role-create']]);
	Route::get('roles/{id}', ['as' => 'roles.show', 'uses' => 'admin\RoleController@show', 'middleware' => ['permission:role-list']]);
	Route::get('roles/{id}/edit', ['as' => 'roles.edit', 'uses' => 'admin\RoleController@edit', 'middleware' => ['permission:role-edit']]);
	Route::patch('roles/{id}', ['as' => 'roles.update', 'uses' => 'admin\RoleController@update', 'middleware' => ['permission:role-edit']]);
	Route::delete('roles/{id}', ['as' => 'roles.destroy', 'uses' => 'admin\RoleController@destroy', 'middleware' => ['permission:role-delete']]);
	/////////News ///////////
	Route::get('news', ['as' => 'news.index', 'uses' => 'admin\NewsController@index', 'middleware' => ['permission:news-list|news-create|news-edit|news-delete']]);
	Route::get('news/create', ['as' => 'news.create', 'uses' => 'admin\NewsController@create', 'middleware' => ['permission:news-create']]);
	Route::post('news/create', ['as' => 'news.store', 'uses' => 'admin\NewsController@store', 'middleware' => ['permission:news-create']]);
	Route::get('news/{id}', ['as' => 'news.show', 'uses' => 'admin\NewsController@show', 'middleware' => ['permission:news-list']]);
	Route::get('news/{id}/edit', ['as' => 'news.edit', 'uses' => 'admin\NewsController@edit', 'middleware' => ['permission:news-edit']]);
	Route::patch('news/{id}', ['as' => 'news.update', 'uses' => 'admin\NewsController@update', 'middleware' => ['permission:news-edit']]);
	Route::delete('news/{id}', ['as' => 'news.destroy', 'uses' => 'admin\NewsController@destroy', 'middleware' => ['permission:news-delete']]);
	Route::post('news/deleteNewsImages', ['as' => 'news.deleteNewsImages', 'uses' => 'admin\NewsController@deleteNewsImages', 'middleware' => ['permission:news-edit']]);
	/////////Services ///////////
	Route::get('services', ['as' => 'services.index', 'uses' => 'admin\ServicesController@index', 'middleware' => ['permission:services-list|services-create|services-edit|services-delete']]);
	Route::get('services/create', ['as' => 'services.create', 'uses' => 'admin\ServicesController@create', 'middleware' => ['permission:services-create']]);
	Route::post('services/create', ['as' => 'services.store', 'uses' => 'admin\ServicesController@store', 'middleware' => ['permission:services-create']]);
	Route::get('services/{id}', ['as' => 'services.show', 'uses' => 'admin\ServicesController@show', 'middleware' => ['permission:services-list']]);
	Route::get('services/{id}/edit', ['as' => 'services.edit', 'uses' => 'admin\ServicesController@edit', 'middleware' => ['permission:services-edit']]);
	Route::patch('services/{id}', ['as' => 'services.update', 'uses' => 'admin\ServicesController@update', 'middleware' => ['permission:services-edit']]);
	Route::delete('services/{id}', ['as' => 'services.destroy', 'uses' => 'admin\ServicesController@destroy', 'middleware' => ['permission:services-delete']]);
	/////////project Category ///////////
	Route::get('projectCategory', ['as' => 'projectCategory.index', 'uses' => 'admin\ProjectsCategoryController@index', 'middleware' => ['permission:projectCategory-list|projectCategory-create|projectCategory-edit|projectCategory-delete']]);
	Route::get('projectCategory/create', ['as' => 'projectCategory.create', 'uses' => 'admin\ProjectsCategoryController@create', 'middleware' => ['permission:projectCategory-create']]);
	Route::post('projectCategory/create', ['as' => 'projectCategory.store', 'uses' => 'admin\ProjectsCategoryController@store', 'middleware' => ['permission:projectCategory-create']]);
	Route::get('projectCategory/{id}', ['as' => 'projectCategory.show', 'uses' => 'admin\ProjectsCategoryController@show', 'middleware' => ['permission:projectCategory-list']]);
	Route::get('projectCategory/{id}/edit', ['as' => 'projectCategory.edit', 'uses' => 'admin\ProjectsCategoryController@edit', 'middleware' => ['permission:projectCategory-edit']]);
	Route::patch('projectCategory/{id}', ['as' => 'projectCategory.update', 'uses' => 'admin\ProjectsCategoryController@update', 'middleware' => ['permission:projectCategory-edit']]);
	Route::delete('projectCategory/{id}', ['as' => 'projectCategory.destroy', 'uses' => 'admin\ProjectsCategoryController@destroy', 'middleware' => ['permission:projectCategory-delete']]);

	/////////projects ///////////
	Route::get('projects', ['as' => 'projects.index', 'uses' => 'admin\ProjectsController@index', 'middleware' => ['permission:projects-list|projects-create|projects-edit|projects-delete']]);
	Route::get('projects/create', ['as' => 'projects.create', 'uses' => 'admin\ProjectsController@create', 'middleware' => ['permission:projects-create']]);
	Route::post('projects/create', ['as' => 'projects.store', 'uses' => 'admin\ProjectsController@store', 'middleware' => ['permission:projects-create']]);
	Route::get('projects/{id}', ['as' => 'projects.show', 'uses' => 'admin\ProjectsController@show', 'middleware' => ['permission:projects-list']]);
	Route::get('projects/{id}/edit', ['as' => 'projects.edit', 'uses' => 'admin\ProjectsController@edit', 'middleware' => ['permission:projects-edit']]);
	Route::patch('projects/{id}', ['as' => 'projects.update', 'uses' => 'admin\ProjectsController@update', 'middleware' => ['permission:projects-edit']]);
	Route::delete('projects/{id}', ['as' => 'projects.destroy', 'uses' => 'admin\ProjectsController@destroy', 'middleware' => ['permission:projects-delete']]);
	Route::post('projects/deleteProjectsImages', ['as' => 'projects.deleteProjectsImages', 'uses' => 'admin\ProjectsController@deleteProjectsImages', 'middleware' => ['permission:projects-edit']]);
	/////////Cpas Books ///////////
	Route::get('cpasBooks', ['as' => 'cpasBooks.index', 'uses' => 'admin\CpasBooksController@index', 'middleware' => ['permission:cpasBooks-list|cpasBooks-create|cpasBooks-edit|cpasBooks-delete']]);
	Route::get('cpasBooks/create', ['as' => 'cpasBooks.create', 'uses' => 'admin\CpasBooksController@create', 'middleware' => ['permission:cpasBooks-create']]);
	Route::post('cpasBooks/create', ['as' => 'cpasBooks.store', 'uses' => 'admin\CpasBooksController@store', 'middleware' => ['permission:cpasBooks-create']]);
	Route::get('cpasBooks/{id}', ['as' => 'cpasBooks.show', 'uses' => 'admin\CpasBooksController@show', 'middleware' => ['permission:cpasBooks-list']]);
	Route::get('cpasBooks/{id}/edit', ['as' => 'cpasBooks.edit', 'uses' => 'admin\CpasBooksController@edit', 'middleware' => ['permission:cpasBooks-edit']]);
	Route::patch('cpasBooks/{id}', ['as' => 'cpasBooks.update', 'uses' => 'admin\CpasBooksController@update', 'middleware' => ['permission:cpasBooks-edit']]);
	Route::delete('cpasBooks/{id}', ['as' => 'cpasBooks.destroy', 'uses' => 'admin\CpasBooksController@destroy', 'middleware' => ['permission:cpasBooks-delete']]);
	/////////alambnaaa ///////////
	Route::get('alambnaaa', ['as' => 'alambnaaa.index', 'uses' => 'admin\AlambnaaaController@index', 'middleware' => ['permission:alambnaaa-list|alambnaaa-create|alambnaaa-edit|alambnaaa-delete']]);
	Route::get('alambnaaa/create', ['as' => 'alambnaaa.create', 'uses' => 'admin\AlambnaaaController@create', 'middleware' => ['permission:alambnaaa-create']]);
	Route::post('alambnaaa/create', ['as' => 'alambnaaa.store', 'uses' => 'admin\AlambnaaaController@store', 'middleware' => ['permission:alambnaaa-create']]);
	Route::get('alambnaaa/{id}', ['as' => 'alambnaaa.show', 'uses' => 'admin\AlambnaaaController@show', 'middleware' => ['permission:alambnaaa-list']]);
	Route::get('alambnaaa/{id}/edit', ['as' => 'alambnaaa.edit', 'uses' => 'admin\AlambnaaaController@edit', 'middleware' => ['permission:alambnaaa-edit']]);
	Route::patch('alambnaaa/{id}', ['as' => 'alambnaaa.update', 'uses' => 'admin\AlambnaaaController@update', 'middleware' => ['permission:alambnaaa-edit']]);
	Route::delete('alambnaaa/{id}', ['as' => 'alambnaaa.destroy', 'uses' => 'admin\AlambnaaaController@destroy', 'middleware' => ['permission:alambnaaa-delete']]);
	/////////alambnaaa ///////////
	Route::get('alambnaaaIndexing', ['as' => 'alambnaaaIndexing.index', 'uses' => 'admin\AlambnaaaIndexingController@index', 'middleware' => ['permission:alambnaaaIndexing-list|alambnaaaIndexing-create|alambnaaaIndexing-edit|alambnaaaIndexing-delete']]);
	Route::get('alambnaaaIndexing/create', ['as' => 'alambnaaaIndexing.create', 'uses' => 'admin\AlambnaaaIndexingController@create', 'middleware' => ['permission:alambnaaaIndexing-create']]);
	Route::post('alambnaaaIndexing/create', ['as' => 'alambnaaaIndexing.store', 'uses' => 'admin\AlambnaaaIndexingController@store', 'middleware' => ['permission:alambnaaaIndexing-create']]);
	Route::get('alambnaaaIndexing/{id}', ['as' => 'alambnaaaIndexing.show', 'uses' => 'admin\AlambnaaaIndexingController@show', 'middleware' => ['permission:alambnaaaIndexing-list']]);
	Route::get('alambnaaaIndexing/{id}/edit', ['as' => 'alambnaaaIndexing.edit', 'uses' => 'admin\AlambnaaaIndexingController@edit', 'middleware' => ['permission:alambnaaaIndexing-edit']]);
	Route::patch('alambnaaaIndexing/{id}', ['as' => 'alambnaaaIndexing.update', 'uses' => 'admin\AlambnaaaIndexingController@update', 'middleware' => ['permission:alambnaaaIndexing-edit']]);
	Route::delete('alambnaaaIndexing/{id}', ['as' => 'alambnaaaIndexing.destroy', 'uses' => 'admin\AlambnaaaIndexingController@destroy', 'middleware' => ['permission:alambnaaaIndexing-delete']]);

	/*
	Route::get('roles',['as'=>'roles.index','uses'=>'admin\RoleController@index','middleware' => ['permission:role-list|role-create|role-edit|role-delete']]);
	Route::get('roles/create',['as'=>'roles.create','uses'=>'admin\RoleController@create','middleware' => ['permission:role-create']]);
	Route::post('roles/create',['as'=>'roles.store','uses'=>'admin\RoleController@store','middleware' => ['permission:role-create']]);
	Route::get('roles/{id}',['as'=>'roles.show','uses'=>'admin\RoleController@show']);
	Route::get('roles/{id}/edit',['as'=>'roles.edit','uses'=>'admin\RoleController@edit','middleware' => ['permission:role-edit']]);
	Route::patch('roles/{id}',['as'=>'roles.update','uses'=>'admin\RoleController@update','middleware' => ['permission:role-edit']]);
	Route::delete('roles/{id}',['as'=>'roles.destroy','uses'=>'admin\RoleController@destroy','middleware' => ['permission:role-delete']]);
	*/
	/*
	Route::get('itemCRUD2',['as'=>'itemCRUD2.index','uses'=>'ItemCRUD2Controller@index','middleware' => ['permission:item-list|item-create|item-edit|item-delete']]);
	Route::get('itemCRUD2/create',['as'=>'itemCRUD2.create','uses'=>'ItemCRUD2Controller@create','middleware' => ['permission:item-create']]);
	Route::post('itemCRUD2/create',['as'=>'itemCRUD2.store','uses'=>'ItemCRUD2Controller@store','middleware' => ['permission:item-create']]);
	Route::get('itemCRUD2/{id}',['as'=>'itemCRUD2.show','uses'=>'ItemCRUD2Controller@show']);
	Route::get('itemCRUD2/{id}/edit',['as'=>'itemCRUD2.edit','uses'=>'ItemCRUD2Controller@edit','middleware' => ['permission:item-edit']]);
	Route::patch('itemCRUD2/{id}',['as'=>'itemCRUD2.update','uses'=>'ItemCRUD2Controller@update','middleware' => ['permission:item-edit']]);
	Route::delete('itemCRUD2/{id}',['as'=>'itemCRUD2.destroy','uses'=>'ItemCRUD2Controller@destroy','middleware' => ['permission:item-delete']]);
	*/
});
