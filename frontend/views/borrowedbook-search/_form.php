<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\Borrowedbook */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="borrowedbook-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'studentId')->textInput() ?>

    <?= $form->field($model, 'bookId')->textInput() ?>

    <?= $form->field($model, 'borrowDate')->textInput() ?>

    <?= $form->field($model, 'expectedReturn')->textInput() ?>

    <?= $form->field($model, 'actualReturnDate')->textInput() ?>

    <?= $form->field($model, 'status')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
