<?php
use yii\helpers\Html;
use yii\grid\GridView;
use backend\models\Channels;
use backend\models\Shipstation;
use yii\widgets\Breadcrumbs;
use backend\models\Integrations;
?>
<?php 
$this->title = 'All Translation';
$this->params['breadcrumbs'][] = ['label' => 'Settings', 'url' => 'javascript: void(0)', 'class' => 'non_link'];
$this->params['breadcrumbs'][] = ['label' => 'Integrations', 'url' => 'javascript: void(0)', 'class' => 'non_link'];
$this->params['breadcrumbs'][] = ['label' => 'Translations', 'url' => ['/integrations/translation-all']];
$this->params['breadcrumbs'][] = 'View All';
$user_id = Yii::$app->user->identity->id;
?>

<div class="page-head">
    <h2 class="page-head-title"><?= Html::encode($this->title) ?></h2>
    <ol class="breadcrumb page-head-nav">
        <?php
        echo Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]);
        ?>
    </ol>
</div>

<div class="row">
    <div class="col-sm-12">
        <div class="panel panel-default panel-table" >
            <div class="panel-heading">
                <div class="tools">
                    <a href="<?php //echo $new_basepath  ?>/export-user"><span class="icon mdi mdi-download"></span></span></a>
                    <span class="icon mdi mdi-more-vert"></span>
                </div>
            </div>
            <div class="panel-body">
                <table id="channels_view_table" class="table table-striped table-hover table-fw-widget">
                    <thead>

                        <tr>
                            <th>Translation</th>
                            <!--<th>Products in Fulfillment</th>
                            <th>Orders Pending in Fulfillment</th>!-->
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody> 
                    <tr class="odd" role="row">
                                <td class="sorting_1">Smartling</td>
                                <td><a href="/integrations/smartling">Get Connected</a></td>    
                            </tr>
                            </tbody>
                </table>
            </div>
        </div>
    </div>
</div>