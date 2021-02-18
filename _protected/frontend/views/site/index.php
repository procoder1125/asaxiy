<?php
use yii\helpers\Url;
/* @var $this yii\web\View */
$this->title = Yii::t('app', Yii::$app->name);
?>
<div class="site-index">

    <div class="jumbotron">
        <h1>Congratulations!</h1>

        <p class="lead">Ro'yhatdan o'tish uchun havoni bosing</p>

        <p><a class="btn btn-lg btn-success" href="<?=Url::to(['/site/nomzodlar-signup'])?>">Ro'yhatdan o'tish</a></p>
    </div>

    <div class="body-content">

        
    </div>
</div>

