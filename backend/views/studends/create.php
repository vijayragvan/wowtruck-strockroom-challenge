<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\Studends */

$this->title = 'Create Studends';
$this->params['breadcrumbs'][] = ['label' => 'Studends', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="studends-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
