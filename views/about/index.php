
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
                    <h2 class="title text-center">О нас</h2>


                    <a>Всегда
                        Вы можете позвонить, отправить письмо с вопросами, заполнить форму обратной связи и железно получить ответ.

                        Потому что, мы не бросаем слова на ветер, как и вопросы, которые нам поступают.

                        Вовремя
                        Если мы сказали, что доставим через день, то мы точно доставим через день. Если мы сказали, что перезвоним через час, то мы перезвоним через час.

                        Потому что в рабочее время все тут, все на месте.

                    </a>

                </div>
            </div>
        </div>
</section>
<?php include  ROOT.'/views/layouts/footer.php'; ?>
