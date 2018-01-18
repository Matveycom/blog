<?php

class Blog
{

    public static function getBlogItemById($id)
    {
        $id = intval($id);

        if ($id) {
                        
            $db = Db::getConnection();
            
            $result = $db->query('SELECT * FROM blog WHERE id=' . $id);
            $result->setFetchMode(PDO::FETCH_ASSOC);
            
            $blogItem = $result->fetch();

            return $blogItem;
        }
    }

    public static function getCommentsById($id){
        $id = intval($id);

        if ($id) {

            $db = Db::getConnection();
            $comments = array();

            $result = $db->query('SELECT id, name, id_comment, comment FROM comment '
                . 'WHERE id='. $id.' ORDER BY id_comment DESC ');

            $i = 0;
            while($row = $result->fetch()) {
                $comments[$i]['id'] = $row['id'];
                $comments[$i]['name'] = $row['name'];
                $comments[$i]['id_comment'] = $row['id_comment'];
                $comments[$i]['comment'] = $row['comment'];
                $i++;
            }

            return $comments;
        }
    }

    public static function setComment($name, $comment, $id)
    {
        $db = Db::getConnection();
        $sql = 'INSERT INTO comment(name, comment, id ) '
                            . 'VALUES (:name, :comment, :id )';
        $result = $db->prepare($sql);
        $result->bindParam(':name', $name, PDO::PARAM_STR);
        $result->bindParam(':comment', $comment, PDO::PARAM_STR);
        $result->bindParam(':id', $id, PDO::PARAM_STR);

        return $result->execute();
    }
    public static function getBlogList() {
 
        $db = Db::getConnection();
        
        $blogList = array();

        $result = $db->query('SELECT id, title, date, content '
                . 'FROM blog '
                . 'ORDER BY id DESC '
                . 'LIMIT 10');

        $i = 0;
        while($row = $result->fetch()) {
            $blogList[$i]['id'] = $row['id'];
            $blogList[$i]['title'] = $row['title'];
            $blogList[$i]['date'] = $row['date'];
            $blogList[$i]['content'] = $row['content'];
            $i++;
        }

        return $blogList;
    }

    public static function addArticle($title, $content, $date)
    {
        $db = Db::getConnection();
        $sql = 'INSERT INTO blog(title, content, date ) '
            . 'VALUES (:title, :content, :date )';
        $result = $db->prepare($sql);
        $result->bindParam(':title', $title, PDO::PARAM_STR);
        $result->bindParam(':content', $content, PDO::PARAM_STR);
        $result->bindParam(':date', $date, PDO::PARAM_STR);

        return $result->execute();
    }
    public static function deleteArticle($id)
    {
        $db = Db::getConnection();
        $db->query("DELETE FROM `blog` WHERE id=".$id );
        return true;
    }

}
