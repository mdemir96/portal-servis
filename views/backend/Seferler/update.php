<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model vendor\kouosl\servis\models\Seferler */

$this->title = 'Update Seferler: ' . $model->sefer_id;
$this->params['breadcrumbs'][] = ['label' => 'Seferlers', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->sefer_id, 'url' => ['view', 'id' => $model->sefer_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="seferler-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
