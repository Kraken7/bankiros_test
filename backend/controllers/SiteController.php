<?php

namespace backend\controllers;


use yii\web\Controller;

/**
 * Site controller
 */
class SiteController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
        ];
    }

    /**
     * @param \yii\base\Action $action
     *
     * @return bool
     * @throws \yii\web\BadRequestHttpException
     */
    public function beforeAction($action)
    {
        \Yii::$app->response->format = \Yii::$app->response::FORMAT_HTML;
        $this->layout = false;
        return parent::beforeAction($action);
    }

    /**
     * Displays homepage.
     *
     * This is action is used for debugging and run working scripts.
     *
     * @return string
     */
    public function actionIndex()
    {
        return "";
    }
}
