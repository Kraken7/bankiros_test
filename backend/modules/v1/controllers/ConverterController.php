<?php

namespace backend\modules\v1\controllers;

use backend\models\Converter;
use yii\helpers\Json;

/**
 * Контроллер для конвертации
 */
class ConverterController extends AppController
{
    /**
     * Получить значения валют
     *
     * @param string $code
     * @param float $amount
     * @return array
     * @throws \yii\web\BadRequestHttpException
     */
    public function actionIndex(string $code, float $amount): array
    {
        return Converter::getAllCurrencies($code, $amount);
    }
}