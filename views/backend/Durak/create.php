<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model vendor\kouosl\servis\models\Durak */

$this->title = 'Create Durak';
$this->params['breadcrumbs'][] = ['label' => 'Duraks', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="durak-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
