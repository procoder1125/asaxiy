<?php

use yii\helpers\Html;
use yii\grid\GridView;
use common\models\CategoryChild;
use yii\helpers\Url;

/* @var $this yii\web\View */
/* @var $searchModel common\models\ProductsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Products';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="products-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
       <a href="<?=Url::to(['create', 'id' => $id])?>" class = "btn btn-success">create product</a>
    </p>

<div class="">
            <div class="box-header with-border">
              <h3 class="box-title">Bordered Table</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table class="table table-bordered">
                <tbody><tr>
                  <th style="width: 10px">#</th>
                  <th>Name</th>
                  <th>Category</th>
                  <th>Price</th>
                  <th>Fabric name</th>
                  <th>Image</th>
                  
                </tr>

                <?php foreach($products as $product):?>
                
                <tr>
                  <td><?=$product->id?></td>
                  <td><?=$product->name?></td>
                  <td><?=CategoryChild::findOne(['id' => $product->category_id])->title?></a></td>
                  <td><?=$product->price?></td>
                  <td><?=$product->fabric_name?></td>
                  <td><a href="<?=Url::to(["view", "id" => $product->id])?>"><img class="" style="width:60px; height:50px;" src="../../uploads/foto/<?=$product->filename?>" alt=""></a></td>
                </tr> 
                <?endforeach?>



                
              </tbody></table>
            </div>
            <!-- /.box-body -->
            <div class="box-footer clearfix">
              <ul class="pagination pagination-sm no-margin pull-right">
                <li><a href="#">«</a></li>
                <li><a href="#">1</a></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#">»</a></li>
              </ul>
            </div>
          </div>


</div>
