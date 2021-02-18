<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Nomzodlar */

$this->title = 'Update Nomzodlar: ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Nomzodlars', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';

$data = [
     0=> 'STATUS YANGI',
     1=> 'STATUS INTVIYU BEL',
     10 => 'STATUS QABUL QILINGAN',
     20=> 'STATUS QABUL QILINMAGAN',
];
?>
<div class="nomzodlar-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?php $form = ActiveForm::begin()?>
        <?=$form->field($model, 'name')?>
        <?=$form->field($model, 'lastname')?>
        <?=$form->field($model, 'phone')?>
        <?=$form->field($model, 'email')?>
        <?=$form->field($model, 'countryOfOrigin')?>
        <?=$form->field($model, 'address')?>
        <?=$form->field($model, 'age')?>
        <?=$form->field($model, 'status')->dropDownList($data, ['browser-default custom-select'])?>

        <button class= 'btn btn-success'>save</button>
    <?php activeForm::end()?>

</div>
