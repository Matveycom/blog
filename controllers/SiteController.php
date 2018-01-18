<?php

class SiteController
{
        public function actionBlog(){

        $blog = array();
        $blog = Blog::getBlogList();
        if (isset($_SESSION['user'])) {
            $userId = User::userId();
            $user = User::getUserById($userId);
        }
        require_once (ROOT. '/views/blog/index.php');
        return true;
    }


}
