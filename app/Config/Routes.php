<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Dashboard::index', ['filter' => 'session']);

$routes->group('account', static function ($routes) {
    service('auth')->routes($routes);
    $routes->get('changepwd', 'Account::changepwd', ['filter' => 'session']);
    $routes->post('changepwd', 'Account::changepwdAction', ['filter' => 'session']);
});

$routes->get('/dashboard', 'Dashboard::index', ['filter' => 'session']);

// URL
$routes->group('url', static function ($routes) {
    $routes->get('/', 'Url::index', ['filter' => 'session']);
    $routes->get('user/(:num)', 'Url::listuserurls/$1', ['filter' => 'session']); // list user urls
    $routes->get('tag/(:num)', 'Url::listtagurls/$1', ['filter' => 'session']); // list tag urls
    $routes->get('listdata', 'Url::listData', ['filter' => 'session']); // json list urls
    $routes->get('view/(:num)', 'Url::view/$1', ['filter' => 'session']);
    $routes->get('new', 'Url::new', ['filter' => 'session']);
    $routes->post('new', 'Url::newAction', ['filter' => 'session']);
    $routes->get('edit/(:num)', 'Url::edit/$1', ['filter' => 'session']);
    $routes->post('edit/(:num)', 'Url::editAction/$1', ['filter' => 'session']);
    $routes->get('hits', 'Url::urlshitslist', ['filter' => 'session']); // view list all url hits
    $routes->get('urlshitslistdata', 'Url::urlshitslistData', ['filter' => 'session']); // json hits list for ALL url

    $routes->get('hits/(:num)', 'Url::hitslist/$1', ['filter' => 'session']);
    $routes->get('hitslistdata/(:num)', 'Url::hitslistData/$1', ['filter' => 'session']); // json hits list for url
    $routes->get('qrcode/(:num)', 'Url::generateQRCode/$1', ['filter' => 'session']);
    $routes->post('del/(:num)', 'Url::delUrl/$1', ['filter' => 'session']); // json del url
});

$routes->group('urltags', static function ($routes) {
    $routes->get('/', 'Urltags::index', ['as' => 'url-tags', 'filter' => 'session']);
});

// Users
$routes->group('users', static function ($routes) {
    $routes->get('/', 'Users::index', ['filter' => 'session']);
    $routes->get('listusers', 'Users::listUsersData', ['filter' => 'session']); // json list users
    $routes->get('addnew', 'Users::addNew', ['filter' => 'session']);
    $routes->post('addnew', 'Users::addNewAction', ['filter' => 'session']);
    $routes->post('del/(:num)', 'Users::delUser/$1', ['filter' => 'session']); // json del user account
    $routes->get('edit/(:num)', 'Users::editUser/$1', ['filter' => 'session']); // save edit user account
    $routes->post('edit/(:num)', 'Users::editUserAction/$1', ['filter' => 'session']); // edit user account
    $routes->post('activate/(:num)', 'Users::activateUser/$1', ['filter' => 'session']); // json activate user email
    $routes->post('deactivate/(:num)', 'Users::deactivateUser/$1', ['filter' => 'session']); // json deactivate user email
    $routes->post('ban/(:num)', 'Users::banUser/$1', ['filter' => 'session']); // json ban user account
    $routes->post('unban/(:num)', 'Users::unbanUser/$1', ['filter' => 'session']); // json unban user account
});

// language route
// filter
// https://codeigniter.com/user_guide/incoming/routing.html#applying-filters
// https://codeigniter.com/user_guide/incoming/filters.html?highlight=filter
$routes->get('lang/{locale}', 'Language::index', ['filter' => 'afterlangchange']);

// Assist
$routes->get('assist/newurl', 'Assist::getAddNewUrlJsAssist', ['filter' => 'session']);
$routes->get('assist/smartyurl', 'Assist::getSmartyUrlGlobalJsAssist');
$routes->get('assist/listurls', 'Assist::getListUrlsJsAssist', ['filter' => 'session']);

// URL redirects
// with go route
$routes->get('go/(:any)', 'Go::go/$1', ['filter' => 'webratelimit']);
// Route any undefined request to Go Controller.
$routes->get('(:any)', 'Go::go/$1', ['filter' => 'webratelimit']);
