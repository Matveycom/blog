<?php

include_once ROOT . '/models/Blog.php';

class BlogController
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
            $newsItem = Blog::getBlogItemById($id);

            if (isset($_POST['submit'])) {
                $this->actionAddComments();
            }
            $comments = Blog::getCommentsById($id);
            require_once(ROOT . '/views/blog/view.php');
            return true;
        }


        return true;
    }


    public function actionAddComments()
    {

        $name = '';
        $comment = '';
        $id = '';

        if (isset($_POST['submit'])) {
            $comment = $_POST['text'];
            $name = $_POST['name'];
            $id = substr($_SERVER['REQUEST_URI'], 1);
            Blog::setComment($name, $comment, $id);
        }
           return true;
    }
    public function actionCreate() {

        require_once(ROOT . '/views/blog/create.php');
        if (isset($_POST['addArticle'])){
            $title = $_POST['title'];
            $content = $_POST['content'];
            $date = date('Y-m-d');
            Blog::addArticle($title, $content, $date);
        }
        return true;
    }

    public function actionDelete() {
        $blog = array();
        $blog = Blog::getBlogList();

        require_once(ROOT . '/views/blog/delete.php');
        return true;
    }
    public function actionDeleteById($id) {
        Blog::deleteArticle($id);
        header("Location: /article/delete");
        return true;
    }
}