<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['posts/(:any)'] = 'posts/view/$1';
$route['posts'] = 'posts/index';
$route['about'] = 'pages/view/about';
$route['register'] = 'user/register';
$route['login'] = 'user/login';

$route['default_controller'] = 'pages/view';



$route['(:any)'] = 'pages/view/$1';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;



