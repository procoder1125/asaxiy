<?php

use yii\helpers\Html;
use yii\grid\GridView;
use common\models\Categories;
use yii\helpers\Url;

/* @var $this yii\web\View */
/* @var $searchModel common\models\CategoryChildSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Category Children';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="category-child-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Category Child', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); 
    ?>

    <div class="row">


        <div class="col-md-11">
            <div class="" >
                <div class="box-header">
                    <h3 class="box-title">Responsive Hover Table</h3>

                    <div class="box-tools">
                        <div class="input-group input-group-sm" style="width: 150px;">
                            <input type="text" name="table_search" class="form-control pull-right" placeholder="Search">

                            <div class="input-group-btn">
                                <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.box-header -->
                <div class="box-body table-responsive no-padding" style="border:1px solid;">
                    <table class="table table-hover">
                        <tbody>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Category name</th>
                                <th>Status</th>
                                <th>Reason</th>
                            </tr>

                            <?php foreach ($category_child as $category) : ?>
                                <?php
                                $data = [
                                    '1' => 'man',
                                    '2' => 'woman',
                                    '3' => 'girls',
                                    '4' => 'boys',
                                ];
                                ?>
                                <tr>
                                    <td><?= $category->id ?></td>
                                    <td><a href="<?=Url::to(['/products/index' , 'id' => $category->id ])?>"> <?=$category->title?> </a></td>

                                    <td><a href="<?=Url::to(['/products/index' , 'id' => $category->id])?>"><?= Categories::find()->where(['id' => $category->category_id])->one()->title; ?></a></td>
                                    <td><span class="label label-success"><a href="<?=Url::to(['/products/create', 'id' => $category->id])?>" style="color: white; font-size:larger;">добавить продукт</a> </span></td>
                                    <td>Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.</td>
                                </tr>

                            <?php endforeach ?>


                        </tbody>
                    </table>
                </div>
                <!-- /.box-body -->
            </div>
            <!-- /.box -->
        </div>
    </div>