<?php header("Content-Type: text/html;charset=windows-1251"); ?>
<!DOCTYPE html>
<html>
    <head>
        <title>PM Expert - Обучение управлению проектами на основе реального опыта</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="format-detection" content="telephone=no">
        <meta http-equiv="Cache-Control" content="no-cache">
        <?php //require($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/prolog_before.php"); ?>
        <link rel="stylesheet" href="css/style.css" />
		
		<!-- Подключаем плагин карусели -->
		<!-- Базовые стили -->
		<link rel="stylesheet" href="OwlCarousel/OwlCarousel2-develop/dist/assets/owl.carousel.min.css">
		<!-- Тема по умолчанию -->
		<link rel="stylesheet" href="OwlCarousel/OwlCarousel2-develop/dist/assets/owl.theme.default.min.css">
		<!-- JQuery --> 
		<script src="js/jquery.min.js"></script>
		<!-- Сам плагин JS -->
		<script src="OwlCarousel/OwlCarousel2-develop/dist/owl.carousel.min.js"></script>
		
		<script type = "text/javascript">
			function set_head_text(first, second){
				var classname = document.getElementById("head_" + String(first)).className;
				if(classname == "active"){return;}
				document.getElementById("head_" + String(first)).className = "active";
				document.getElementById("head_" + String(second)).className = "";
				if(first == 1){//Частный клиент
					document.getElementById("head_text").innerHTML = "Тренинг-трек позволит тебе</br>быстро освоить профессию</br>в сфере управления проектами";
				}else{//Корпоративный клиент
					document.getElementById("head_text").innerHTML = "Используйте Тренинг-треки</br>для быстрого обучения</br>сотрудников в сфере управления</br>проектами";
				}	
			}
			function trecks(number){
				//Меняем блок треков
				document.getElementsByClassName("main_1")[0].style.display = "none"; document.getElementsByClassName("main_2")[0].style.display = "none";
				document.getElementsByClassName("main_3")[0].style.display = "none"; document.getElementsByClassName("main_4")[0].style.display = "none";
				document.getElementsByClassName("main_" + String(number))[0].style.display = "block";
				//Меняем класс ссылки
				document.getElementById("menu_li_1").className = ""; document.getElementById("menu_li_2").className = "";
				document.getElementById("menu_li_3").className = ""; document.getElementById("menu_li_4").className = "";
				document.getElementById("menu_li_" + String(number)).className = "active";
				if(number == 1){$('#1_2').fadeOut();$('#1_3').fadeOut();$('#1_4').fadeOut();$('#1_5').fadeOut();}
				if(number == 2){$('#2_2').fadeOut();}
				if(number == 3){$('#3_2').fadeOut();}
				if(number == 4){$('#4_2').fadeOut();}
			}
			function fade(var_out, var_in){$('#' + var_out).fadeOut(200);$('#' + var_in).fadeIn(200);}
			function fade_chisel(var_out, var_in){$('.' + var_out).fadeOut(200);$('.' + var_in).fadeIn(200);}
			
			$( document ).ready(function() {trecks(1);$('.ch_2').hide();});
		</script>
		
    </head>
    <body>
        <header>
            <div class="header-top">
                <div class="logo">
                    <a href="/" class="main-logotype"></a>
                </div>
                <div class="tagline">
                    Обучение управлению проектами</br>
                    на основе реального опыта
                </div>
                <div class="menu">
                    <ul>
                        <li id = "head_1" class="active"><a onclick="set_head_text(1,2);" style = "cursor: pointer;">частным лицам</a></li>
                        <li id = "head_2"><a onclick="set_head_text(2,1);" style = "cursor: pointer;">корпоративным клиентам</a></li>
                        <li><img src="/img/type-curses/icon-menu.png" /></li>
                    </ul>
                </div>
            </div>
            <div class = "header-middle">
                <div class="caption" id = "head_text">Тренинг-трек позволит тебе</br>быстро освоить профессию</br>
                    в сфере управления проектами</div>
            </div>
            <div class="header-bottom">
                <div class="title-icons">Выберите свой трек</div>
                <div class="icons"><a href = "#main"><img src="/img/type-curses/icon1.png" /></a></div>
            </div>

        </header>
        <div id="advantages">
            <h1>Преимущества треков</h1>
            <div class="container">
                <div>
                    <img src="/img/type-curses/advantages1.png" alt="Сертифицированные тренеры-эксперты" />
                    <div class="signature">Сертифицированные</br>тренеры-эксперты</div>
                </div>
                <div>
                    <img src="/img/type-curses/advantages2.png" alt="Специально подобранная последовательность тренингов" />
                    <div class="signature">Специально</br>подобранная</br>последовательность</br>тренингов</div>
                </div>
                <div>
                    <img src="/img/type-curses/advantages3.png" alt="В основе каждого курса — опыт реальных проектов" />
                    <div class="signature">В основе каждого</br>курса — опыт</br>реальных проектов</div>
                </div>
                <div>
                    <img src="/img/type-curses/advantages4.png" alt="Сертификация по итогам трека" />
                    <div class="signature">Сертификация</br>по итогам трека</div>
                </div>
                <div>
                    <img src="/img/type-curses/advantages5.png" alt="Экономия до 20% от стоимости курсов" />
                    <div class="signature">Экономия до 20%</br>от стоимости курсов</div>
                </div>
            </div>
        </div>
		
		<div id="main" class = "main_menu">
			<div class="menu">
				<ul>
					<li class="active" id = "menu_li_1"><a onclick = "trecks(1);" style = "cursor: pointer;">Участникам</br>проектных команд</a></li>
					<li id = "menu_li_2"><a onclick = "trecks(2);" style = "cursor: pointer;">Опытным</br>руководителям</a></li>
					<li id = "menu_li_3"><a onclick = "trecks(3);" style = "cursor: pointer;">Отраслевые</br>треки</a></li>
					<li id = "menu_li_4"><a onclick = "trecks(4);" style = "cursor: pointer;">Project management</br>для всех</a></li>
				</ul>
			</div>
		</div>	
		
		<!-- ПЕРВЫЙ БЛОК ТРЕКОВ -->
		<div id="main" class = "main_1">
		<!-- КУРС 1 - 1 -->
			<div class="content" id = "1_1">
                <div class="content-top">
                    <div class="content-top-left">
                        <img src="/img/type-curses/main1.png" alt="Администратор проекта PMEA®" />
                    </div>
                    <div class="content-top-right">
                        <h2>Администратор</br>проекта <span>PMEA®</span></h2>
                        <span>Начтите карьеру в управлении проектами — научитесь</br>администрированию проектов</span>
                        <a class="description-track" href="#"><img src="/img/type-curses/button1.png" alt="Полное описание трека" /></a>
                    </div>
                </div>
                <div class="arrows">
                    <div class="left-arrow"><a onclick = "fade('1_1','1_5');"><img src="/img/type-curses/left.png" /></a></div>
                    <div class="right-arrow"><a onclick = "fade('1_1','1_2');"><img src="/img/type-curses/right.png" /></a></div>
                </div>
                <div class="content-middle">
                    <div class="blocks">
                        <div class="block">
                            <div class="block-header"><span>01</span></div>
                            <div class="block-middle">Введение</br>в управление</br>проектами</div>
                        </div>
                        <div class="block">
                            <div class="block-header"><span>02</span></div>
                            <div class="block-middle">Применение</br>MS Project Professional</br>в управлении проектами</div>
                            <div class="block-footer">Базовый модуль</div>
                        </div>
                        <div class="block">
                            <div class="block-header"><span>03</span></div>
                            <div class="block-middle">Подготовка</br>к РМЕ</div>
                        </div>
                        <div class="block green">
                            <div class="block-header"><img src="/img/type-curses/sert.png" alt="Сертификационный экзамен"/></div>
                            <div class="block-middle">Сертификационный</br>экзамен</br>на степень</br>PMEA®</div>
                        </div>
                    </div>
                </div>
                <div class="content-bottom">
                    <div class="time-price">
                        <div>
                            <img src="/img/type-curses/icon2.png" />15 часов
                        </div>
                        <div>
                            <img src="/img/type-curses/icon2.png" />14 500 руб.
                        </div>
                        <div>
                            <img src="/img/type-curses/icon3.png" />трек с сертификацией
                        </div>
                    </div>
                </div>
            </div>
			<!-- КУРС 1 - 2 -->
			<div class="content" id = "1_2">
                <div class="content-top">
                    <div class="content-top-left">
                        <img src="/img/type-curses/main2.png" alt="Планировщик проекта PMSE®" />
                    </div>
                    <div class="content-top-right">
                        <h2>Планировщик</br>проекта <span>PMSE®</span></h2>
                        <span>Освойте весь цикл календарно-сетевого</br>планирования в проектах</span>
                        <a class="description-track" href="#"><img src="/img/type-curses/button1.png" alt="Полное описание трека" /></a>
                    </div>
                </div>
                <div class="arrows">
                    <div class="left-arrow"><a onclick = "fade('1_2','1_1');"><img src="/img/type-curses/left.png" /></a></div>
                    <div class="right-arrow"><a onclick = "fade('1_2','1_3');"><img src="/img/type-curses/right.png" /></a></div>
                </div>
                <div class="content-middle">
                    <div class="blocks">
                        <div class="block">
                            <div class="block-header"><span>01</span></div>
                            <div class="block-middle">Основы</br>планирования</br>и мониторинга</br>проектов</div>
                        </div>
                        <div class="block">
                            <div class="block-header"><span>02</span></div>
                            <div class="block-middle">Применение</br>MS Project Professional</br>в управлении проектами</div>
                            <div class="block-footer">Базовый модуль</div>
                        </div>
                        <div class="block">
                            <div class="block-header"><span>03</span></div>
                            <div class="block-middle">Применение</br>MS Project Professional</br>в управлении проектами</div>
                            <div class="block-footer">Углубленный модуль</div>
                        </div>
                        <div class="block">
                            <div class="block-header"><span>04</span></div>
                            <div class="block-middle">Анализ проекта,</br>создание</br>и настройка</br>отчетов</br>в MS Project</div>
                        </div>
                        <div class="block">
                            <div class="block-header"><span>05</span></div>
                            <div class="block-middle">Ресурсное</br>планирование</br>и контроль</br>в MS Project:</br>деньги, люди,</br>материалы</div>
                        </div>
                        <div class="block green">
                            <div class="block-header"><img src="/img/type-curses/sert.png" alt="Сертификационный экзамен"/></div>
                            <div class="block-middle">Сертификационный</br>экзамен</br>на степень</br>PMSE®</div>
                        </div>
                    </div>
                </div>
                <div class="content-bottom">
                    <div class="time-price">
                        <div>
                            <img src="/img/type-curses/icon2.png" />15 часов
                        </div>
                        <div>
                            <img src="/img/type-curses/icon2.png" />14 500 руб.
                        </div>
                        <div>
                            <img src="/img/type-curses/icon3.png" />трек с сертификацией
                        </div>
                    </div>
                </div>
            </div>
			<!-- КУРС 1 - 3 -->
			<div class="content" id = "1_3">
                <div class="content-top">
                    <div class="content-top-left">
                        <img src="/img/type-curses/main3.png" alt="Руководитель проекта PME®" />
                    </div>
                    <div class="content-top-right">
                        <h2>Руководитель</br>проекта <span>PME®</span></h2>
                        <span>Получите компетенции успешного управления</br>проектами разной сложности</span>
                        <a class="description-track" href="#"><img src="/img/type-curses/button1.png" alt="Полное описание трека" /></a>
                    </div>
                </div>
                <div class="arrows">
                    <div class="left-arrow"><a onclick = "fade('1_3','1_2');"><img src="/img/type-curses/left.png" /></a></div>
                    <div class="right-arrow"><a onclick = "fade('1_3','1_4');"><img src="/img/type-curses/right.png" /></a></div>
                </div>
                <div class="content-middle">
                    <div class="blocks">
                        <div class="block">
                            <div class="block-header"><span>01</span></div>
                            <div class="block-middle">Управление</br>проектами на</br>основе стандарта</br>PMI PMBOK®</br>Guide 6th Edition</br>(2017)</div>
                            <div class="block-footer">Базовый курс</div>
                        </div>
                        <div class="block">
                            <div class="block-header"><span>02</span></div>
                            <div class="block-middle">Применение</br>MS Project Professional</br>в управлении проектами</div>
                            <div class="block-footer">Базовый модуль</div>
                        </div>
                        <div class="block">
                            <div class="block-header"><span>03</span></div>
                            <div class="block-middle">Деловая игра:</br>Египет бросает</br>вызов!</div>
                        </div>
                        <div class="block green">
                            <div class="block-header"><img src="/img/type-curses/sert.png" alt="Сертификационный экзамен"/></div>
                            <div class="block-middle">Сертификационный</br>экзамен</br>на степень</br>PME®</div>
                        </div>
                    </div>
                </div>
                <div class="content-bottom">
                    <div class="time-price">
                        <div>
                            <img src="/img/type-curses/icon2.png" />15 часов
                        </div>
                        <div>
                            <img src="/img/type-curses/icon2.png" />14 500 руб.
                        </div>
                        <div>
                            <img src="/img/type-curses/icon3.png" />трек с сертификацией
                        </div>
                    </div>
                </div>
            </div>
			<!-- КУРС 1 - 4 -->
			<div class="content" id = "1_4">
                <div class="content-top">
                    <div class="content-top-left">
                        <img src="/img/type-curses/main4.png" alt="Руководитель проекта PME® подготовка к PMP®" />
                    </div>
                    <div class="content-top-right">
                        <h2>Руководитель проекта <span class="grey">PME®</span></br>подготовка к <span>PMP®</span></h2>
                        <span>Получите компетенции успешного управления проектами разной</br>сложности, подготовьтесь к сдаче эксамена PMI PMP®</span>
                        <a class="description-track" href="#"><img src="/img/type-curses/button1.png" alt="Полное описание трека" /></a>
                    </div>
                </div>
                <div class="arrows">
                    <div class="left-arrow"><a onclick = "fade('1_4','1_3');"><img src="/img/type-curses/left.png" /></a></div>
                    <div class="right-arrow"><a onclick = "fade('1_4','1_5');"><img src="/img/type-curses/right.png" /></a></div>
                </div>
                <div class="content-middle">
                    <div class="blocks">
                        <div class="block">
                            <div class="block-header"><span>01</span></div>
                            <div class="block-middle">Управление</br>проектами на</br>основе стандарта</br>PMI PMBOK®</br>Guide 6th Edition</br>(2017)</div>
                            <div class="block-footer">Базовый курс</div>
                        </div>
                        <div class="block">
                            <div class="block-header"><span>02</span></div>
                            <div class="block-middle">Подготовка</br>к экзаменам</br>на получение</br>степеней PMP®</br>и PME®</div>
                            <div class="block-footer">Дневной курс</div>
                        </div>
                        <div class="block green">
                            <div class="block-header"><img src="/img/type-curses/sert.png" alt="Сертификационный экзамен"/></div>
                            <div class="block-middle">Сертификационный</br>экзамен</br>на степень</br>PME®</div>
                        </div>
                    </div>
                </div>
                <div class="content-bottom">
                    <div class="time-price">
                        <div>
                            <img src="/img/type-curses/icon2.png" />15 часов
                        </div>
                        <div>
                            <img src="/img/type-curses/icon2.png" />14 500 руб.
                        </div>
                        <div>
                            <img src="/img/type-curses/icon3.png" />трек с сертификацией
                        </div>
                    </div>
                </div>
            </div>
			<!-- КУРС 1 - 5-->
			 <div class="content" id = "1_5">
                <div class="content-top">
                    <div class="content-top-left">
                        <img src="/img/type-curses/main5.png" alt="Участник команды проекта" />
                    </div>
                    <div class="content-top-right">
                        <h2>Участник команды</br>проекта</h2>
                        <span>Повысьте эффективность вашей работы</br>в проектах</span>
                        <a class="description-track" href="#"><img src="/img/type-curses/button1.png" alt="Полное описание трека" /></a>
                    </div>
                </div>
                <div class="arrows">
                    <div class="left-arrow"><a onclick = "fade('1_5','1_4');"><img src="/img/type-curses/left.png" /></a></div>
                    <div class="right-arrow"><a onclick = "fade('1_5','1_1');"><img src="/img/type-curses/right.png" /></a></div>
                </div>
                <div class="content-middle">
                    <div class="blocks">
                        <div class="block">
                            <div class="block-header"><span>01</span></div>
                            <div class="block-middle">Тест-драйв:</br>Формула</br>вашего</br>успешного</br>проекта</div>
                        </div>
                        <div class="block">
                            <div class="block-header"><span>02</span></div>
                            <div class="block-middle">Деловая игра:</br>Египет бросает</br>вызов!</div>
                        </div>
                    </div>
                </div>
                <div class="content-bottom">
                    <div class="time-price">
                        <div>
                            <img src="/img/type-curses/icon2.png" />15 часов
                        </div>
                        <div>
                            <img src="/img/type-curses/icon2.png" />14 500 руб.
                        </div>
                        <div>
                            <img src="/img/type-curses/icon3.png" />трек с сертификацией
                        </div>
                    </div>
                </div>
            </div>
		</div>
        <!-- ВТОРОЙ БЛОК ТРЕКОВ -->
		<div id="main" class = "main_2">
		<!-- КУРС 2 - 1 -->
			<div class="content ver2" id = "2_1">
				<div class="content-top">
					<div class="content-top-left">
						<img src="/img/type-curses/main6.png" alt="Руководитель-эксперт PMEP®" />
					</div>
					<div class="content-top-right">
						<h2>Руководитель-эксперт</br><span>PMEP®</span></h2>
						<span>Развивайте успех своих проектов</span>
						<a class="description-track" href="#"><img src="/img/type-curses/button3.png" alt="Полное описание трека" /></a>
					</div>
				</div>
				<div class="arrows">
					<div class="left-arrow"><a onclick = "fade('2_1', '2_2');"><img src="/img/type-curses/left.png" /></a></div>
					<div class="right-arrow"><a onclick = "fade('2_1', '2_2');"><img src="/img/type-curses/right.png" /></a></div>
				</div>
				<div class="content-middle">
					<div class="blocks">
						<div class="block blue">
							<div class="block-header"><img src="/img/type-curses/sert.png" alt="Сертификационный экзамен"/></div>
							<div class="block-middle">Сертификационный</br>экзамен</br>на степень</br>PME®</div>
						</div>
						<div class="block">
							<div class="block-header"><span>01</span></div>
							<div class="block-middle">Современные</br>и эффективные</br>методы КСП</br>и контроля</br>расписания</br>проекта</div>
						</div>
						<div class="block">
							<div class="block-header"><span>02</span></div>
							<div class="block-middle">Практические</br>методы</br>эффективного</br>управления</br>стоимостью</div>
						</div>
						<div class="block">
							<div class="block-header"><span>03</span></div>
							<div class="block-middle">Управление</br>персоналом</br>проекта</div>
						</div>
						<div class="block">
							<div class="block-header"><span>04</span></div>
							<div class="block-middle">Коммуникации</br>в проекте</div>
						</div>
						<div class="block">
							<div class="block-header"><span>05</span></div>
							<div class="block-middle">Управление</br>заинтересованн</br>ыми сторонами</br>проекта</div>
							<div class="block-footer">Практикум</div>
						</div>
					</div>
					<div class="blocks">
						<div class="block">
							<div class="block-header"><span>06</span></div>
							<div class="block-middle">Практические</br>методы</br>управления</br>рисками</div>
						</div>
						<div class="block">
							<div class="block-header"><span>07</span></div>
							<div class="block-middle">Анализ проекта,</br>создание</br>и настройка</br>отчетов</br>в MS Project</div>
						</div>
						<div class="block">
							<div class="block-header"><span>08</span></div>
							<div class="block-middle">Ресурсное</br>планирование</br>и контроль:</br>деньги, люди,</br>материалы</br>в MS Project</div>
						</div>
						<div class="block">
							<div class="block-header"><span>09</span></div>
							<div class="block-middle">Как избежать</br>провалов</br>в проекте</div>
							<div class="block-footer">Мастер-класс</br>Алферова</div>
							<div class="block-photo"><img src="/img/type-curses/photo1.png" alt="Мастер-класс Алферова" /></div>
						</div>
						<div class="block blue">
							<div class="block-header"><img src="/img/type-curses/sert.png" alt="Сертификационный экзамен"/></div>
							<div class="block-middle">Сертификационный</br>экзамен</br>на степень</br>PMEA®</div>
						</div>
					</div>
				</div>
				<div class="content-bottom">
					<div class="time-price">
						<div>
							<img src="/img/type-curses/icon2.png" />15 часов
						</div>
						<div>
							<img src="/img/type-curses/icon2.png" />14 500 руб.
						</div>
						<div>
							<img src="/img/type-curses/icon3.png" />трек с сертификацией
						</div>
					</div>
				</div>
			</div>
			<!-- КУРС 2 - 2 -->
			<div class="content ver2" id = "2_2">
				<div class="content-top">
					<div class="content-top-left">
						<img src="/img/type-curses/main7.png" alt="Руководитель проектного офиса PRIME®" />
					</div>
					<div class="content-top-right">
						<h2>Руководитель проектного</br>офиса <span>PRIME®</span></h2>
						<span>Руководите проектной деятельностью компании,</br>управляйте программами и портфелями проектов</span>
						<a class="description-track" href="#"><img src="/img/type-curses/button3.png" alt="Полное описание трека" /></a>
					</div>
				</div>
				<div class="arrows">
					<div class="left-arrow"><a onclick = "fade('2_2', '2_1');"><img src="/img/type-curses/left.png" /></a></div>
					<div class="right-arrow"><a onclick = "fade('2_2', '2_1');"><img src="/img/type-curses/right.png" /></a></div>
				</div>
				<div class="content-middle">
					<div class="blocks">
						<div class="block combo">
							<div class="block-header">
								<span>01</span>
								<div>Комбинированный курс</div>
							</div>
							<div class="block-left">
								<div class="block-middle">Управление</br>программами</br>и портфелями</br>проектов</div>
								<div class="block-footer">Мастер-класс</br>Павлов</div>
								<div class="block-photo"><img src="/img/type-curses/photo1.png" alt="Мастер-класс Алферова" /></div>
							</div>
							<div class="block-right">
								<div class="block-middle">Деловая игра:</br>Ценность портфеля</div>
							</div>
						</div>
						<div class="block">
							<div class="block-header"><span>02</span></div>
							<div class="block-middle">Ключевые</br>особенности</br>управления</br>комплексными</br>проектами</div>
						</div>
						<div class="block">
							<div class="block-header"><span>03</span></div>
							<div class="block-middle">Корпоративная</br>система</br>управления</br>проектами:</br>проектирование,</br>построение,</br>развитие</div>
						</div>
						<div class="block">
							<div class="block-header"><span>04</span></div>
							<div class="block-middle">Проектный офис:</br>ступени эволюции,</br>ключевые</br>функции</div>
						</div>
						<div class="block blue">
							<div class="block-header"><img src="/img/type-curses/sert.png" alt="Сертификационный экзамен"/></div>
							<div class="block-middle">Сертификационный</br>экзамен</br>на степень</br>PMEA®</div>
						</div>
					</div>
				</div>
				<div class="content-bottom">
					<div class="time-price">
						<div>
							<img src="/img/type-curses/icon2.png" />15 часов
						</div>
						<div>
							<img src="/img/type-curses/icon2.png" />14 500 руб.
						</div>
						<div>
							<img src="/img/type-curses/icon3.png" />трек с сертификацией
						</div>
					</div>
				</div>
			</div>
        </div>
		<!-- ТРЕТИЙ БЛОК ТРЕКОВ -->
		<div id="main" class = "main_3">
			<!-- КУРС 3 - 1 -->
			<div class="content ver3" id = "3_1">
				<div class="content-top">
					<div class="content-top-left">
						<img src="/img/type-curses/main9.png" alt="Руководитель проекта в капстрое" />
					</div>
					<div class="content-top-right">
						<h2>Руководитель проекта</br>в капстрое</h2>
						<span>Освойте специфику управления</br>проектами в капстрое</span>
						<a class="description-track" href="#"><img src="/img/type-curses/button4.png" alt="Полное описание трека" /></a>
					</div>
				</div>
				<div class="arrows">
					<div class="left-arrow"><a onclick = "fade('3_1', '3_2');"><img src="/img/type-curses/left.png" /></a></div>
					<div class="right-arrow"><a onclick = "fade('3_1', '3_2');"><img src="/img/type-curses/right.png" /></a></div>
				</div>
				<div class="content-middle">
					<div class="blocks">
						<div class="block">
							<div class="block-header"><span>01</span></div>
							<div class="block-middle">Управление</br>строительными</br>проектами</div>
						</div>
						<div class="block">
							<div class="block-header"><span>02</span></div>
							<div class="block-middle">Планирование</br>и мониторинг</br>строительных</br>проектов</br>с использованием</br>MS Project</div>
						</div>
						<div class="block">
							<div class="block-header"><span>03</span></div>
							<div class="block-middle">Деловая игра:</br>Египет бросает</br>вызов!</div>
						</div>
					</div>
				</div>
				<div class="content-bottom">
					<div class="time-price">
						<div>
							<img src="/img/type-curses/icon2.png" />15 часов
						</div>
						<div>
							<img src="/img/type-curses/icon2.png" />14 500 руб.
						</div>
						<div>
							<img src="/img/type-curses/icon3.png" />трек с сертификацией
						</div>
					</div>
				</div>
			</div>
			<!-- КУРС 3 - 2 -->
			<div class="content ver3" id = "3_2">
				<div class="content-top">
					<div class="content-top-left">
						<img src="/img/type-curses/main8.png" alt="Руководитель проекта в IT" />
					</div>
					<div class="content-top-right">
						<h2>Руководитель</br>проекта в IT</h2>
						<span>Освойте специфику управления</br>проектами в ИТ</span>
						<a class="description-track" href="#"><img src="/img/type-curses/button4.png" alt="Полное описание трека" /></a>
					</div>
				</div>
				<div class="arrows">
					<div class="left-arrow"><a onclick = "fade('3_2', '3_1');"><img src="/img/type-curses/left.png" /></a></div>
					<div class="right-arrow"><a onclick = "fade('3_2', '3_1');"><img src="/img/type-curses/right.png" /></a></div>
				</div>
				<div class="content-middle">
					<div class="blocks">
						<div class="block">
							<div class="block-header"><span>01</span></div>
							<div class="block-middle">Управление</br>IT-проектами</div>
						</div>
						<div class="block">
							<div class="block-header"><span>02</span></div>
							<div class="block-middle">Методология</br>Scrum для</br>управления</br>проектами по</br>разработке ПО</div>
						</div>
						<div class="block">
							<div class="block-header"><span>03</span></div>
							<div class="block-middle">Управление</br>персоналом</br>проекта</div>
						</div>
					</div>
				</div>
				<div class="content-bottom">
					<div class="time-price">
						<div>
							<img src="/img/type-curses/icon2.png" />15 часов
						</div>
						<div>
							<img src="/img/type-curses/icon2.png" />14 500 руб.
						</div>
						<div>
							<img src="/img/type-curses/icon3.png" />трек с сертификацией
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- ЧЕТВЕРТЫЙ БЛОК ТРЕКОВ -->
		<div id="main" class = "main_4">
			<!-- КУРС 4 - 1 -->
			<div class="content ver4" id = "4_1">
				<div class="content-top">
					<div class="content-top-left">
						<img src="/img/type-curses/main10.png" alt="PM для функциональных руководителей" />
					</div>
					<div class="content-top-right">
						<h2>PM для функциональных</br>руководителей</h2>
						<span>Эффективные инструменты РМ для достижения</br>наилучших результатов ваших проектов</span>
						<a class="description-track" href="#"><img src="/img/type-curses/button5.png" alt="Полное описание трека" /></a>
					</div>
				</div>
				<div class="arrows">
					<div class="left-arrow"><a onclick = "fade('4_1', '4_2');"><img src="/img/type-curses/left.png" /></a></div>
					<div class="right-arrow"><a onclick = "fade('4_1', '4_2');"><img src="/img/type-curses/right.png" /></a></div>
				</div>
				<div class="content-middle">
					<div class="blocks">
						<div class="block">
							<div class="block-header"><span>01</span></div>
							<div class="block-middle">Управление</br>проектами:</br>Agile vs</br>Классика</div>
						</div>
						<div class="block">
							<div class="block-header"><span>02</span></div>
							<div class="block-middle">Выборы на</br>блокчейн.</br>Управление</br>инновационным</br>проектом</div>
							<div class="block-footer">Деловая игра</div>
						</div>
					</div>
				</div>
				<div class="content-bottom">
					<div class="time-price">
						<div>
							<img src="/img/type-curses/icon2.png" />15 часов
						</div>
						<div>
							<img src="/img/type-curses/icon2.png" />14 500 руб.
						</div>
						<div>
							<img src="/img/type-curses/icon3.png" />трек с сертификацией
						</div>
					</div>
				</div>
			</div>
			<!-- КУРС 4 - 2 -->
			<div class="content ver4" id = "4_2">
				<div class="content-top">
					<div class="content-top-left">
						<img src="/img/type-curses/main11.png" alt="PM для менеджеров" />
					</div>
					<div class="content-top-right">
						<h2>PM для менеджеров</h2>
						<span>Эффективные инструменты РМ для достижения</br>наилучших результатов ваших проектов</span>
						<a class="description-track" href="#"><img src="/img/type-curses/button5.png" alt="Полное описание трека" /></a>
					</div>
				</div>
				<div class="arrows">
					<div class="left-arrow"><a onclick = "fade('4_2', '4_1');"><img src="/img/type-curses/left.png" /></a></div>
					<div class="right-arrow"><a onclick = "fade('4_2', '4_1');"><img src="/img/type-curses/right.png" /></a></div>
				</div>
				<div class="content-middle">
					<div class="blocks">
						<div class="block">
							<div class="block-header"><span>01</span></div>
							<div class="block-middle">Управление</br>проектами:</br>Agile vs</br>Классика</div>
						</div>
						<div class="block">
							<div class="block-header"><span>02</span></div>
							<div class="block-middle">Выборы на</br>блокчейн.</br>Управление</br>инновационным</br>проектом</div>
							<div class="block-footer">Деловая игра</div>
						</div>
					</div>
				</div>
				<div class="content-bottom">
					<div class="time-price">
						<div>
							<img src="/img/type-curses/icon2.png" />15 часов
						</div>
						<div>
							<img src="/img/type-curses/icon2.png" />14 500 руб.
						</div>
						<div>
							<img src="/img/type-curses/icon3.png" />трек с сертификацией
						</div>
					</div>
				</div>
			</div>
		</div>
		<div id="reviews">
            <img src="/img/type-curses/icon4.png" alt="Отзывы о тренинг-треках" />
            <h1>Мы получили 268 положительных</br>отзывов о тренинг-треках</h1>
        </div>
        <div id="chisel" class = "ch_1">
            <div class="chisel-top">
                <img src="/img/type-curses/chisel1.png" alt="Сергей Третьяков" />
            </div>
            <div class="chisel-middle">
                <div class="caption">Сергей Третьяков</div>
                <span>руководитель проектов</br>в производственной компании</span>
            </div>
            <div class="arrows">
                <div class="left-arrow"><a onclick = "fade_chisel('ch_1', 'ch_2');"><img src="/img/type-curses/left.png" /></a></div>
                <div class="right-arrow"><a onclick = "fade_chisel('ch_1', 'ch_2');"><img src="/img/type-curses/right.png" /></a></div>
            </div>
            <div class="chisel-bottom">
                <div class="caption">
                    Это удобно — учиться по заранее</br>разработанному для тебя треку. Получаешь всё,</br>что нужно для конкретной роли, и ты уже</br>готовый специалист.</br>Приятный бонус — экономия до 20%!
                </div>
            </div>
        </div>
		<div id="chisel" class = "ch_2">
            <div class="chisel-top">
                <img src="/img/type-curses/chisel1.png" alt="Сергей Третьяков" />
            </div>
            <div class="chisel-middle">
                <div class="caption">Роман Черемисин</div>
                <span>PME, руководитель отдела</br>строительных проектов,</br>13 лет опыта</span>
            </div>
            <div class="arrows">
                <div class="left-arrow"><a onclick = "fade_chisel('ch_2', 'ch_1');"><img src="/img/type-curses/left.png" /></a></div>
                <div class="right-arrow"><a onclick = "fade_chisel('ch_2', 'ch_1');"><img src="/img/type-curses/right.png" /></a></div>
            </div>
            <div class="chisel-bottom">
                <div class="caption">
                    Это офигительно круто</br>сэкономить 5000 рублей</br>и стать крутым специалистом
                </div>
            </div>
        </div>
        <div id="preparation">
            <div class="info">
                Мы подготовили<h2>3 000</h2>сертифицированных</br>специалистов в области</br>управления
            </div>
        </div>
        <div id="trainers">
            <h1>Наши лучшие тренеры:</h1>
            <div class="container">
                <div>
                    <img src="/img/type-curses/trainers1.png" alt="Роман Черемисин" />
                    <h3>Роман Черемисин</h3>
                    <div class="signature">РМЕ, руководитель отдела</br>строительных проектов,</br>13 лет опыта</div>
                </div>
                <div>
                    <img src="/img/type-curses/trainers2.png" alt="Ксения Хомутинникова" />
                    <h3>Ксения Хомутинникова</h3>
                    <div class="signature">РМЕ, руководитель отдела</br>строительных проектов,</br>13 лет опыта</div>
                </div>
                <div>
                    <img src="/img/type-curses/trainers3.png" alt="Юрий Ратай" />
                    <h3>Юрий Ратай</h3>
                    <div class="signature">РМЕ, руководитель отдела</br>строительных проектов,</br>13 лет опыта</div>
                </div>
            </div>
            <div class="buttons">
                <a href="#"><img src="/img/type-curses/button2.png" alt="Вся команда /"></a>
            </div>
            <div class="slogan">Обучение управлению</br>проектами на основе реального</br>опыта</div>
            <div class="logo">
                <img src="/img/type-curses/logo2.png" alt="PM Expert">
            </div>
        </div>
    </body>

</html>
