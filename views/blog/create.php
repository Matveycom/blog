
<?php include  ROOT.'/views/layouts/header.php'; ?>


<div class="create">
    <form action="#" method="post">


    <p>Заголовок</p>
    <input type="text" name="title" placeholder="Заголовок"  required/>
        <br>
        <p>Текст</p>
        <textarea name="content" placeholder="текст" required
                  cols="20" rows="10">Текст</textarea>
<!--        <input type="text" name="content" placeholder="Текст"  required/>-->
        <br>
        <input type="submit" name="addArticle" value="добавить" />
    </form>
</div>



<?php include  ROOT.'/views/layouts/footer.php'; ?>