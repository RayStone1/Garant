<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

?>
<div class="popup" id="sign_popup">
    <div class="popup__container">
        <div class="popup_body shadow">
            <div class=" border-none flex-column">

                <?= Html::img('@web/assets/image/logo.png', ['alt' => 'My logo','class'=>'w-75 text-center mb-4']) ?>

            </div>

            <!-- Табы-->
            <ul class="nav nav-tabs nav-justified mb-3" id="pills-tab" role="tablist">
                <li class="nav-item tab__title" role="presentation">
                    <button class="btn btn-bottom w-100 rounded-0 active" data-bs-toggle="pill" data-bs-target="#pills-sign-v1" type="button" role="tab" aria-controls="pills-sign-v1" aria-selected="true"><p>Вход по логину и паролю</p></button>
                </li>
                <li class="nav-item tab__title" role="presentation">
                    <button class="btn btn-bottom w-100 rounded-0" data-bs-toggle="pill" data-bs-target="#pills-sign-v2" type="button" role="tab" aria-controls="pills-sign-v2" aria-selected="false"><p>Вход по логину и паролю</p></button>
                </li>

            </ul>
            <div class="tab-content" id="pills-tabContent">
                <div class="tab-pane fade show active" id="pills-sign-v1" role="tabpanel" aria-labelledby="pills-home-tab" tabindex="0">
                    <?php $form=ActiveForm::begin([
                        'action'=>['garant/login']
                    ])?>
                    <?=$form->field($model,'email')->textInput(['class' => 'form-control '])->label('Email')?>
                    <br>
                    <?=$form->field($model,'password')->input('password')->label('Пароль')?>
                    <?= $form->field($model, 'rememberMe')->checkbox(
                        [
                            'template' => "<div class=\"offset-lg-1 col-lg-3 custom-control custom-checkbox\">{input} {label}</div>\n<div class=\"col-lg-8\">{error}</div>,",

                        ]) ?>
                    <?=Html::submitButton('Войти',['class'=>'subbtn btn w-100 p-2 my-4'])?>
                    <?php ActiveForm::end()?>
                </div>
                <div class="tab-pane fade" id="pills-sign-v2" role="tabpanel" aria-labelledby="pills-profile-tab" tabindex="0">
                    <?php

                    $formArm=ActiveForm::begin([

                    ])?>
                    <?=$formArm->field($arm,'arm')->textInput(['class' => 'form-control','id'=>'arm'])->label('АРМ ')?>
                    <br>
                    <?=$formArm->field($arm,'email_arm')->input('email')->label('Электронная почта')?>
                    <br>
                    <?=$formArm->field($arm,'password',)->input('password')->label('Пароль')?>
                    <?= $formArm->field($arm, 'rememberMe')->checkbox(
                        [
                            'template' => "<div class=\"offset-lg-1 col-lg-3 custom-control custom-checkbox\">{input} {label}</div>\n<div class=\"col-lg-8\">{error}</div>,",

                        ]) ?>

                    <?=Html::submitButton('Войти',['class'=>'subbtn btn w-100 p-2 my-4'])?>
                    <?php ActiveForm::end()?>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="popup">
    <div class="">
        <div class="">

        </div>
    </div>
</div>