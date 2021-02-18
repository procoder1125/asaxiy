<?php

use yii\helpers\Html;
use common\models\Categories;
use yii\widgets\ActiveForm;

$categories = Categories::find()->all();
$data = [];
foreach($categories as $category){
    $data[$category->id] = $category->title;
}

/* @var $this yii\web\View */
/* @var $model common\models\CategoryChild */

$this->title = 'Create Category Child';
$this->params['breadcrumbs'][] = ['label' => 'Category Children', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="category-child-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?php $form = ActiveForm::begin()?>
     <?=$form->field($model, 'title')->input('text')?>
     <?=$form->field($model, 'category_id')->dropDownList($data,['browser-default custom-select'])?>
    <button class="btn btn-success">save</button> 
     <?php ActiveForm::end()?>

</div>
