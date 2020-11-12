<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	https://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/
$route['default_controller'] = 'Landing';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

//Landing Route Style
// 
$route['jual-beli-sparepart-motor/jual-harga-distributor']  = 'Suku_Cadang/index';
$route['kategori']  = 'UCategory/index';
$route['tipe-kendaraan']  = 'UTipe/index';
$route['merk']  = 'UMerk/index';
$route['profile'] = 'Profile/index';


// PRODUCTS ROUTE
$route['detail-product/(:any)'] = 'admin/Products/detail/$1'; // WITH ID
$route['detail-product'] = 'admin/Products/detail'; // WITHOUT ID RETURN ERROR
$route['edit-product/(:any)'] = 'admin/Products/edit/$1'; // WITH ID
$route['edit-product'] = 'admin/Products/edit'; // WITHOUT ID RETURN ERROR
$route['add-product'] = 'admin/Products/add'; // ADD PRODUCT
$route['list-product'] = 'admin/Products/index'; // LIST PRODUCT
$route['delete-product/(:any)'] = 'admin/Products/delete/$1'; // DELETE Product
$route['delete-product'] = 'admin/Products/delete/'; // DELETE Product WITHOUT ID == RETURN FALSE


// MERK ROUTE
$route['add-merk'] = 'admin/Merk/add'; // ADD MERK
$route['edit-merk/(:any)'] = 'admin/Merk/detail/$1'; // DETAIL EDIT MERK
$route['edited-merk/(:any)'] = 'admin/Merk/edit/$1'; // EDIT MERK
$route['edit-merk'] = 'admin/Merk/detail/'; // EDIT MERK WITHOUT ID == RETURN FALSE
$route['delete-merk/(:any)'] = 'admin/Merk/delete/$1'; // DELETE MERK
$route['delete-merk'] = 'admin/Merk/delete/'; // DELETE MERK WITHOUT ID == RETURN FALSE
$route['list-merk'] = 'admin/Merk/index'; // LIST MERK



// TYPE ROUTE
$route['add-type'] = 'admin/Type/add'; // ADD TYPE
$route['edit-type/(:any)'] = 'admin/Type/detail/$1'; // EDIT TYPE
$route['edited-type/(:any)'] = 'admin/Type/edit/$1'; // EDIT MERK
$route['edit-type'] = 'admin/Type/detail/'; // EDIT TYPE WITHOUT ID == RETURN FALSE
$route['delete-type/(:any)'] = 'admin/Type/delete/$1'; // DELETE TYPE
$route['delete-type'] = 'admin/Type/delete/'; // DELETE TYPE WITHOUT ID == RETURN FALSE
$route['list-type'] = 'admin/Type/index'; // LIST TYPE


// CATEGORY ROUTE
$route['add-category'] = 'admin/Category/add'; // ADD CATEGORY
$route['edit-category/(:any)'] = 'admin/Category/detail/$1'; // EDIT 
$route['edited-category/(:any)'] = 'admin/Category/edit/$1'; // EDIT MERK
$route['edit-category'] = 'admin/Category/detail/'; // EDIT CATEGORY WITHOUT ID == RETURN FALSE
$route['delete-category/(:any)'] = 'admin/Category/delete/$1'; // DELETE CATEGORY
$route['delete-category'] = 'admin/Category/delete/'; // DELETE CATEGORY WITHOUT ID == RETURN FALSE
$route['list-category'] = 'admin/Category/index'; // LIST CATEGORY


// AUTH USER ROUTE
$route['auth/login'] = 'Auth/index'; // LOGIN USER
$route['auth/register'] = 'Auth/register'; // REGISTER USER


// AUTH ADMIN ROUTE
$route['auth/login-admin'] = 'Auth/loginAdmin'; // LOGIN ADMIN
$route['auth/add-admin'] = 'Auth/addAdmin'; // REGISTER ADMIN

//test dashboard nanti edit aja
$route['admin-dashboard'] = 'admin/Dashboard/index'; // DASHBOARD ADMIN