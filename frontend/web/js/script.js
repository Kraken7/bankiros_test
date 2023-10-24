$(document).ready(function () {
    $('.xxx-input-converter__input').focus(function () {
        $(this).siblings('.xxx-input-converter__close').show();
    });

    $('.xxx-input-converter__input').blur(function () {
        $(this).siblings('.xxx-input-converter__close').hide();
    });

    $('.xxx-input-converter__close').click(function () {
        $('.xxx-input-converter__input').val(0);
    });

    $('.xxx-input-converter__input').on('input', function () {
        let code = $(this).data('cur-name');
        let value = $(this).val()
        convert(code, value);
    });

    convert('RUB', 100);

    function convert(code, value) {
        $.ajax({
            type: 'GET',
            url: 'http://127.0.0.1:21080/v1/converter/' + code + '/' + value,
            success: function (result) {
                for (resultCode in result) {
                    if (code !== resultCode) {
                        let resultValue = String(result[resultCode]).replace(',', '.');
                        $('.xxx-input-converter__input[data-cur-name="' + resultCode + '"]').val(resultValue);
                    }
                }
            }
        });
    }
});