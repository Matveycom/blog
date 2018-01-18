<?php

return array(


    'article/create' => 'blog/create',
    'article/edit([0-9]+)' => 'blog/edit/$1',
    'article/delete/([0-9]+)' => 'blog/deleteById/$1',

    'article/delete' => 'blog/delete',

    '([0-9]+)' => 'blog/view/$1',
    'user/register' => 'user/register',
    'user/login' => 'user/login',
    'cabinet/edit' => 'cabinet/edit',
    'cabinet' => 'cabinet/index',
    'user/logout' => 'user/logout',
    '([0-9]+)/comment' => 'blog/comments',

    '' => 'site/blog',

);