<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\marklist */

$this->title = 'Create Marklist';
$this->params['breadcrumbs'][] = ['label' => 'Marklists', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="marklist-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
		'categories' => $categories,
    ]) ?>

</div>
