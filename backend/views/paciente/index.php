<?php

use yii\helpers\Html;
use yii\grid\GridView;
use \yii\widgets\LinkPager;
use yii\helpers\Url;
use yii\bootstrap\Modal;
///use backend\controllers\model;


/* @var $this yii\web\View */
/* @var $searchModel backend\models\pacienteSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Pacientes';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="paciente-index">

    <h1><?= Html::encode($this->title) ?></h1>

   

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>
    
        <div class="tab-pane active" id="Todos" role="tabpanel" aria-labelledby="nav-pills">                          
        <div class="row mt-3">
            <div class="col-sm-2">
                 <?= Html::a('Create Paciente', ['create'], ['class' => 'btn btn-warning']) ?>
                
            </div>
           
            <div class="col-sm-10 text-right">
               <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                   <div class="input-group">
                       <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                       <div class="input-group-append">
                           <button class="btn btn-primary" type="button">
                               <i class="fas fa-search fa-sm"></i>
                           </button>
                       </div>
                   </div>
               </form>
            </div>

        </div>
       <div class="card mt-4">
           <div class="card-body p-0">
               <div class="table-responsive">
                   <table class="table">
                       <thead>
                           <tr>
                               <th scope="col">#</th>
                               <th scope="col">NOME</th>
                               <th scope="col">SEXO</th>
                               <th scope="col">CNI</th>
                               <th scope="col">OPÇÃO</th>

                           </tr>
                       </thead>
                       <tbody>
                          
                           <?php foreach($model as $paciet): ?>
                            <tr>
                                <th scope="row"><?= $paciet->id_paciente?></th>
                                <td>
                                     <?= $paciet->nome?>
                                </td>
                                <td>
                                      <?= $paciet->sexo?>
                                </td>
                                <td>
                                     <?= $paciet->cni?>
                                </td>
                                <td class="button-rigth mr-10">
                                    <div class="button-rigth">
                                       <!-- <button type="button" class="btn btn-warning">Visualizar</button>-->
                                        <?= Html::a('Visualização', ['view', 'id' => $paciet->id_paciente], ['class' => 'btn btn-warning']) ?> 
                                        <!--<button type="button" class="btn btn-primary">Edit</button>-->
                                        <?= Html::a('Edit', ['update', 'id' => $paciet->id_paciente], ['class' => 'btn btn-primary']) ?> 
                                        <!--<button type="button" class="btn btn-danger">Delete</button>-->
                                        <?= Html::a('Delete', ['delete', 'id' => $paciet->id_paciente], [
                                            'class' => 'btn btn-danger',
                                            'data' =>
                                                [
                                                    'confirm' => 'Are you sure you want to delete this item?',
                                                    'method' => 'post',
                                                ],
                                        ]) ?> 
                                           
                                            <?= Html::a('Active', ['active', 'id' => $paciet->id_paciente], ['class' => 'btn btn-primary']) ?> 
                                    </div>
                                </td>

                            </tr>
                            
                           <?php endforeach; ?>
                           
                       </tbody>
                   </table>
               </div>
           </div>
       </div>
       


<?=    LinkPager::widget([

'pagination' => $pagination,

]); ?>
   </div>
  
  <!--
    </*?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_paciente',
            'nome',
            'apilido',
            'data_nascimento',
            'naturalidade',
            //'residencia',
            //'telefone',
            //'telemovel',
            //'nivel_escolaridade',
            //'outro',
            //'email:email',
            //'cni',
            //'sexo',
            //'estado_civil',
            //'qtd_filho',
            //'qtd_familia',
            //'maior_idade',
            //'menor_idade',
            //'pre_escolar',
            //'universitario',
            //'segundario',
            //'trabalhador',
            //'desempregado',
            //'ebo',
            //'profissao',
            //'tipo_instituicao',
            //'nome_instituicao',
            //'estudante',
            //'instituicao_segurado',
            //'outros',
            //'nome_pais',
            //'morada_pais',
            //'grau_pais',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); */?>-->


</div>
<?php
$script = <<<JS
$(document).ready(function(){
$('#smartwizard').smartWizard();
}); 
JS;
$this->registerJS($script);
?>
