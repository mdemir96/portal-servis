<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel vendor\kouosl\servis\models\ServisSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Servis';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="servis-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Servis', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'servis_id',
            'iletisim',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
