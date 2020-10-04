<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use frontend\views\student;


/* @var $this yii\web\View */
/* @var $model frontend\models\Student */
/* @var $form yii\widgets\ActiveForm */
?>
<div class="row">
  <div class="student-form">

    <?php $form = ActiveForm::begin(); ?>
    
   <div class="col-xs-12">
    <?= $form->field($model, 'fullName')->textInput(['maxlength' => true,'placeholder'=>'Input Full Name'])->label(false) ?>
    </div>
    
    <div class="col-xs-12">  
    <?= $form->field($model, 'idNumber')->textInput(['maxlength' => true,'placeholder'=>'Input Id Number'])->label(false) ?>
    </div>
    
    <div class="col-xs-12">
    <?= $form->field($model, 'regNo')->textInput(['maxlength' => true,'placeholder'=>'Input Registration Number'])->label(false) ?>
    </div>
    
    <div class="col-xs-12">
       <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success pull-right col-xs-2']) ?>
       </div>
    </div>
    <?php ActiveForm::end(); ?>

 </div>
</div>
