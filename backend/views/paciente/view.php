<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\paciente */

$this->title = $model->id_paciente;
$this->params['breadcrumbs'][] = ['label' => 'Pacientes', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="paciente-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id_paciente], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id_paciente], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
        <?= Html::a('<i class="fa far fa-hand-point-up"></i> Privacy Statement', ['print', 'id' => $model->id_paciente], [
    'class'=>'btn btn-danger', 
    'target'=>'_blank', 
    'data-toggle'=>'tooltip', 
    'title'=>'Will open the generated PDF file in a new window'
]);?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id_paciente',
            'nome',
            'apilido',
            'data_nascimento',
            'naturalidade',
            'residencia',
            'telefone',
            'telemovel',
            'nivel_escolaridade',
            'outro',
            'email:email',
            'cni',
            //'sexo',
            [
                'attribute'=>'sexo',
                'value' => function ($model) {
                  // return $model->sex == 1 ? 'Masculino' : 'Fiminino';
                   if($model->sexo == 1){
                       return 'Masculino';
                   }
                   if($model->sexo == 0){
                     return 'Fiminino';
                 }
                 }
             ],
           // 'estado_civil',
            [
                'attribute'=>'Estado Civil',
                'value' => function ($model) {
                  
                   if( $model->estado_civil  == 11 ){
                       return 'Solteiro';
                   }
                   if( $model->estado_civil  == 12){
                     return 'Casado';
                   } 
                   if( $model->estado_civil == 13){
                        return 'Devorciado';
                   }
                   if( $model->estado_civil== 14){
                    return 'Viúvo';
                   }
               }
             ],
            'qtd_filho',
            'qtd_familia',
            'maior_idade',
            'menor_idade',
            'pre_escolar',
            'universitario',
            'segundario',
            'trabalhador',
            'desempregado',
            'ebo',
            'profissao',
            //'tipo_instituicao',
            [
                'attribute'=>'Onde trabalha',
                'value' => function ($model) {
                  
                   if( $model->tipo_instituicao  == 14 ){
                       return 'Função Pública';
                   }
                   if( $model->tipo_instituicao  == 15){
                     return 'Empresa Privada';
                   } 
                   if( $model->tipo_instituicao == 16){
                        return 'Conta Propria';
                   }
                   
               }
             ],
            'nome_instituicao',

            'estudante',
            'instituicao_segurado',
            [
                'attribute'=>'Mome de instituicao seguradora',
                'value' => function ($model) {
                  
                   if( $model->instituicao_segurado  == 1 ){
                       return 'INPS';
                   }
                   if( $model->instituicao_segurado  == 2){
                     return 'GARANTIA';
                   } 
                   if( $model->instituicao_segurado == 3){
                        return 'IMPAR';
                   }
                   
               }
             ],
            'outros',
            'nome_pais',
            'morada_pais',
            'grau_pais',
            'data_at'
        ],
    ]) ?>

</div>
