<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

// Route default
$routes->get('/', 'Home::index', ['filter' => 'auth']);

// Auth
$routes->get('login', 'AuthController::login');
$routes->post('login', 'AuthController::login', ['filter' => 'redirect']);
$routes->get('logout', 'AuthController::logout');

// Produk
$routes->group('produk', ['filter' => 'auth'], function ($routes) {
    $routes->get('', 'ProdukController::index');
    $routes->post('', 'ProdukController::create');
    $routes->post('edit/(:any)', 'ProdukController::edit/$1');
    $routes->get('delete/(:any)', 'ProdukController::delete/$1');
    $routes->get('download', 'ProdukController::download');
});

// Keranjang dan Checkout
$routes->group('keranjang', ['filter' => 'auth'], function ($routes) {
    $routes->get('', 'TransaksiController::index');
    $routes->post('', 'TransaksiController::cart_add');
    $routes->post('edit', 'TransaksiController::cart_edit');
    $routes->get('delete/(:any)', 'TransaksiController::cart_delete/$1');
    $routes->get('clear', 'TransaksiController::cart_clear');
    $routes->post('buy', 'TransaksiController::buy');
});

// Kategori Produk
$routes->group('productcategory', ['filter' => 'auth'], function ($routes) {
    $routes->get('', 'ProductCategoryController::index');
    $routes->post('', 'ProductCategoryController::create');
    $routes->post('edit/(:any)', 'ProductCategoryController::edit/$1');
    $routes->get('delete/(:any)', 'ProductCategoryController::delete/$1');
});

$routes->get('checkout', 'TransaksiController::checkout', ['filter' => 'auth']);
$routes->post('buy', 'TransaksiController::buy', ['filter' => 'auth']);

$routes->get('get-location', 'TransaksiController::getLocation', ['filter' => 'auth']);
$routes->get('get-cost', 'TransaksiController::getCost', ['filter' => 'auth']);

// Rute untuk Diskon
$routes->group('diskon', ['filter' => 'auth'], function($routes) { // 'auth' filter bisa ditambahkan jika Anda punya middleware autentikasi
    $routes->get('/', 'DiscountController::index');
    $routes->post('save', 'DiscountController::save'); // Untuk menyimpan data baru
    $routes->get('edit/(:num)', 'DiscountController::edit/$1'); // Untuk mengambil data edit (biasanya via AJAX)
    $routes->post('update/(:num)', 'DiscountController::update/$1'); // Untuk menyimpan perubahan
    $routes->get('delete/(:num)', 'DiscountController::delete/$1'); // Untuk menghapus data
});

// Halaman Umum
$routes->get('faq', 'Home::faq', ['filter' => 'auth']);
$routes->get('profile', 'Home::profile', ['filter' => 'auth']);
$routes->get('contact', 'Home::contact', ['filter' => 'auth']);

$routes->resource('api', ['controller' => 'apiController']);
$routes->resource('api', ['controller' => 'apiController']);