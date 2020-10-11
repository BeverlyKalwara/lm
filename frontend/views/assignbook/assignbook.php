<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\date\DatePicker;

/* @var $this yii\web\View */
/* @var $model frontend\models\borrowedbook */
/* @var $form ActiveForm */
?>
<div class="assignbook">

    <?php $form = ActiveForm::begin(); ?>

        <?= $form->field($model, 'studentId') ?>
        <?= $form->field($model, 'bookId') ?>
        
        <?= $form->field($model, 'borrowDate')->widget(DatePicker::classname(), [
            'options' => ['placeholder' => 'Enter borrow date ...'],
            'pluginOptions' => [
            'autoclose'=>true
    ]
        ]); ?>
        
        <?= $form->field($model, 'returnDate')->widget(DatePicker::classname(), [
            'options' => ['placeholder' => 'Enter return date ...'],
            'pluginOptions' => [
            'autoclose'=>true
    ]
        ]); ?>
    
        <div class="form-group">
            <?= Html::submitButton('Submit', ['class' => 'btn btn-primary']) ?>
        </div>
    <?php ActiveForm::end(); ?>

</div><!-- assignbook -->
