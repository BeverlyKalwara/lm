<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use frontend\models\Book;
use frontend\models\Student;

/* @var $this yii\web\View */
/* @var $model frontend\models\BorrowedBook */
/* @var $form yii\widgets\ActiveForm */
$student = ArrayHelper::map(Student::find()->all(), 'studentsId', 'fullName');
$book = ArrayHelper::map(Book::find()->where(['status'=>0])->all(), 'bookId', 'bookName');
?>

<div class="borrowed-book-form">

 <?php $form = ActiveForm::begin(['id' => 'borrowedbook-create']); ?>

    <?php $form = ActiveForm::begin(); ?>
    
     <?= $form->field($model, 'borrowDate')->hiddenInput(['value'=>date('yy/m/d')])->label(false) ?>
    
    <?= $form->field($model, 'studentId')->dropDownList($student) ?>

    <?= $form->field($model, 'bookId')->dropDownList($book) ?>


    <?= $form->field($model, 'expectedReturn')->textInput() ?>
   
    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
