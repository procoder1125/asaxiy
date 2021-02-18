<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\NomzodlarSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Nomzodlars';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="nomzodlar-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Nomzodlar', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'name',
            'lastname',
            //'address',
           // 'countryOfOrigin',
            'email:email',
            'phone',
            //'age',
            //'hired',
            'status',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
