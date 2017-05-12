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
                    <h2 class="title text-center">Контакты</h2>

                    <h4>Телефон:</h4>
                    <a>0507689456</a>
                    <br>
                    <h4>Адрес:</h4>
                    <a>М. Луцьк вул. Видродження дом 4</a>
                    <h4>E-mail:</h4>
                    <a>Matveycom@rambler.ru</a>

                </div>
            </div>
        </div>
</section>
<?php include  ROOT.'/views/layouts/footer.php'; ?>
