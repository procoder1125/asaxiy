<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\helpers\Url;
use common\models\Nomzodlar;

/* @var $this yii\web\View */
/* @var $searchModel common\models\StudentSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Kelgan xabarni o`qish';
$this->params['breadcrumbs'][] = $this->title;


?>
<style>
    #search_container {
        text-align: center;
    }

    #results {
        text-align: left;
        border: solid 1px #777;
        display: none;
        margin: 0 auto;
        width: 180px;
    }

    .result {
        background-color: #f2f2f2;
        position: absolute;
        z-index: 999;
        top: 100%;
        left: 0;
    }

    .result p {
        margin: 0;
        padding: 7px 10px;
        border: 1px solid #CCCCCC;
        border-top: none;
        cursor: pointer;
    }

    .result p:hover {
        background: #ccccff;
    }
</style>
<div class="student-index">

    <h1><?= Html::encode($this->title) ?></h1>

  

    <div class="row">


        <div class="col-md-10">
            <div class="box" style="width:100%; height:80%;">
                <div class="box-header">
                    <h3 class="box-title"> <?=$model->name?> <?=$model->lastname?>  </h3>

                    <div class="box-tools">
                        <div class="input-group input-group-sm search-box" style="width:80%;">
                            <div style="width:200px;" id='results' class='result' class='form-control pull-right'></div>
                            <div style="border-radius:5px;">
                              <p style="background-color: white; border-radius:5px; display:block; padding:20px 30px; font-size:16px;"><?=$model->description?> </p>
                            </div>    
                        </div>
                    </div>
                </div>
                
            </div>
            <!-- /.box -->
        </div>
    </div>


</div>
<script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
<script type="text/javascript">
  

    // $(document).ready(function() {
    //     $("#search").keyup(function() {
    //         var query = $(this).val();
    //         if (query != "") {
    //             $.ajax({
    //                 url: '/admin/student/index',
    //                 method: 'POST',
    //                 data: {
    //                     query: query
    //                 },
    //                 success: function(data) {
    //                     console.log(data);
    //                     $('#results').html(data);
    //                     $('#results').css('display', 'block');
    //                     $("#country").focusout(function() {
    //                         $('#results').css('display', 'none');
    //                     });
    //                     $("#country").focusin(function() {
    //                         $('#results').css('display', 'block');
    //                     });
    //                 }
    //             });
    //         } else {
    //             $('#results').css('display', 'none');
    //         }
    //     });
    // });
</script>