<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (file_exists(SYSTEMPATH . 'Config/Routes.php')) {
    require SYSTEMPATH . 'Config/Routes.php';
}

/*
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
$routes->setAutoRoute(true);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
// $routes->get('/', 'Home::index');
$routes->get('/', 'Pages::index');
$routes->get('/auth', 'Auth::index');

$routes->get('/users', 'Users::index');
$routes->get('/users/(:num)', 'Users::delete/$1');

$routes->get('/user_opd', 'UserOpd::index');
$routes->get('/user_opd/(:num)', 'UserOpd::delete/$1');

$routes->get('/role', 'Role::index');
$routes->get('/role/(:num)', 'Role::delete/$1');

$routes->get('/jenis_pajak', 'JenisPajak::index');
$routes->get('/jenis_pajak/(:num)', 'JenisPajak::delete/$1');

$routes->get('/data_opd', 'DataOpd::index');
$routes->get('/data_opd/(:num)', 'DataOpd::delete/$1');

$routes->get('/kode_rekening', 'KodeRekening::index');
$routes->get('/kode_rekening/(:num)', 'KodeRekening::delete/$1');

$routes->get('/target', 'Target::index');
$routes->get('/target/(:num)', 'Target::delete/$1');

$routes->get('/target_lainnya', 'TargetLainnya::index');
$routes->get('/target_lainnya/(:num)', 'TargetLainnya::delete/$1');

$routes->get('/realisasi', 'Realisasi::index');
$routes->get('/realisasi/(:num)', 'Realisasi::delete/$1');

$routes->get('/lain_lain_pad', 'LainPAD::index');
$routes->get('/lain_lain_pad/(:num)', 'LainPAD::delete/$1');

$routes->get('/laporan_perdinas', 'LaporanPerdinas::index');
// $routes->get('/laporanPerdinas/excel_filter', 'LaporanPerdinas::excel_filter');
$routes->get('/laporanPerdinas/filter/(:num)', 'LaporanPerdinas::excel_filter/$1');
$routes->get('/laporan_pad', 'LaporanPad::index');

$routes->get('/verifikasi', 'Verifikasi::index');
$routes->get('/verifikasi/unposting/(:num)', 'Verifikasi::unposting/$1');
$routes->get('/verifikasi/tolak/(:num)', 'Verifikasi::tolak/$1');
$routes->get('/verifikasi/(:num)', 'Verifikasi::verifikasi/$1');
$routes->get('/verifikasi/filter/(:num)', 'Verifikasi::filter/$1');

$routes->get('/dana_perimbangan', 'DanaPerimbangan::index');
$routes->get('/dana_perimbangan/(:num)', 'DanaPerimbangan::delete/$1');

$routes->get('/dana_insentif_daerah', 'DanaInsentifDaerah::index');
$routes->get('/dana_insentif_daerah/(:num)', 'DanaInsentifDaerah::delete/$1');

$routes->get('/dana_desa', 'DanaDesa::index');
$routes->get('/dana_desa/(:num)', 'DanaDesa::delete/$1');

$routes->get('/bagi_hasil_pajak', 'BagiHasilPajak::index');
$routes->get('/bagi_hasil_pajak/(:num)', 'BagiHasilPajak::delete/$1');

$routes->get('/pendapatan_hibah', 'PendapatanHibah::index');
$routes->get('/pendapatan_hibah/(:num)', 'PendapatanHibah::delete/$1');

$routes->get('/lain_lain', 'LainLain::index');
$routes->get('/lain_lain/(:num)', 'LainLain::delete/$1');

$routes->get('/upload', 'Upload::index');
$routes->get('/upload/(:num)', 'Upload::delete/$1');

$routes->get('/laporan_opd', 'LaporanOpd::index');
$routes->get('/laporan_opd/(:num)', 'LaporanOpd::delete/$1');

$routes->get('/la', 'Laporan::index');
$routes->get('/la/pdf', 'Laporan::pdf');

$routes->get('/download', 'Download::download');
/*
 * --------------------------------------------------------------------
 * Additional Routing
 * --------------------------------------------------------------------
 *
 * There will often be times that you need additional routing and you
 * need it to be able to override any defaults in this file. Environment
 * based routes is one such time. require() additional route files here
 * to make that happen.
 *
 * You will have access to the $routes object within that file without
 * needing to reload it.
 */
if (file_exists(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
