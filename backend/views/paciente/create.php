<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\paciente */

$this->title = 'Create Paciente';
$this->params['breadcrumbs'][] = ['label' => 'Pacientes', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="paciente-create">
    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
