<?php include  ROOT.'/views/layouts/header.php'; ?>
<div class="delete">
<?php foreach ($blog as $blogList):; ?>
    <table>

    <tr><td><a href="/<?php echo $blogList['id']; ?>">
            <?php echo $blogList['title']; ?></a></td>
    <td><p><?php echo $blogList['date']; ?></p></td>
    <td><form action="#" method="post">
        <a href="/article/delete/<?php echo $blogList['id']; ?>">удалить</a>
    </form></td></tr>
    </table>
<?php endforeach;?>
</div>



<?php include  ROOT.'/views/layouts/footer.php'; ?>