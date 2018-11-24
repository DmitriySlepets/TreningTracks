//Прокрутка до треков
function scroller_down(){
    var destination = $("#main").offset().top;
    $('html').animate({ scrollTop: destination }, 500);
    return false;
}
//Установка текста в шапке
function set_head_text(first, second){
    var classname = document.getElementById("head_" + String(first)).className;
    if(classname == "active"){return;}
    document.getElementById("head_" + String(first)).className = "active";
    document.getElementById("head_" + String(second)).className = "";
    $("#head_text").fadeOut(200);
    if(first == 1){//Частный клиент
        document.getElementById("head_text").innerHTML = "Станьте профессионалом в управлении проектами.</br>Тренинг-треки для любого уровня:</br>от новичка до руководителя</br>проектного офиса";
    }else{//Корпоративный клиент
        document.getElementById("head_text").innerHTML = "Используйте Тренинг-треки</br>для повышения компетенций</br>сотрудников в сфере управления</br>проектами";
    }
    $("#head_text").fadeIn(200);
}
//Показ блока треков при смене в меню
function trecks(number){
    //Меняем блок треков
    document.getElementsByClassName("main_1")[0].style.display = "none"; document.getElementsByClassName("main_2")[0].style.display = "none";
    document.getElementsByClassName("main_3")[0].style.display = "none"; document.getElementsByClassName("main_4")[0].style.display = "none";
    document.getElementsByClassName("main_" + String(number))[0].style.display = "block";
    //Меняем класс ссылки
    document.getElementById("menu_li_1").className = ""; document.getElementById("menu_li_2").className = "";
    document.getElementById("menu_li_3").className = ""; document.getElementById("menu_li_4").className = "";
    document.getElementById("menu_li_" + String(number)).className = "active";
    if(number == 1){$('#1_2').fadeOut();$('#1_3').fadeOut();$('#1_4').fadeOut();$('#1_5').fadeOut();$('#1_1').fadeIn();}
    if(number == 2){$('#2_2').fadeOut();$('#2_1').fadeIn();}
    if(number == 3){$('#3_1').fadeOut();$('#3_2').fadeOut();$('#3_3').fadeIn();}
    if(number == 4){$('#4_2').fadeOut();$('#4_1').fadeIn();}
}
//Смена трека
function fade(var_out, var_in){$('#' + var_out).fadeOut(200);$('#' + var_in).fadeIn(200);}
//Смена рекомендации
function fade_chisel(var_out, var_in){$('.' + var_out).fadeOut(200);$('.' + var_in).fadeIn(200);}

$( document ).ready(function() {
    trecks(1);
    $('.ch_2').hide();$('.ch_3').hide();$('.ch_4').hide();$('.ch_5').hide();$('.ch_6').hide();$('.ch_7').hide();
	$('.ch_8').hide();$('.ch_9').hide();$('.ch_10').hide();$('.ch_11').hide();$('.ch_12').hide();$('.ch_13').hide();
    var elm = document.getElementById('all'); // all -- элемент, в который был обернут весь сайт
    var coeff = $(window).width()/$('#all').width(); // считаем коэффициент масштабирования так, чтобы элемент all занял весь экран
    var heightAll = 6200; //относительно фиксы коэф 1600
    if (coeff>1) coeff=1; // нам нужно только уменьшение сайта, но не его увеличение, поэтому ограничиваем коэффициент сверху единицей
    console.log(coeff);
    if (coeff!=1.0) {
        $("body").css("min-width", "100%");
        $('#all').css("-moz-transform", "scale("+coeff+")"); /* Для Firefox */
        $('#all').css("-ms-transform", "scale("+coeff+")"); /* Для IE */
        $('#all').css("-webkit-transform", "scale("+coeff+")"); /* Для Safari, Chrome, iOS */
        $('#all').css("-o-transform", "scale("+coeff+")"); /* Для Opera */
        $('#all').css("transform", "scale("+coeff+")");

        $('body').attr("style","height:" +  heightAll*coeff+"px;");
    }
	//Проверим параметр
	var get_trecks = document.getElementById("get_trecks");
	if (get_trecks != undefined){
		var tek_trecks = Number(document.getElementById("get_trecks").innerHTML);
		trecks(tek_trecks);
		document.getElementById("main_scroll").click();
	}
});

function openDescription(obj){
    $("#trainers .container .description").removeAttr("style");
    obj.parent().children(".description").attr("style","display: block;position: absolute;left: 0;padding: 10px 200px;text-align: justify;");
    $("#trainers .buttons").attr("style","margin-top:220px;");
}
