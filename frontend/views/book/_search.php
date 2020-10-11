<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use frontend\models\Book;

/* @var $this yii\web\View */
/* @var $model frontend\models\BookSearch */
/* @var $form yii\widgets\ActiveForm */
$books = ArrayHelper::map(Book::find()->where(['status'=>0])->all(), 'bookId', 'bookName');
?>

<div class="book-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'bookId')->dropDownList($books) ?>

    <?= $form->field($model, 'bookName')->dropDownList($books) ?>

    <?= $form->field($model, 'referenceNo') ?>

    <?= $form->field($model, 'publisher') ?>

    <?= $form->field($model, 'status') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
