<?php


/*
 * Homepage Routes
 */
Route::get('/',"HomeController@homepage")->name('homeapge');
Route::get('/product/{id}',"ProductController@singleProduct")->name('singleProduct');
Route::get('/service',"ServiceController@index")->name('service.index');
Route::get('/partner',"profileController@index")->name('profile.index');
Route::get('/product/category/{category}',"ProductController@productByCategory")->name('productBy.category');
Route::post('/product/search',"searchController@search")->name('product.search');




/* Admin Routes List */

Auth::routes();

Route::group([ 'prefix' => 'admin' ,'middleware' => ['auth']],function (){
    Route::get('/',"HomeController@adminIndex")->name('home');

    //For Categories Route
    Route::get('/categories/show','Admin\CategoriesController@index')->name('category.show');
    Route::post('/categories/create','Admin\CategoriesController@create')->name('category.create');
    Route::post('/categories/store','Admin\CategoriesController@store')->name('category.store');
    Route::post('/categories/update','Admin\CategoriesController@update')->name('category.update');
    Route::post('/categories/delete','Admin\CategoriesController@destroy')->name('category.destroy');

    //For Product Routes
    Route::get('/products/create','Admin\ProductController@create')->name('product.create');
    Route::post('/product/store','Admin\ProductController@store')->name('product.store');
    //next page
    Route::get('/products/create/next/{id}','Admin\ProductController@createNext')->name('product.create.next');
    Route::post('/product/store/next','Admin\ProductController@storeNext')->name('product.storeNext');

    //next faq
    Route::get('/products/create/next/specification/{id}','Admin\ProductController@createSpecification')->name('product.specification.create');
    Route::post('/product/store/specification','Admin\ProductController@specificationStore')->name('product.specificationStore');
    //show product List
    Route::get('/products/show','Admin\ProductController@show')->name('product.show');
    //delete Product
    Route::post('/product/delete','Admin\ProductController@destroy')->name('product.destroy');

    //Edit Product
    Route::get('/products/edit/{id}','Admin\ProductController@editProduct')->name('product.edit');
    Route::post('/product/update','Admin\ProductController@update')->name('product.update');
    Route::get('/products/edit/next/{id}','Admin\ProductController@editProductNext')->name('product.edit.next');
    Route::post('/product/update/next','Admin\ProductController@updateNext')->name('product.updateNext');


    //delete Slide Image
    Route::post('/product/delete/slideImage','Admin\ProductController@deleteSlideImage')->name('product.deleteSlideImage');
    Route::post('/product/delete/tabImage','Admin\ProductController@deleteTabImage')->name('product.deleteTabImage');

    Route::post('/product/spec/delete','Admin\ProductController@deleteSingleSpecification')->name('product.single.spec.delete');

    Route::get('/product/edit/faq/next/{id}','Admin\ProductController@editNextSpecification')->name('product.faq.next');

    Route::post('/product/update/faq','Admin\ProductController@updateFaq')->name('product.faq.update');
    Route::post('product/delete/faq','Admin\ProductController@deleteSingleFaq')->name('product.faq.delete');


    //For Specification list
//    Route::get('/specification/index','Admin\SpecificationController@index')->name('specification.index');
    Route::post('/specification/store','Admin\SpecificationController@store')->name('specification.store');
    Route::post('/specification/get-data','Admin\SpecificationController@getSpecificationData')->name('specification.getData');

    //Files Section

    Route::get('/product/files/add/{id}','Admin\ProductController@createFilesDownload')->name('product.add.files');
    Route::post('/product/files/add','Admin\ProductController@storeFiles')->name('product.store.files');


});


