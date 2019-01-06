<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model vendor\kouosl\servis\models\Seferler */

$this->title = 'Create Seferler';
$this->params['breadcrumbs'][] = ['label' => 'Seferlers', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="seferler-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
