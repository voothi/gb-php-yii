<?php


namespace app\controllers;

use app\base\BaseController;
use app\controllers\actions\ActivityCreateAction;
use app\models\Activity;
use yii\web\Controller;

class ActivityController extends BaseController
{
    public function actions()
    {
        return [
            'create' => ['class' => ActivityCreateAction::class],
            'test' => ActivityCreateAction::class
        ];
    }
}