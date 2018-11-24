$( document ).ready(function() {
    $(".form_phone").mask("+7(999)999-9999");

    var elm = document.getElementById('all'); // all -- элемент, в который был обернут весь сайт
    var coeff = $(window).width()/$('#all').width(); // считаем коэффициент масштабирования так, чтобы элемент all занял весь экран
    var heightAll = 4000; //относительно фиксы коэф 1600
    if (coeff>1) coeff=1; // нам нужно только уменьшение сайта, но не его увеличение, поэтому ограничиваем коэффициент сверху единицей
    if (coeff!=1.0) {
        $("body").css("min-width", "100%");
        $('#all').css("-moz-transform", "scale("+coeff+")"); /* Для Firefox */
        $('#all').css("-ms-transform", "scale("+coeff+")"); /* Для IE */
        $('#all').css("-webkit-transform", "scale("+coeff+")"); /* Для Safari, Chrome, iOS */
        $('#all').css("-o-transform", "scale("+coeff+")"); /* Для Opera */
        $('#all').css("transform", "scale("+coeff+")");

        $('body').attr("style","height:" +  heightAll*coeff+"px;");
    }
});
//Прокрутка до формы отправки
function scroller_down(){
    var destination = $("#footer .form-block").offset().top;
    $('html').animate({ scrollTop: destination }, 500);
    return false;
}
//отправка письма
function add_to_cart_pme(){
    $.ajax({
        type: "POST",
        url: 'http://www.pmexpert.ru/trening-tracks/send_result.php',
        data: "form_course=" + $(".form_course")[0].value +
        "&form_name=" + $(".form_name")[0].value +
        "&form_mail=" + $(".form_mail")[0].value+
        "&form_phone=" + $(".form_phone")[0].value +
        "&form_company=" + $(".form_company")[0].value +
        "&form_position=" + $(".form_position")[0].value,
        cache: false,
        success: function(response){
            alert(response);
        }
    });
}