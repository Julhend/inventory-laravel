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

Route::get('/', function () {
    return view('auth.login');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('dashboard', function () {
   return view('layouts.master');
});



Route::group(['middleware' => 'auth'], function () {
    Route::resource('categories','CategoryController');
    Route::get('/apiCategories','CategoryController@apiCategories')->name('api.categories');
    Route::get('/exportCategoriesAll','CategoryController@exportCategoriesAll')->name('exportPDF.categoriesAll');
    Route::get('/exportCategoriesAllExcel','CategoryController@exportExcel')->name('exportExcel.categoriesAll');


    Route::resource('customers','CustomerController');
    Route::get('/apiCustomers','CustomerController@apiCustomers')->name('api.customers');
    Route::post('/importCustomers','CustomerController@ImportExcel')->name('import.customers');
    Route::get('/exportCustomersAll','CustomerController@exportCustomersAll')->name('exportPDF.customersAll');
    Route::get('/exportCustomersAllExcel','CustomerController@exportExcel')->name('exportExcel.customersAll');

    Route::resource('sales','SaleController');
    Route::get('/apiSales','SaleController@apiSales')->name('api.sales');
    Route::post('/importSales','SaleController@ImportExcel')->name('import.sales');
    Route::get('/exportSalesAll','SaleController@exportSalesAll')->name('exportPDF.salesAll');
    Route::get('/exportSalesAllExcel','SaleController@exportExcel')->name('exportExcel.salesAll');

    Route::resource('suppliers','SupplierController');
    Route::get('/apiSuppliers','SupplierController@apiSuppliers')->name('api.suppliers');
    Route::post('/importSuppliers','SupplierController@ImportExcel')->name('import.suppliers');
    Route::get('/exportSupplierssAll','SupplierController@exportSuppliersAll')->name('exportPDF.suppliersAll');
    Route::get('/exportSuppliersAllExcel','SupplierController@exportExcel')->name('exportExcel.suppliersAll');

    Route::resource('products','ProductController');
    Route::get('/apiProducts','ProductController@apiProducts')->name('api.products');
    Route::get('/exportProductAll','ProductController@exportProductAll')->name('exportPDF.productAll');

    Route::resource('productsOut','ProductKeluarController');
    Route::get('/apiProductsOut','ProductKeluarController@apiProductsOut')->name('api.productsOut');
    Route::get('/exportProductKeluarAll','ProductKeluarController@exportProductKeluarAll')->name('exportPDF.productKeluarAll');
    Route::get('/exportProductKeluarAllExcel','ProductKeluarController@exportExcel')->name('exportExcel.productKeluarAll');
    Route::get('/exportProductKeluar/{id}','ProductKeluarController@exportProductKeluar')->name('exportPDF.productKeluar');

    Route::resource('productsRetur','ProductReturController');
    Route::get('/apiProductsRetur','ProductReturController@apiProductsRetur')->name('api.productsRetur');
    Route::get('/exportProductReturAll','ProductReturController@exportProductReturAll')->name('exportPDF.productReturAll');
    
    Route::resource('productsPo','ProductPoController');
    Route::get('/apiProductsPo','ProductPoController@apiProductsPo')->name('api.productsPo');
    Route::get('/exportProductPoAll','ProductPoController@exportProductPoAll')->name('exportPDF.productPoAll');
    
    Route::resource('productsIn','ProductMasukController');
    Route::get('/apiProductsIn','ProductMasukController@apiProductsIn')->name('api.productsIn');
    Route::get('/exportProductMasukAll','ProductMasukController@exportProductMasukAll')->name('exportPDF.productMasukAll');
    Route::get('/exportProductMasukAllExcel','ProductMasukController@exportExcel')->name('exportExcel.productMasukAll');
    Route::get('/exportProductMasuk/{id}','ProductMasukController@exportProductMasuk')->name('exportPDF.productMasuk');
    Route::get('/exportProductRetur/{id}','ProductMasukController@exportProductRetur')->name('exportPDF.productRetur');

    Route::resource('productsInTanter','ProductMasukTanterController');
    Route::get('/apiProductsInTanter','ProductMasukTanterController@apiProductsInTanter')->name('api.productsInTanter');
    Route::get('/cetak-tanda-terima-bm/{tglawal}/{tglakhir}/{supplier_id}','ProductMasukTanterController@exportProductMasukTanterAll')->name('cetak-tanda-terima-bm');

    Route::resource('productsOutTanter','ProductKeluarTanterController');
    Route::get('/apiProductsOutTanter','ProductKeluarTanterController@apiProductsOutTanter')->name('api.productsOutTanter');
    Route::get('/cetak-tanda-terima-bk/{tglawal}/{tglakhir}/{customer_id}','ProductKeluarTanterController@exportProductKeluarTanterAll')->name('cetak-tanda-terima-bk');
   
});

