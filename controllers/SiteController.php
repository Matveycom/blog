<?php

include_once ROOT . '/models/Category.php';
include_once ROOT . '/models/Product.php';

class SiteController
{

    public function actionIndex()
    {
        $categories = array();
        $categories = Category::getCategoriesList();

        $latestProducts = array();
        $latestProducts = Product::getLatestProducts(6);


        require_once(ROOT . '/views/site/index.php');

        return true;
    }

    public function actionContact(){

        $categories = array();
        $categories = Category::getCategoriesList();


        require_once (ROOT. '/views/contact/index.php');
        return true;
    }

    public function actionAbout(){

        $categories = array();
        $categories = Category::getCategoriesList();



        require_once (ROOT. '/views/about/index.php');
        return true;
    }

    public function actionBlog(){

        $categories = array();
        $categories = Category::getCategoriesList();



        require_once (ROOT. '/views/blog/index.php');
        return true;
    }

}
