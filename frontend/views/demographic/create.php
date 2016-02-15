<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model frontend\models\Demographic */

$this->title = 'Create Demographic';
$this->params['breadcrumbs'][] = ['label' => 'Demographics', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="demographic-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
