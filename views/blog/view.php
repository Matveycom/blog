
<?php include  ROOT.'/views/layouts/header.php'; ?>


    <h2 class="title"><a href="/<?php echo $newsItem['id'];?>"><?php echo $newsItem['title'];?></a></h2>
    <br/>
    <p><?php echo $newsItem['date'];?></p>
    <p><?php echo $newsItem['content'];?></p>

    <?php ?>
    <?php if (User::isGuest() == false):?><h2>Добавить коментарий</h2>
<form action="#" method="post">

    <input type="text" name="text" placeholder="Текст" maxlength="500"  value="<?php ?>"/>
    <br>
    <input type="text" name="name" placeholder="Имя отправителя" required value="<?php  ?>"/>
    <input type="submit" name="submit" value="Отправить" />
</form>
    <?php endif;?>
<?php foreach ($comments as $commentList):; ?>
    <br>
    <a><?php echo $commentList['name']; ?></a>
    <a><?php echo $commentList['comment']; ?></a>
    <br>
<?php endforeach;?>


 <?php include  ROOT.'/views/layouts/footer.php'; ?>