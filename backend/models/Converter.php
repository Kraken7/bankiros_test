<?php

namespace backend\models;

use common\models\Currency;
use yii\helpers\ArrayHelper;
use yii\web\BadRequestHttpException;

class Converter
{
    /**
     * @param string $code
     * @param float $amount
     * @return array
     * @throws BadRequestHttpException
     */
    public static function getAllCurrencies(string $code, float $amount): array
    {
        $code = strtoupper($code);

        $currencies = Currency::find()->select(['value'])->indexBy('code')->asArray()->column();
        $currencies = ArrayHelper::merge($currencies, ['RUB' => 1]);

        if (!isset($currencies[$code])) {
            throw new BadRequestHttpException('Неверное значение code');
        }

        $data = [];
        foreach ($currencies as $currencyCode => $currencyValue) {
            $data[$currencyCode] = round($amount * $currencies[$code] / $currencyValue, 4);
        }

        return $data;
    }
}