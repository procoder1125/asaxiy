<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\Man */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Men', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="man-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>



    <div class="box-header">
        <h3 class="box-title">Condensed Full Width Table</h3>
    </div>
    <!-- /.box-header -->

    <div class="row">
        <div class="box-body no-padding col-md-8">
            <table class="table table-condensed">
                <tbody>
                    
                    <tr>
                        <td>1.</td>
                        <th>Name:</th>
                        <td>
                            <div class="">
                                <?= $model->name ?>
                            </div>
                        </td>

                    </tr>
                    <tr>
                        <td>2.</td>
                        <th>Price:</th>
                        <td>
                            <div class="">
                                <?= $model->price ?>
                            </div>
                        </td>

                    </tr>
                    <tr>
                        <td>3.</td>
                        <th>Fabric Name:</th>
                        <td>
                            <div class="">
                                <?= $model->fabric_name ?>
                            </div>
                        </td>

                    </tr>
                    <tr>
                        <td>4.</td>
                        <th>Pattern:</th>
                        <td>
                            <div>
                                <?= $model->pattern ?>
                            </div>
                        </td>

                    </tr>

                    <tr>
                        <td>5.</td>
                        <th>Color:</th>
                        <td>
                            <div>
                                <?= $model->color ?>
                            </div>
                        </td>

                    </tr>

                    <tr>
                        <td>6.</td>
                        <th>Size:</th>
                        <td>
                            <div>
                                <?= $model->size ?>
                            </div>
                        </td>

                    </tr>

                    <tr>
                        <td>7.</td>
                        <th>Return day:</th>
                        <td>
                            <div>
                                <?= $model->return_day ?>
                            </div>
                        </td>

                    </tr>

                    <tr>
                        <td>8.</td>
                        <th>Description:</th>
                        <td>
                            <div class="" style="float:left">
                                <?= $model->description ?>
                            </div>
                        </td>

                    </tr>





                </tbody>
            </table>

        </div>

        <div class="col-md-4">
            <img class="" style="width:220px; height:350px;" src="../../uploads/foto/<?= $model->filename ?> " alt="">
        </div>
    </div>



    <!-- /.box-body -->
</div>

</div>