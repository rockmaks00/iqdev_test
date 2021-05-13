//задает параметры слайдера
function slider(input_name) {
    return {
        range: "min",
        value: 1000,
        min: 1000,
        max: 3000000,
        slide: function( event, ui ) {
            $( input_name ).val( ui.value );
        }
    };
}

// преобразует из вида {{"name": name, "value": value},} в {name: value,}
function convert_data(form_data) {
    let new_data = {};
    $.each(form_data, function() {
        new_data[this.name] = this.value;
    });
    return new_data;
}

function ajax(form_data) {
    let data = convert_data(form_data);
    $.post( "/calc.php", data)
        .done(function( data ) {
            //проверка на внутренние ошибки скрипта
            if(isNaN(data))
                alert(data);
            else
                $("#calc_sum").text(data);
    });
}

$(function () {
    //передаем данные из формы и блокируем обновление страницы
    $( "form" ).submit(function( event ) {
        event.preventDefault();
        ajax($( this ).serializeArray())
    });

    $( "#slider_amount" ).slider(slider("#calc_amount"));
    $( "#slider_r-amount" ).slider(slider("#calc_r-amount"));
    $( "#calc_date" ).datepicker({ dateFormat: 'dd.mm.yy' });
});
