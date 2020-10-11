<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\date\DatePicker;
use yii\helpers\ArrayHelper;
use frontend\models\Student;
use frontend\models\Book;


/* @var $this yii\web\View */
/* @var $model frontend\models\Borrowedbook */
/* @var $form ActiveForm */
$student = ArrayHelper::map(Student::find()->all(), 'studentsId', 'fullName');
$book = ArrayHelper::map(Book::find()->where(['status'=>0])->all(), 'bookId', 'bookName');
?>
<div class="borrowbook">

    <?php $form = ActiveForm::begin(); ?>
    
    <?= $form->field($model, 'borrowDate')->hiddenInput(['value'=>date('yy/m/d')])->label(false) ?>

        <?= $form->field($model, 'studentId')->dropDownList($student) ?>
        <?= $form->field($model, 'bookId')->dropDownList($book) ?>
        
        
        <?= $form->field($model, 'expectedReturn')->widget(DatePicker::classname(), [
            'options' => ['placeholder' => 'Enter expected return ...'],
            'pluginOptions' => [
            'autoclose'=>true
    ]
        ]); ?>
        

        <?= $form->field($model, 'actualReturnDate')->widget(DatePicker::classname(), [
            'options' => ['placeholder' => 'Enter actual return date ...'],
            'pluginOptions' => [
            'autoclose'=>true
    ]
        ]); ?>
   
        <div class="form-group">
            <?= Html::submitButton('Submit', ['class' => 'btn btn-primary']) ?>
        </div>
    <?php ActiveForm::end(); ?>

</div><!-- borrowbook -->
