<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use frontend\models\Student;

/* @var $this yii\web\View */
/* @var $model frontend\models\StudentSearch */
/* @var $form yii\widgets\ActiveForm */
$students = ArrayHelper::map(Student::find()->all(), 'studentsId', 'fullName');

?>

<div class="student-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'studentsId')->dropDownList($students) ?>

    <?= $form->field($model, 'userId')->dropDownList($students) ?>

    <?= $form->field($model, 'fullName')->dropDownList($students) ?>

    <?= $form->field($model, 'idNumber')->dropDownList($students) ?>

    <?= $form->field($model, 'regNo')->dropDownList($students) ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
