<?php

return array(

    'product/([0-9]+)' => 'product/view/$1',

    'catalog/page-([0-9]+)' => 'catalog/index/$1',
    'catalog' => 'catalog/index',

    'category/([0-9]+)/page-([0-9]+)' => 'catalog/category/$1/$2',
    'category/([0-9]+)' => 'catalog/category/$1',

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

    '' => 'site/index',

);