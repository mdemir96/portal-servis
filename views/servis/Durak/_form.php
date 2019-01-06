<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model vendor\kouosl\servis\models\Durak */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="durak-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'durak_adi')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
