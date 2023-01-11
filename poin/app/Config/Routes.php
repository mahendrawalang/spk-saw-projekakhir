<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (is_file(SYSTEMPATH . 'Config/Routes.php')) {
	require SYSTEMPATH . 'Config/Routes.php';
}

/*
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Root');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
// The Auto Routing (Legacy) is very dangerous. It is easy to create vulnerable apps
// where controller filters or CSRF protection are bypassed.
// If you don't want to define all routes, please use the Auto Routing (Improved).
// Set `$autoRoutesImproved` to true in `app/Config/Feature.php` and set the following to true.
// $routes->setAutoRoute(false);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->add('/', 'Root::index');
$routes->add('/login', 'Root::proseslogin');
$routes->add('/logout', 'Root::proseslogout');
$routes->add('/profil', 'Root::tampilprofil');
$routes->add('/ubahprofil', 'Root::ubahprofil');

$routes->add('/sanksi', 'Sanksi::index');
$routes->add('/sanksi/baru', 'Sanksi::tambahdata');
$routes->add('/sanksi/simpan', 'Sanksi::simpandata');
$routes->add('/sanksi/detail/(:any)', 'Sanksi::detaildata/$1');
$routes->add('/sanksi/ubah', 'Sanksi::ubahdata');

$routes->add('/siswa', 'Siswa::index');
$routes->add('/siswa/baru', 'Siswa::tambahdata');
$routes->add('/siswa/simpan', 'Siswa::simpandata');
$routes->add('/siswa/detail/(:any)', 'Siswa::detaildata/$1');
$routes->add('/siswa/ubah', 'Siswa::ubahdata');

$routes->add('/kriteria', 'Kriteria::index');
$routes->add('/kriteria/baru', 'Kriteria::tambahdata');
$routes->add('/kriteria/simpan', 'Kriteria::simpandata');
$routes->add('/kriteria/detail/(:any)', 'Kriteria::detaildata/$1');
$routes->add('/kriteria/ubah', 'Kriteria::ubahdata');

$routes->add('/indikator', 'Indikator::index');
$routes->add('/indikator/baru', 'Indikator::tambahdata');
$routes->add('/indikator/simpan', 'Indikator::simpandata');
$routes->add('/indikator/detail/(:any)', 'Indikator::detaildata/$1');
$routes->add('/indikator/ubah', 'Indikator::ubahdata');

$routes->add('/proses', 'Proses::index');
$routes->add('/proses/analisa', 'Proses::analisadata');
$routes->add('/riwayat', 'Proses::tampilriwayat');
$routes->add('/riwayat/detail/(:any)', 'Proses::detailriwayat/$1');

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
if (is_file(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
	require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
