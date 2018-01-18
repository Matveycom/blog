
<?php include  ROOT.'/views/layouts/header.php'; ?>

        <?php if (User::isGuest() == false)
            if ($user['permission'] == 1): ?>
                <div class="article">
                    <a href="/article/create/">Создать статью</a>
                    <a href="/article/delete/">Удалить статью</a>
                </div>
        <?php endif?>
                <div class="view">

        <?php foreach ($blog as $blogList):; ?>
            <h3><a href="/<?php echo $blogList['id']; ?>">
                <?php echo $blogList['title']; ?></a></h3>

            <p><?php if(strlen($blogList['content']) >= 300) { echo substr($blogList['content'],
                        0, strpos($blogList['content'], ' ', 300)).'...';}
            else echo $blogList['content']?></p>
            <p><?php echo $blogList['date']; ?></p>
            <br>
        <?php endforeach;?>
                </div>
<?php include  ROOT.'/views/layouts/footer.php'; ?>
