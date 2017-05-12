<?php

include_once ROOT . '/models/Blog.php';

class BlogControllerhttp
{

    public function actionIndex()
    {
        $blogList = array();
        $blogList = Blog::getBlogList();

        require_once(ROOT . '/views/blog/index.php');

        return true;
    }

    public function actionView($id)
    {
        if ($id) {
            $newsItem = Blog::getNewsItemById($id);
            require_once(ROOT . '/views/blog/view.php');
        }

        return true;
    }

}
