<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model vendor\kouosl\servis\models\Durak */

$this->title = 'Update Durak: ' . $model->durak_id;
$this->params['breadcrumbs'][] = ['label' => 'Duraks', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->durak_id, 'url' => ['view', 'id' => $model->durak_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="durak-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
