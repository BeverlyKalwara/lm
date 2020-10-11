<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use frontend\models\Student;
use frontend\models\Book;
use kartik\date\DatePicker;

/* @var $this yii\web\View */
/* @var $model frontend\models\BorrowedbookSearch */
/* @var $form yii\widgets\ActiveForm */
$students = ArrayHelper::map(Student::find()->all(), 'studentsId', 'fullName');
$books = ArrayHelper::map(Book::find()->where(['status'=>0])->all(), 'bookId', 'bookName');
?>

<div class="borrowed-book-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'bbId')->dropDownList($books) ?>

    <?= $form->field($model, 'studentId')->dropDownList($students) ?>

    <?= $form->field($model, 'bookId'->dropDownList($books)) ?>

    <?= $form->field($model, 'borrowDate')->hiddenInput(['value'=>date('yy/m/d')])->label(false) ?> ?>

    <?= $form->field($model, 'expectedReturn')->widget(DatePicker::classname(), [
            'options' => ['placeholder' => 'Enter expected return ...'],
            'pluginOptions' => [
            'autoclose'=>true
    ]
        ]); ?>

    <?php // echo $form->field($model, 'actualReturnDate') ?>

   

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
