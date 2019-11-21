<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\cliente */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="cliente-form">

    
    <?php $form = ActiveForm::begin(); ?>
    .<div class="row">
    <div class="col-sm-6">
    <?= $form->field($model, 'nome')->textInput(['maxlength' => true]) ?>
    </div>
    <div class="col-sm-6">
    
    <?= $form->field($model, 'morada')->textInput(['maxlength' => true]) ?>
    </div>
    </div>
    

 
    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>
   
    
    <?php ActiveForm::end(); ?>
    

</div>



