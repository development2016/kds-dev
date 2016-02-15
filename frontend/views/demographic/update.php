<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\Demographic */

$this->title = 'Update Demographic: ' . ' ' . $model->demographic_id;
$this->params['breadcrumbs'][] = ['label' => 'Demographics', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->demographic_id, 'url' => ['view', 'id' => $model->demographic_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="demographic-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
