<?php

namespace common\models;

use yii\behaviors\TimestampBehavior;
use yii\db\ActiveRecord;
use yii\db\BaseActiveRecord;
use yii\db\Expression;

/**
 * @property string $code
 * @property float $value
 * @property int $date_update
 */
class Currency extends ActiveRecord
{
    public function behaviors(): array
    {
        return [
            [
                'class' => TimestampBehavior::class,
                'attributes' => [
                    BaseActiveRecord::EVENT_BEFORE_INSERT => ['date_update'],
                    BaseActiveRecord::EVENT_BEFORE_UPDATE => ['date_update'],

                ],
                'value' => new Expression('NOW()'),
            ],
        ];
    }
}