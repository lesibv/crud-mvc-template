<?php
/**
 *  define routes with its controllers and actions 
 */
const routes = array(
    '/'             => array('HomeController', 'index'),
    '/home'         => array('HomeController', 'index'),
    '/users'        => array('UserController', 'index'),
    '/users/load'   => array('UserController', 'load'),
    '/users/show'   => array('UserController', 'getDetail'),
    '/users/add'    => array('UserController', 'add'),
    '/users/edit'   => array('UserController', 'edit'),
    '/users/delete' => array('UserController', 'delete'),
);
