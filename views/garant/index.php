<div class="container">
    <h1 class="text-center">Тестовое задание для Garant от Чупанова Руслана</h1>
    <?php
    if (!Yii::$app->user->isGuest){
    ?>
        <h3 class="text-center">Ваш email:<?=Yii::$app->user->identity->email?></h3>
    <?php
    }
    ?>
</div>