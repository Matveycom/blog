<?php include ROOT . '/views/layouts/header.php'; ?>

<section>
    <div class="container">
        <div class="row">
            <h1>Кабинет пользователя</h1>
            <h3>привет, <?php echo $user['name']; ?></h3>
            <ul>
                <li><a href="/magaz/cabinet/edit">Редактировать данные</a></li>
                <li><a href="/magaz/cabinet/history">Список покупок</a></li>
            </ul>
        </div>
    </div>
</section>
<?php include ROOT . '/views/layouts/footer.php'; ?>