<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\marklistSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Marklists';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="marklist-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    
	<?php if (Yii::$app->user->isGuest) { ?>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'English',
            'Maths',
            'Science',
			'total',
            'average',
        ],
    ]); ?>
	<?php } else {
		?>
		<p>
        <?= Html::a('Create Marklist', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
		  <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'English',
            'Maths',
            'Science',
            'total',
            'average',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
		<?php		
	} 
	?>
</div>
