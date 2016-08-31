<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model c006\feedback\models\Feedback */

$this->title = Yii::t('app', 'Update {modelClass}: ', [
    'modelClass' => 'Feedback',
]) . ' ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Feedbacks'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="feedback-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
