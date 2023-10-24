<?php

namespace console\controllers;


use common\models\Currency;
use SimpleXMLElement;
use yii\console\Controller;

class CurrencyController extends Controller
{
    const VALUTE_IDS = ['R01235', 'R01239', 'R01375', 'R01090B'];

    /**
     * @return void
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function actionIndex()
    {
        $client = new \GuzzleHttp\Client(['base_uri' => 'https://www.cbr.ru/scripts/']);
        $response = $client->get('XML_daily.asp', [
            'query' => [
                'date_req' => date('d/m/Y')
            ]
        ]);

        if ($response->getStatusCode() == 200) {
            $content = $response->getBody()->getContents();
            $valCurs = (new SimpleXMLElement($content));

            foreach (self::VALUTE_IDS as $valuteId) {
                try {
                    $item = $valCurs->xpath('Valute[@ID="' . $valuteId . '"]')[0];

                    $code = (string)$item->CharCode;
                    $value = $this->convertToFloat((string)$item->Value);

                    $currency = Currency::find()->where(['code' => $code])->one();
                    if (!$currency) {
                        $currency = new Currency();
                        $currency->code = strtoupper($code);
                    }

                    $currency->value = $value;
                    $currency->save();
                } catch (\Exception $e) {
                    \Yii::warning("Ошибка сохранения valute $valuteId");
                }
            }
        }
    }

    /**
     * @param string $value
     * @return float
     */
    private function convertToFloat(string $value): float
    {
        return (float)str_replace(',', '.', $value);
    }
}