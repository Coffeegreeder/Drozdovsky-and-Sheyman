<?php

use yii\widgets\ActiveForm;
use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Blog */

$this->title = 'Добавить запись';


?>

<!--Форма загрузки постов-->

<div class="form">
    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'title')->textInput(); ?>
    <?= $form->field($model, 'content')->textarea(['rows' => '20']); ?>

    <?= Html::submitButton('Отправить',['class'=>'btn btn-primary']); ?>

    <?php ActiveForm::end(); ?>
</div>
