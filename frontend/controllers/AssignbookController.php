<?php

namespace frontend\controllers;
use Yii;
class AssignbookController extends \yii\web\Controller
{
    public function actionIndex()
    {
        return $this->render('index');
    }
    public function actionAssignbook()
    {
        $model = new \frontend\models\borrowedbook();
        
        if ($model->load(Yii::$app->request->post())) {
            if ($model->validate()) {
                // form inputs are valid, do something here
                return;
            }
        }
        
        return $this->renderAjax('assignbook', [
            'model' => $model,
        ]);
    }
}

