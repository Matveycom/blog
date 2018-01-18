<?php include ROOT . '/views/layouts/header.php'; ?>


    <?php if($result):?>
        <p>Даные отредактированы!</p>
    <?php else: ?>
        <?php if (isset($errors) && is_array($errors)): ?>
            <ul>
                <?php foreach ($errors as $error): ?>
                    <li> - <?php echo $error; ?> </li>
                <?php endforeach; ?>
            </ul>
        <?php endif; ?>
        <div >
            <h2>Редактирование данных</h2>
            <form action="#" method="post">
                <p>Имя:</p>
                <input type="text" name="name" placeholder="Имя" value="<?php echo $name; ?>"/>
                <p>Пароль:</p>
                <input type="password" name="password" placeholder="Пароль" value="<?php echo $password; ?>"/>
                <br/>
                <input type="submit" name="submit" class="btn btn-default" value="Сохранить" />
            </form>
        </div>
    <?php endif;?>



<?php include ROOT . '/views/layouts/footer.php'; ?>