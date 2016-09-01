<?php

use yii\helpers\ArrayHelper;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\marklist */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="marklist-form">

    <?php $form = ActiveForm::begin(); ?>

	
	<?= $form->field($model, 'id')->dropDownList(ArrayHelper::map($categories, 'id', 'name'), ['prompt' => 'Select Student']) ?>

    <?= $form->field($model, 'English')->textInput() ?>

    <?= $form->field($model, 'Maths')->textInput() ?>

    <?= $form->field($model, 'Science')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
