<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use common\models\CategoryChild;
/* @var $this yii\web\View */
/* @var $model common\models\Man */

$categories = CategoryChild::find()->where(['category_id' => $parent_id])->all();
$data = [];
foreach ($categories as $category) {
    $data[$category->id] = $category->title;
}

$this->title = 'Create Man';
$this->params['breadcrumbs'][] = ['label' => 'Men', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="man-create " style="margin-bottom:15px;">

    <h1><?= Html::encode($this->title) ?></h1>

    <?php $form = ActiveForm::begin() ?>
   
    <?= $form->field($model, 'foto')->fileInput() ?>
    <?= $form->field($model, 'name')->textInput() ?>
    <?= $form->field($model, 'price')->textInput() ?>
    <?= $form->field($model, 'fabric_name')->textInput() ?>
    <?= $form->field($model, 'pattern')->textInput() ?>
    <?= $form->field($model, 'type')->textInput() ?>
    <?= $form->field($model, 'color')->textInput() ?>
    <?= $form->field($model, 'size')->textInput(['type' => 'number']) ?>
    <?= $form->field($model, 'return_day')->textInput() ?>
    <?= $form->field($model, 'description')->textarea() ?>

    <button class="btn btn-primary">save</button>


    <?php ActiveForm::end() ?>
</div>
