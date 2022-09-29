<?php

use app\assets\AppAsset;

use yii\bootstrap5\Modal;
use yii\helpers\Html;
use yii\helpers\Url;


AppAsset::register($this);
$this->registerCsrfMetaTags();
$this->title = 'Garant';
$this->registerMetaTag(['charset' => Yii::$app->charset], 'charset');
?>
<?php $this->beginPage() ?>

    <!doctype html>
    <html lang="<?= Yii::$app->language ?>">
    <head>

        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title><?= Html::encode($this->title) ?></title>
        <?php $this->head() ?>
    </head>
    <body>
    <?php $this->beginBody() ?>
    <header>
        <nav class="navbar navbar-light bg-light">
            <div class="container">
                <span class="navbar-brand mb-0 h1"><a href="<?= Url::home(); ?>">Garant</a></span>
                <div class="navbar-text">
                    <?php
                    if (Yii::$app->user->isGuest) {
                    ?>
                    <a class="btn" href="<?=Url::toRoute(['garant/login']);?>">Вход</a>
                    <?php
                    }
                    else{
                    ?>
                        <a class="btn" href="<?=Url::toRoute(['garant/logout']);?>">Выход</a>
                    <?php
                    }
                    ?>


                </div>
            </div>

        </nav>

        <?php




        ?>
    </header>
    <main>
        <?=$content?>
    </main>
    <footer>

    </footer>
    <?php $this->endBody() ?>
    </body>
    </html>
<?php $this->endPage() ?>