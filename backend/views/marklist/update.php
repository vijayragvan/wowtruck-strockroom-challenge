<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\marklist */

$this->title = 'Update Marklist: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Marklists', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="marklist-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
		'categories' => $categories,
    ]) ?>

</div>
