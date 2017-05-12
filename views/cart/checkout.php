<?php include  ROOT.'/views/layouts/header.php'; ?>

<section>
    <div class="container">
        <div class="row">
            <div class="col-sm-3">
                <div class="left-sidebar">
                    <h2>Каталог</h2>
                    <div class="panel-group category-products">
                        <?php foreach ($categories as $categoryItem): ?>
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a href="/magaz/category/<?php echo $categoryItem['id'];?>">
                                            <?php echo $categoryItem['name'];?>
                                        </a>
                                    </h4>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>


            <div class="col-sm-9 padding-right">
                <div class="features_items">
                    <h2 class="title text-center">Корзина</h2>
                </div>
            </div>
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-4 col-sm-offset-4 padding-right">
                                <?php if(isset($totalPrice)): ?>
                                <p>Всего товаров <?php //echo $totalQuantity; ?></p>
                                <p>Общая стоимость покупки <?php echo $totalPrice; ?></p>
                                <?php endif; ?>
                                <?php if (isset($errors) && is_array($errors)): ?>
                                    <ul>
                                        <?php foreach ($errors as $error): ?>
                                            <li> - <?php echo $error; ?> </li>
                                        <?php endforeach; ?>
                                    </ul>
                                <?php endif; ?>
                                    <div class="signup-form">

                                        <p>Для оформления заказа заполните форму. Наш менеджер свяжется с Вами.</p>
                                        <form action="#" method="post">
                                            <p>Имя:</p>
                                            <input type="text" name="userName" placeholder="Имя" value="<?php echo $userName; ?>"/>
                                            <p>Номер телефона:</p>
                                            <input type="text" name="userPhone" placeholder="Номер телефона" value="<?php echo $userPhone; ?>"/>
                                            <p>Коментарий к заказу:</p>
                                            <input type="text" name="userComment" placeholder="Коментарий к заказу" value="<?php echo $userComment; ?>"/>
                                            <br/>
                                            <input type="submit" name="submit" class="btn btn-default" value="Отправить" />
                                        </form>
                                    </div>

                                <br/>
                                <br/>
                            </div>
                        </div>
                    </div>

        </div>
</section>
<?php include  ROOT.'/views/layouts/footer.php'; ?>
