<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\datetime\DateTimePicker;


/* @var $this yii\web\View */
/* @var $model backend\models\paciente */
/* @var $form yii\widgets\ActiveForm */
?>


<div class="paciente-form" id="smartwizard">
<?php $form = ActiveForm::begin(); ?>

    <ul>
        <li><a href="#step-1">Dados Pesoais<br /><small></small></a></li>
        <li><a href="#step-2">Situação Sócio-Familiar<br /><small></small></a></li>
        <li><a href="#step-3">Situação Profissional<br /><small>Step description</small></a></li>
        <li><a href="#step-4"> Menor de idade<br /><small> Dependência de outro</small></a></li>
    </ul>
   
    <div>
    
        <div id="step-1" class="">
       
        <div class="row">
            <div class="col-sm-9">

                 <?= $form->field($model, 'nome')->textInput(['maxlength' => true]) ?>   
            </div>
            <div class="col-sm-3">
                  <?= $form->field($model, 'apilido')->textInput(['maxlength' => true]) ?>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-4">
                 <?= $form->field($model, 'data_nascimento')->textInput(['maxlength' => true]) ?>
            </div>
            <div class="col-sm-4">
                 <?= $form->field($model, 'naturalidade')->textInput(['maxlength' => true]) ?>
            </div>
            <div class="col-sm-4">
                 <?= $form->field($model, 'residencia')->textInput(['maxlength' => true]) ?>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-6">
                     <?= $form->field($model, 'nivel_escolaridade')->textInput(['maxlength' => true]) ?>
            </div>
            <div class="col-sm-6">  
                <?= $form->field($model, 'sexo')->radioList($model->getStatusSexo()) ?>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-3">
                 <?= $form->field($model, 'telefone')->textInput(['maxlength' => true]) ?>
            </div>
            <div class="col-sm-3">
                  <?= $form->field($model, 'telemovel')->textInput(['maxlength' => true]) ?>
            </div>
            <div class="col-sm-3">
                 <?= $form->field($model, 'email')->textInput() ?>
            </div>
            <div class="col-sm-3">
                  <?= $form->field($model, 'cni')->textInput() ?>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                    <?= $form->field($model, 'outro')->textInput(['maxlength' => true]) ?>
            </div>
        </div>
        </div>
        <div id="step-2" class="">
            <div class="row">
                <div class="col-sm-6">
                     <?= $form->field($model, 'estado_civil')->radioList($model->getStatusCivil()) ?>
                </div>
                <div class="col-sm-3">
                      <?= $form->field($model, 'qtd_filho')->textInput() ?>
                </div>
                <div class="col-sm-3">
                      <?= $form->field($model, 'qtd_familia')->textInput() ?>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-4">
                      <?= $form->field($model, 'pre_escolar')->textInput() ?>
                </div>
                <div class="col-sm-4">
                          <?= $form->field($model, 'universitario')->textInput() ?>
                </div>
                <div class="col-sm-4">
                      <?= $form->field($model, 'segundario')->textInput() ?>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-4">
                         <?= $form->field($model, 'trabalhador')->textInput() ?>
                </div>
                <div class="col-sm-4">
                    
                     <?= $form->field($model, 'desempregado')->textInput() ?>
                </div>
                <div class="col-sm-4">
                      <?= $form->field($model, 'ebo')->textInput() ?>
                </div>
            </div>
        
            <div class="row">
                <div class="col-sm-6">
                      <?= $form->field($model, 'maior_idade')->textInput() ?>
                </div>
                <div class="col-sm-6">
                      <?= $form->field($model, 'menor_idade')->textInput() ?>
                </div>
            </div>
        </div>
        <div id="step-3" class="">
            <div class="row">
                <div class="col-sm-3">
                <?= $form->field($model, 'profissao')->textInput() ?>
                      
                </div>
                <div class="col-sm-6">
                     
                      <?= $form->field($model, 'tipo_instituicao')->radioList($model->getStatusCompany()) ?>
                </div>
                <div class="col-sm-3">
                         <?= $form->field($model, 'nome_instituicao')->textInput(['maxlength' => true]) ?>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-4">
                          <?= $form->field($model, 'estudante')->textInput(['maxlength' => true]) ?>
                </div>
                <div class="col-sm-4">
                       
                          <?= $form->field($model, 'instituicao_segurado')->radioList($model->getStatusInsuredWere()) ?>
                </div>
                <div class="col-sm-4">
                          <?= $form->field($model, 'outros')->textInput() ?>
                </div>
            </div>
        </div>
        <div id="step-4" class="">
            <div class="row">
         
                <div class="col-sm-4">
              
                        <?= $form->field($model, 'nome_pais')->textInput(['maxlength' => true]) ?>
                </div>
                <div class="col-sm-4">
                      <?= $form->field($model, 'morada_pais')->textInput(['maxlength' => true]) ?>
                </div>
                <div class="col-sm-4">
                
                     <?= $form->field($model, 'grau_pais')->textInput(['maxlength' => true]) ?>
                     <div class="form-group">
                    <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
                    </div>
                   
                </div>
               
                
            </div>
        </div>
                
        
    </div>
                



               

</div>



<?php
$script = <<<JS
$(document).ready(function(){
$('#smartwizard').smartWizard();
}); 
JS;
$this->registerJS($script);
?>