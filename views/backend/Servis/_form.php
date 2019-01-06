<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model vendor\kouosl\servis\models\Servis */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="servis-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'iletisim')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
