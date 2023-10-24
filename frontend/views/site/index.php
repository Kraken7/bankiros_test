<?php

/** @var yii\web\View $this */

$this->title = 'Конвертер валют ЦБ РФ';
?>

<div class="xxx-currency-grid__block xxx-currency-grid__block--separately ">
    <div class="xxx-line-h-1 xxx-mb-15">Конвертер валют ЦБ РФ</div>
    <div class="xxx-tab__content">
        <div class="xxx-tab__body active" id="today">
            <div class="blk-grid-content blk-grid-content--gap-10 ">
                <div class="xxx-input-converter ">
                    <input value="100" data-input-converter="" data-cur-name="RUB" data-cur-multiplier="1" type="number" inputmode="decimal" class="xxx-input-converter__input xxx-full-width">
                    <span class="xxx-input-converter__before-text"> RUB </span>
                    <span class="xxx-input-converter__close" data-input-converter-clear="">&times</span>
                    <img class="xxx-input-converter__img" src="images/russia.svg" alt="RUB-icon">
                </div>
                <div class="xxx-input-converter ">
                    <input data-input-converter="" data-cur-name="USD" data-cur-multiplier="0.010558758965706" type="number" inputmode="decimal" class="xxx-input-converter__input xxx-full-width">
                    <span class="xxx-input-converter__before-text"> USD </span>
                    <span class="xxx-input-converter__close" data-input-converter-clear="">&times</span>
                    <img class="xxx-input-converter__img" src="images/united-states-of-america.svg" alt="USD-icon">
                </div>
                <div class="xxx-input-converter ">
                    <input data-input-converter="" data-cur-name="EUR" data-cur-multiplier="0.0099697915316591" type="number" inputmode="decimal" class="xxx-input-converter__input xxx-full-width">
                    <span class="xxx-input-converter__before-text"> EUR </span>
                    <span class="xxx-input-converter__close" data-input-converter-clear="">&times</span>
                    <img class="xxx-input-converter__img" src="images/european-union.svg" alt="EUR-icon">
                </div>
                <div class="xxx-input-converter ">
                    <input data-input-converter="" data-cur-name="CNY" data-cur-multiplier="0.077388000216686" type="number" inputmode="decimal" class="xxx-input-converter__input xxx-full-width">
                    <span class="xxx-input-converter__before-text"> CNY </span>
                    <span class="xxx-input-converter__close" data-input-converter-clear="">&times</span>
                    <img class="xxx-input-converter__img" src="images/china.svg" alt="CNY-icon">
                </div>
                <div class="xxx-input-converter ">
                    <input data-input-converter="" data-cur-name="BYN" data-cur-multiplier="0.034115371362875" type="number" inputmode="decimal" class="xxx-input-converter__input xxx-full-width">
                    <span class="xxx-input-converter__before-text"> BYN </span>
                    <span class="xxx-input-converter__close" data-input-converter-clear="">&times</span>
                    <img class="xxx-input-converter__img" src="images/belarus.svg" alt="BYN-icon">
                </div>
            </div>
        </div>
    </div>
</div>