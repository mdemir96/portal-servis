<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model vendor\kouosl\servis\models\Servis */

$this->title = 'Update Servis: ' . $model->servis_id;
$this->params['breadcrumbs'][] = ['label' => 'Servis', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->servis_id, 'url' => ['view', 'id' => $model->servis_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="servis-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
