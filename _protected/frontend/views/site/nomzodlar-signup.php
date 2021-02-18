<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \common\models\LoginForm */

$this->title = Yii::t('app', "Nomzodlar haqida ma'lumot");
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-login">

    <h1><?= Html::encode($this->title) ?></h1>

    <div class="col-lg-5 well bs-component">

        <p><?= Yii::t('app', "Ma'lumot kiriting") ?></p>

        <?php $form = ActiveForm::begin(); ?>

        <?= $form->field($model, 'name') ?>
        <?= $form->field($model, 'lastname') ?>
        <?= $form->field($model, 'email') ?>        
        <?= $form->field($model, 'address') ?>
        <?= $form->field($model, 'phone') ?>
        <?= $form->field($model, 'age') ?>
        <?= $form->field($model, 'countryOfOrigin') ?> 
        <?= $form->field($model, 'description')->textarea(['placeholder' =>'не обязательно'])?>

        

        <div class="form-group">
            <?= Html::submitButton(Yii::t('app', 'Send'), ['class' => 'btn btn-primary', 'name' => 'login-button']) ?>
        </div>

        <?php ActiveForm::end(); ?>

    </div>
  
</div>
