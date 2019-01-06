<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model vendor\kouosl\servis\models\ServisKayit */

$this->title = 'Update Servis Kayit: ' . $model->kayit_id;
$this->params['breadcrumbs'][] = ['label' => 'Servis Kayits', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->kayit_id, 'url' => ['view', 'id' => $model->kayit_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="servis-kayit-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
