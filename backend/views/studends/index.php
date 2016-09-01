<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\StudendsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Studends';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="studends-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>
<?php if (!Yii::$app->user->isGuest) { ?>
    <p>
        <?= Html::a('Create Studends', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'name',
            'age',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
	<?php }
		?>
</div>
