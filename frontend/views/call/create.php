<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Call */

$this->title = Yii::t('app', 'Create Call');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Calls'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="call-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
