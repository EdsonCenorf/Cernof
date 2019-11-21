<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\pacienteSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="paciente-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id_paciente') ?>

    <?= $form->field($model, 'nome') ?>

    <?= $form->field($model, 'apilido') ?>

    <?= $form->field($model, 'data_nascimento') ?>

    <?= $form->field($model, 'naturalidade') ?>

    <?php // echo $form->field($model, 'residencia') ?>

    <?php // echo $form->field($model, 'telefone') ?>

    <?php // echo $form->field($model, 'telemovel') ?>

    <?php // echo $form->field($model, 'nivel_escolaridade') ?>

    <?php // echo $form->field($model, 'outro') ?>

    <?php // echo $form->field($model, 'email') ?>

    <?php // echo $form->field($model, 'cni') ?>

    <?php // echo $form->field($model, 'sexo') ?>

    <?php // echo $form->field($model, 'estado_civil') ?>

    <?php // echo $form->field($model, 'qtd_filho') ?>

    <?php // echo $form->field($model, 'qtd_familia') ?>

    <?php // echo $form->field($model, 'maior_idade') ?>

    <?php // echo $form->field($model, 'menor_idade') ?>

    <?php // echo $form->field($model, 'pre_escolar') ?>

    <?php // echo $form->field($model, 'universitario') ?>

    <?php // echo $form->field($model, 'segundario') ?>

    <?php // echo $form->field($model, 'trabalhador') ?>

    <?php // echo $form->field($model, 'desempregado') ?>

    <?php // echo $form->field($model, 'ebo') ?>

    <?php // echo $form->field($model, 'profissao') ?>

    <?php // echo $form->field($model, 'tipo_instituicao') ?>

    <?php // echo $form->field($model, 'nome_instituicao') ?>

    <?php // echo $form->field($model, 'estudante') ?>

    <?php // echo $form->field($model, 'instituicao_segurado') ?>

    <?php // echo $form->field($model, 'outros') ?>

    <?php // echo $form->field($model, 'nome_pais') ?>

    <?php // echo $form->field($model, 'morada_pais') ?>

    <?php // echo $form->field($model, 'grau_pais') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
