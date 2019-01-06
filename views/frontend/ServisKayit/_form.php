<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model vendor\kouosl\servis\models\ServisKayit */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="servis-kayit-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'kayit_id')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
