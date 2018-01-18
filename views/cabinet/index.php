<?php include ROOT . '/views/layouts/header.php'; ?>


<div class="usercabinet">
            <h1>Кабинет пользователя</h1>
            <h3>привет, <?php echo $user['name']; ?></h3>
            <h3><?php if ($user['permission'] == 1) echo 'Админ'.'<br>';?></h3>

                <h3><a href="/cabinet/edit">Редактировать данные</a></h3>
</div>
<?php include ROOT . '/views/layouts/footer.php'; ?>