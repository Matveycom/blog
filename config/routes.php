<?php

return array(

    'product/([0-9]+)' => 'product/view/$1', // actionView в ProductController

    'catalog/page-([0-9]+)' => 'catalog/index/$1',
    'catalog' => 'catalog/index', // actionIndex в CatalogController

    'category/([0-9]+)/page-([0-9]+)' => 'catalog/category/$1/$2', // actionCategory в CatalogController
    'category/([0-9]+)' => 'catalog/category/$1', // actionCategory в CatalogController

    'cart/checkout' => 'cart/checkout',
    'cart/add/([0-9]+)' => 'cart/add/$1',
    'cart/addAjax/([0-9]+)' => 'cart/addAjax/$1',
    'cart/delete/([0-9]+)' => 'cart/delete/$1',
    'cart' => 'cart/index',

    'user/register' => 'user/register',
    'user/login' => 'user/login',
    'cabinet/edit' => 'cabinet/edit',
    'cabinet' => 'cabinet/index',
    'user/logout' => 'user/logout',

    'blog' => 'site/blog',
    'contacts' => 'site/contact',
    'about' => 'site/about',

    '/page-([0-9]+)' => 'site/index/$1',

    '' => 'site/index', // actionIndex в SiteController

);