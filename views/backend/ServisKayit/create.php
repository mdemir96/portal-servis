<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model vendor\kouosl\servis\models\ServisKayit */

$this->title = 'Create Servis Kayit';
$this->params['breadcrumbs'][] = ['label' => 'Servis Kayits', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="servis-kayit-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
