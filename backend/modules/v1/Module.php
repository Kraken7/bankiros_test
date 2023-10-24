<?php

namespace backend\modules\v1;


class Module extends \yii\base\Module
{
    /**
     * Пространство имен контроллеров
     */
    public $controllerNamespace = 'backend\modules\v1\controllers';

    /**
     * @return array конфигурация поведения
     */
    public function behaviors()
    {
        $behaviors = parent::behaviors();

        $behaviors['corsFilter'] = [
            'class' => \yii\filters\Cors::class,
            'cors' => require_once __DIR__ . '/cors_config.php',
        ];

        return $behaviors;
    }
}