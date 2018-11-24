<?php header("Content-Type: text/html;charset=windows-1251"); ?>
<!DOCTYPE html>
<html>
    <head>
		<meta name="keywords" content="управление проектами, управление проектом, обучение управление проектами, управление проектами обучение
		курсы по управлению проектами, управление проектами курсы, pmi, pmp, pme, проектная система управления
		проектом, проектами, план проекта, система управления проектами, проектный офис, pmbok, pmbok-5
		project management, microsoft project, oracle primavera, primavera, управление портфелем проектов
		project management body of knowledge, сертификат pmp, сертификация pmp, сертификат pme
		сертификация pme, менеджмент управление проектами, программа проджект
		primavera программа, курсы по управлению проектами в москве, планировщик
		руководитель проектов, управление проектами тренинг, участники проекта, команда проекта
		управление качеством проекта, примавера программа управления проектами, администратор проекта
		ит проект, устав проекта пример, agile, календарное планирование, календарно-сетевое планирование
		КСУП, веха проекта, система управления проектами
		проектный менеджмент, проектное управление курсы управления проектами, содержание проекта
		рмвок управление проектами, методы управления проектом программы и портфели проектов, управление строительными проектами
		управление IT проектами, microsoft office project управление рисками, риски проекта, инструменты управления проектами
		принципы управления проектами, устав проекта это проект менеджмент, жизненный цикл проекта
		водопадная модель, ограничения проекта план проекта, pmp certification, иерархическая структура работ
		primavera программа управления проектами, примавера обучение повышение квалификации управление проектами, иерархическая структура работ проекта
		повышение квалификации управление проектами, интеграция проекта управление интеграцией проекта, ведение проекта
		свод знаний по управлению проектами, программа проекта обучение pmi, проектная роль, руководитель проектов, технологии управления проектом
		управление проектами это, план проекта это, проектный офис и его основные функции
		план управления проектом, куратор проекта, методология управления проектами, планирование проекта
		управление проектами москва руководитель проектного офиса, портфель проектов, проектный офис и его основные функции
		организационная структура проекта, управление заинтересованными сторонами, корпоративная система управления проектами
		ит-проект, строительный проект, менеджер проекта, деловая игра, офис проекта, проектный комитет, стандарт pmbok
		бизнес-стимуляция, управление качеством проекта, комплексный проект, интегрированный проект, эффективность проекта
		тренинг-треки, тренинг трек, сроки проекта, управление сроками проекта, расписание проекта, бюджет проекта, аудит проекта,
		управление знаниями управление проектами это, КМС, календарно-сетевая модель, ит проекты, строительный проект, пм эксперт, pm expert" />
		<meta name="description" content="Обучение управлению проектами - от новичка до руководителя проектного офиса, профессиональная сертификация, свидетельство о повышении квалификации. Станьте профессионалом в проектном управлении."> 
        <title>PM Expert - Обучение управлению проектами на основе реального опыта</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="format-detection" content="telephone=no">
        <meta http-equiv="Cache-Control" content="no-cache">
        <?php //require($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/prolog_before.php"); ?>
        <link rel="stylesheet" href="css/style.css" />
		<!-- JQuery --> 
		<script src="js/jquery.min.js"></script>
        <script src="js/script.js"></script>
    </head>
    <body>
		
		<?if(!empty($_GET['trecks'])){?>
			<div id = "get_trecks" style = "display: none;"><?echo $_GET['trecks'];?></div>	
		<?}?>
	
		<div class = "page" id="all">
			<header>
				<div class="header-top">
					<div class="logo">
						<a href="/trening-tracks/" class="main-logotype"></a>
					</div>
					<div class="tagline">
						Обучение управлению проектами</br>
						на основе реального опыта
					</div>
					<div class="menu">
						<ul>
							<li id = "head_1" class="active"><a onclick="set_head_text(1,2);" style = "cursor: pointer;">частным лицам</a></li>
							<li id = "head_2"><a onclick="set_head_text(2,1);" style = "cursor: pointer;">корпоративным клиентам</a></li>
							<li><img src="img/type-curses/icon-menu.png" onclick="$('.mobile-menu-area').addClass('show');$(this).addClass('click')" style="cursor:pointer;" /></li>
						</ul>
					</div>
				</div>
				<div class = "header-middle">
					<div class="caption" id = "head_text">Станьте профессионалом в управлении проектами.</br>Тренинг-треки для любого уровня:</br>от новичка до руководителя</br>проектного офиса</div>
				</div>
				<div class="header-bottom">
					<div class="title-icons">Выберите свой трек</div>
                    <div class="icons"><a style="cursor:pointer;" onclick = "$('#popup_img').show();$('.overlay').show();"><img src="img/type-curses/icon1.png" /></a></div>
					<a id = "main_scroll" onclick = "scroller_down();" style = "display:none;"></a>
				</div>
                <? include('include/mobile_menu.php'); ?>
			</header>
			<div id="advantages">
				<h1>Преимущества треков</h1>
				<div class="container">
					<div>
						<img src="img/type-curses/advantages1.png" alt="Сертифицированные тренеры-эксперты" />
						<div class="signature">Сертифицированные</br>тренеры-эксперты</div>
					</div>
					<div>
						<img src="img/type-curses/advantages2.png" alt="Специально подобранная последовательность тренингов" />
						<div class="signature">Специально</br>подобранная</br>последовательность</br>тренингов</div>
					</div>
					<div>
						<img src="img/type-curses/advantages3.png" alt="В основе каждого курса — опыт реальных проектов" />
						<div class="signature">В основе каждого</br>курса — опыт</br>реальных проектов</div>
					</div>
					<div>
						<img src="img/type-curses/advantages4.png" alt="Сертификация по итогам трека" />
						<div class="signature">Сертификация</br>по итогам трека</div>
					</div>
					<div>
						<img src="img/type-curses/advantages5.png" alt="Экономия до 20% от стоимости курсов" />
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
							<img src="img/type-curses/main1.png" alt="Администратор проекта PMEA®" />
						</div>
						<div class="content-top-right">
							<h2>Администратор</br>проекта <span>PMEA®</span></h2></a>
							<span>Начтите карьеру в управлении проектами — научитесь</br>администрированию проектов</span>
							<a class="description-track" href="detail.php?course_id=1_1"><img src="img/type-curses/button1.png" alt="Полное описание трека" /></a>
						</div>
					</div>
					<div class="arrows">
						<div class="left-arrow"><a onclick = "fade('1_1','1_5');"><img src="img/type-curses/left.png" /></a></div>
						<div class="right-arrow"><a onclick = "fade('1_1','1_2');"><img src="img/type-curses/right.png" /></a></div>
					</div>
					<div class="content-middle">
						<div class="blocks">
							<div class="block">
								<div class="block-header"><span>01</span></div>
								<div class="block-middle">Практические навыки</br> подготовки документов</br> проектов</div>
							</div>
							<div class="block">
								<div class="block-header"><span>02</span></div>
								<div class="block-middle">Применение</br>MS Project Professional</br>в управлении проектами</div>
								<div class="block-footer">Базовый модуль</div>
							</div>
							<div class="block">
								<div class="block-header"><span>03</span></div>
								<div class="block-middle">Подготовка</br>к РМЕ - дистанционный</div>
							</div>
							<div class="block green">
								<div class="block-header"><img src="img/type-curses/sert.png" alt="Сертификационный экзамен"/></div>
								<div class="block-middle">Сертификационный</br>экзамен</br>на степень</br>PMEA®</div>
							</div>
						</div>
					</div>
					<div class="content-bottom">
						<div class="time-price">
							<div>
								<img src="img/type-curses/icon2.png" />6 месяцев
							</div>
							<div>
								<img src="img/type-curses/icon2.png" />19 000 руб./22 500 руб.
							</div>
							<div>
								<img src="img/type-curses/icon3.png" />трек с сертификацией
							</div>
						</div>
					</div>
				</div>
				<!-- КУРС 1 - 2 -->
				<div class="content" id = "1_2">
					<div class="content-top">
						<div class="content-top-left">
							<img src="img/type-curses/main2.png" alt="Планировщик проекта PMSE®" />
						</div>
						<div class="content-top-right">
							<h2>Планировщик</br>проекта <span>PMSE®</span></h2>
							<span>Освойте весь цикл календарно-сетевого</br>планирования в проектах</span>
							<a class="description-track" href="detail.php?course_id=1_2"><img src="img/type-curses/button1.png" alt="Полное описание трека" /></a>
						</div>
					</div>
					<div class="arrows">
						<div class="left-arrow"><a onclick = "fade('1_2','1_1');"><img src="img/type-curses/left.png" /></a></div>
						<div class="right-arrow"><a onclick = "fade('1_2','1_3');"><img src="img/type-curses/right.png" /></a></div>
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
								<div class="block-header"><img src="img/type-curses/sert.png" alt="Сертификационный экзамен"/></div>
								<div class="block-middle">Сертификационный</br>экзамен</br>на степень</br>PMSE®</div>
							</div>
						</div>
					</div>
					<div class="content-bottom">
						<div class="time-price">
							<div>
								<img src="img/type-curses/icon2.png" />6 месяцев
							</div>
							<div>
								<img src="img/type-curses/icon2.png" />34 000 руб./38 250 руб.
							</div>
							<div>
								<img src="img/type-curses/icon3.png" />трек с сертификацией
							</div>
						</div>
					</div>
				</div>
				<!-- КУРС 1 - 3 -->
				<div class="content" id = "1_3">
					<div class="content-top">
						<div class="content-top-left">
							<img src="img/type-curses/main3.png" alt="Руководитель проекта PME®" />
						</div>
						<div class="content-top-right">
							<h2>Руководитель</br>проекта <span>PME®</span></h2>
							<span>Получите компетенции успешного управления</br>проектами разной сложности</span>
							<a class="description-track" href="detail.php?course_id=1_3"><img src="img/type-curses/button1.png" alt="Полное описание трека" /></a>
						</div>
					</div>
					<div class="arrows">
						<div class="left-arrow"><a onclick = "fade('1_3','1_2');"><img src="img/type-curses/left.png" /></a></div>
						<div class="right-arrow"><a onclick = "fade('1_3','1_4');"><img src="img/type-curses/right.png" /></a></div>
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
								<div class="block-header"><img src="img/type-curses/sert.png" alt="Сертификационный экзамен"/></div>
								<div class="block-middle">Сертификационный</br>экзамен</br>на степень</br>PME®</div>
							</div>
						</div>
					</div>
					<div class="content-bottom">
						<div class="time-price">
							<div>
								<img src="img/type-curses/icon2.png" />6 месяцев
							</div>
							<div>
								<img src="img/type-curses/icon2.png" />46 300 руб./52 600 руб.
							</div>
							<div>
								<img src="img/type-curses/icon3.png" />трек с сертификацией
							</div>
						</div>
					</div>
				</div>
				<!-- КУРС 1 - 4 -->
				<div class="content" id = "1_4">
					<div class="content-top">
						<div class="content-top-left">
							<img src="img/type-curses/main4.png" alt="Руководитель проекта PME® подготовка к PMP®" />
						</div>
						<div class="content-top-right">
							<h2>Руководитель проекта <span class="grey">PME®</span></br>подготовка к <span>PMP®</span></h2>
							<span>Получите компетенции успешного управления проектами разной</br>сложности, подготовьтесь к сдаче эксамена PMI PMP®</span>
							<a class="description-track" href="detail.php?course_id=1_4"><img src="img/type-curses/button1.png" alt="Полное описание трека" /></a>
						</div>
					</div>
					<div class="arrows">
						<div class="left-arrow"><a onclick = "fade('1_4','1_3');"><img src="img/type-curses/left.png" /></a></div>
						<div class="right-arrow"><a onclick = "fade('1_4','1_5');"><img src="img/type-curses/right.png" /></a></div>
					</div>
					<div class="content-middle">
						<div class="blocks">
							<div class="block">
								<div class="block-header"><span>01</span></div>
								<div class="block-middle">Основы </br>управления проектами </br>на базе стандарта PMI PMBOK®</br> Guide 6th Edition</br> (2017)</div>
								<div class="block-footer">Базовый курс</div>
							</div>
							<div class="block">
								<div class="block-header"><span>02</span></div>
								<div class="block-middle">Подготовка</br>к экзаменам</br>на получение</br>степеней PMP®</br>и PME®</div>
								<div class="block-footer">Дневной курс</div>
							</div>
							<div class="block green">
								<div class="block-header"><img src="img/type-curses/sert.png" alt="Сертификационный экзамен"/></div>
								<div class="block-middle">Сертификационный</br>экзамен</br>на степень</br>PME®</div>
							</div>
						</div>
					</div>
					<div class="content-bottom">
						<div class="time-price">
							<div>
								<img src="img/type-curses/icon2.png" />6 месяцев
							</div>
							<div>
								<img src="img/type-curses/icon2.png" />57 300 руб./63 850 руб.
							</div>
							<div>
								<img src="img/type-curses/icon3.png" />трек с сертификацией
							</div>
						</div>
					</div>
				</div>
				<!-- КУРС 1 - 5-->
				 <div class="content" id = "1_5">
					<div class="content-top">
						<div class="content-top-left">
							<img src="img/type-curses/main5.png" alt="Участник команды проекта" />
						</div>
						<div class="content-top-right">
							<h2>Участник команды</br>проекта</h2>
							<span>Повысьте эффективность вашей работы</br>в проектах</span>
							<a class="description-track" href="detail.php?course_id=1_5"><img src="img/type-curses/button1.png" alt="Полное описание трека" /></a>
						</div>
					</div>
					<div class="arrows">
						<div class="left-arrow"><a onclick = "fade('1_5','1_4');"><img src="img/type-curses/left.png" /></a></div>
						<div class="right-arrow"><a onclick = "fade('1_5','1_1');"><img src="img/type-curses/right.png" /></a></div>
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
								<img src="img/type-curses/icon2.png" />6 месяцев
							</div>
							<div>
								<img src="img/type-curses/icon2.png" />28 450 руб./33 150 руб.
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
							<img src="img/type-curses/main6.png" alt="Руководитель-эксперт PMEP®" />
						</div>
						<div class="content-top-right">
							<h2>Эксперт-практик</br><span>PMEP®</span></h2>
							<span>Развивайте успех своих проектов</span>
							<a class="description-track" href="detail.php?course_id=2_1"><img src="img/type-curses/button3.png" alt="Полное описание трека" /></a>
						</div>
					</div>
					<div class="arrows">
						<div class="left-arrow"><a onclick = "fade('2_1', '2_2');"><img src="img/type-curses/left.png" /></a></div>
						<div class="right-arrow"><a onclick = "fade('2_1', '2_2');"><img src="img/type-curses/right.png" /></a></div>
					</div>
					<div class="content-middle">
                        <div class="blocks">
                            <div class="block blue">
                                <div class="block-header" style="background-color: #71D5F4;"><img src="img/type-curses/sert.png" alt="Сертификационный экзамен"/></div>
                                <div class="block-middle">Сертификационный</br>экзамен на степень</br>PME®</div>
                            </div>
                            <div class="block">
                                <div class="block-header" style="background-color: #71D5F4;"><span>01</span></div>
                                <div class="block-middle">Эффективное управление расписанием проекта при ограниченных ресурсах</div>
                            </div>
                            <div class="block">
                                <div class="block-header" style = "background-color: #71D5F4;"><span>02</span></div>
                                <div class="block-middle">Практические инструменты сокращения стоимости проекта</div>
                            </div>
                            <div class="block">
                                <div class="block-header" style = "background-color: #71D5F4;"><span>03</span></div>
                                <div class="block-middle">Практические инструменты управления командой проекта</div>
                            </div>
                            <div class="block">
                                <div class="block-header" style = "background-color: #71D5F4;"><span>04</span></div>
                                <div class="block-middle">Практические инструменты эффективного взаимодействия в проекте</div>
                            </div>
                        </div>
                        <div class="blocks">
                            <div class="block">
                                <div class="block-header" style = "background-color: #71D5F4;"><span>05</span></div>
                                <div class="block-middle">Практикум «Управление заинтересованными сторонами проекта»</div>
                            </div>
                            <div class="block">
                                <div class="block-header" style = "background-color: #71D5F4;"><span>06</span></div>
                                <div class="block-middle">Практические методы эффективного управления рисками в проектах</div>
                            </div>
                            <div class="block">
                                <div class="block-header" style = "background-color: #71D5F4;"><span>07</span></div>
                                <div class="block-middle">Мастер-класс от эксперта в управлении проектами</div>
                            </div>
                            <div class="block blue">
                                <div class="block-header" style = "background-color: #71D5F4;"><img src="img/type-curses/sert.png" alt="Сертификационный экзамен"/></div>
                                <div class="block-middle">Сертификационный</br>экзамен на степень</br>PMEP®</div>
                            </div>
                        </div>
					</div>
					<div class="content-bottom">
						<div class="time-price">
							<div>
								<img src="img/type-curses/icon2.png" />1 год
							</div>
							<div>
								<img src="img/type-curses/icon2.png" />96 850 руб./106 700 руб.
							</div>
							<div>
								<img src="img/type-curses/icon3.png" />трек с сертификацией
							</div>
						</div>
					</div>
				</div>
				<!-- КУРС 2 - 2 -->
				<div class="content ver2" id = "2_2">
					<div class="content-top">
						<div class="content-top-left">
							<img src="img/type-curses/main7.png" alt="Руководитель проектного офиса PRIME®" />
						</div>
						<div class="content-top-right">
							<h2>Руководитель проектного</br>офиса <span>PRIME®</span></h2>
							<span>Руководите проектной деятельностью компании,</br>управляйте программами и портфелями проектов</span>
							<a class="description-track" href="detail.php?course_id=2_2"><img src="img/type-curses/button3.png" alt="Полное описание трека" /></a>
						</div>
					</div>
					<div class="arrows">
						<div class="left-arrow"><a onclick = "fade('2_2', '2_1');"><img src="img/type-curses/left.png" /></a></div>
						<div class="right-arrow"><a onclick = "fade('2_2', '2_1');"><img src="img/type-curses/right.png" /></a></div>
					</div>
					<div class="content-middle">
                        <div class="blocks">
                            <div class="block">
                                <div class="block-header" style = "background-color: #71D5F4;"><span>01</span></div>
                                <div class="block-middle">Корпоративная система управления проектами: проектирование, построение, развитие</div>
                            </div>
                            <div class="block">
                                <div class="block-header" style = "background-color: #71D5F4;"><span>02</span></div>
                                <div class="block-middle">Проектный офис: ступени эволюции, ключевые функции</div>
                            </div>
                            <div class="block">
                                <div class="block-header" style = "background-color: #71D5F4;"><span>03</span></div>
                                <div class="block-middle">Ключевые</br>особенности</br>управления</br>комплексными</br>проектами</div>
                            </div>
                            <div class="block">
                                <div class="block-header" style = "background-color: #71D5F4;"><span>04</span></div>
                                <div class="block-middle">Управление программами проектов</div>
                            </div>
                        </div>
                        <div class="blocks">
                            <div class="block">
                                <div class="block-header" style = "background-color: #71D5F4;"><span>05</span></div>
                                <div class="block-middle">Управление портфелями проектов</div>
                            </div>
                            <div class="block">
                                <div class="block-header" style = "background-color: #71D5F4;"><span>06</span></div>
                                <div class="block-middle">Деловая игра Ценность портфеля</div>
                            </div>
                            <div class="block blue">
                                <div class="block-header" style = "background-color: #71D5F4;"><img src="img/type-curses/sert.png" alt="Сертификационный экзамен"/></div>
                                <div class="block-middle">Сертификационный</br>экзамен</br>на степень</br>PRIME®</div>
                            </div>
                        </div>
					</div>
					<div class="content-bottom">
						<div class="time-price">
							<div>
								<img src="img/type-curses/icon2.png" />1 год
							</div>
							<div>
								<img src="img/type-curses/icon2.png" />81 650 руб./89 350 руб.
							</div>
							<div>
								<img src="img/type-curses/icon3.png" />трек с сертификацией
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- ТРЕТИЙ БЛОК ТРЕКОВ -->
			<div id="main" class = "main_3">
				<!-- КУРС 3 - 3 -->
				<div class="content ver3" id = "3_3">
					<div class="content-top">
						<div class="content-top-left">
							<img src="img/type-curses/main12.png" alt="Планировщик строительных проектов PMSE®" />
						</div>
						<div class="content-top-right">
							<h2>Планировщик</br>строительных проектов <span>PMSE</span></h2>
							<span>Освойте весь цикл календарно-сетевого</br> планирования в строительных проектах</span>
							<a class="description-track" href="detail.php?course_id=3_3"><img src="img/type-curses/button4.png" alt="Полное описание трека" /></a>
						</div>
					</div>
					<div class="arrows">
						<div class="left-arrow"><a onclick = "fade('3_3', '3_2');"><img src="img/type-curses/left.png" /></a></div>
						<div class="right-arrow"><a onclick = "fade('3_3', '3_1');"><img src="img/type-curses/right.png" /></a></div>
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
								<div class="block-middle">Применение</br> Microsoft </br>Project</br> Professional в</br> управлении</br> строительными</br> проектами</div>
							</div>
							<div class="block" style = "background-color: #FFB800;">
								<div class="block-header"><img src="img/type-curses/sert.png" alt="Сертификационный экзамен"/></div>
								<div class="block-middle">Сертификационный</br>экзамен</br>на степень</br>PMSE®</div>
							</div>
						</div>
					</div>
					<div class="content-bottom">
						<div class="time-price">
							<div>
								<img src="img/type-curses/icon2.png" />6 месяцев
							</div>
							<div>
								<img src="img/type-curses/icon2.png" />34 000 руб./38 250 руб.
							</div>
							<div>
								<img src="img/type-curses/icon3.png" />трек с сертификацией
							</div>
						</div>
					</div>
				</div>
				<!-- КУРС 3 - 1 -->
				<div class="content ver3" id = "3_1">
					<div class="content-top">
						<div class="content-top-left">
							<img src="img/type-curses/main8.png" alt="Руководитель строительных проектов" />
						</div>
						<div class="content-top-right">
							<h2>Руководитель строительных </br>проектов</h2>
							<span>Освойте специфику управления</br>проектами в капстрое</span>
							<a class="description-track" href="detail.php?course_id=3_1"><img src="img/type-curses/button4.png" alt="Полное описание трека" /></a>
						</div>
					</div>
					<div class="arrows">
						<div class="left-arrow"><a onclick = "fade('3_1', '3_3');"><img src="img/type-curses/left.png" /></a></div>
						<div class="right-arrow"><a onclick = "fade('3_1', '3_2');"><img src="img/type-curses/right.png" /></a></div>
					</div>
					<div class="content-middle">
                        <div class="blocks">
                            <div class="block">
                                <div class="block-header" style = "background-color: #FFB800;"><span>01</span></div>
                                <div class="block-middle">Управление</br>проектами</br>строительства на</br>производственных объектах</div>
                            </div>
                            <div class="block">
                                <div class="block-header" style = "background-color: #FFB800;"><span>02</span></div>
                                <div class="block-middle">Применение</br>MS Project Professional</br>в управлении</br>проектами</div>
                                <div class="block-footer">Базовый модуль</div>
                            </div>
                            <div class="block">
                                <div class="block-header" style = "background-color: #FFB800;"><span>03</span></div>
                                <div class="block-middle">Анализ проекта,</br>создание и настройка</br>отчетов</br>в Microsoft Project</div>
                            </div>
                            <div class="block">
                                <div class="block-header" style = "background-color: #FFB800;"><span>04</span></div>
                                <div class="block-middle">Деловая игра:</br>Египет бросает</br>вызов!</div>
                            </div>
                        </div>
					</div>
					<div class="content-bottom">
						<div class="time-price">
							<div>
								<img src="img/type-curses/icon2.png" />6 месяцев
							</div>
							<div>
								<img src="img/type-curses/icon2.png" />44 600 руб./51 000 руб.
							</div>
							<div>
								<img src="img/type-curses/icon3.png" />трек с сертификацией
							</div>
						</div>
					</div>
				</div>
				<!-- КУРС 3 - 2 -->
				<div class="content ver3" id = "3_2">
					<div class="content-top">
						<div class="content-top-left">
							<img src="img/type-curses/main9.png" alt="Руководитель проекта в IT" />
						</div>
						<div class="content-top-right">
							<h2>Руководитель</br>проекта в IT</h2>
							<span>Освойте специфику управления</br>проектами в ИТ</span>
							<a class="description-track" href="detail.php?course_id=3_2"><img src="img/type-curses/button4.png" alt="Полное описание трека" /></a>
						</div>
					</div>
					<div class="arrows">
						<div class="left-arrow"><a onclick = "fade('3_2', '3_1');"><img src="img/type-curses/left.png" /></a></div>
						<div class="right-arrow"><a onclick = "fade('3_2', '3_3');"><img src="img/type-curses/right.png" /></a></div>
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
								<div class="block-middle">Эффективное сочетание классических и гибких подходов</div>
							</div>
						</div>
					</div>
					<div class="content-bottom">
						<div class="time-price">
							<div>
								<img src="img/type-curses/icon2.png" />6 месяцев
							</div>
							<div>
								<img src="img/type-curses/icon2.png" />57 350 руб./65 900 руб.
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
							<img src="img/type-curses/main10.png" alt="PM для функциональных руководителей" />
						</div>
						<div class="content-top-right">
							<h2>PM для функциональных</br>руководителей</h2>
							<span>Эффективные инструменты РМ для достижения</br>наилучших результатов ваших проектов</span>
							<a class="description-track" href="detail.php?course_id=4_1"><img src="img/type-curses/button5.png" alt="Полное описание трека" /></a>
						</div>
					</div>
					<div class="arrows">
						<div class="left-arrow"><a onclick = "fade('4_1', '4_2');"><img src="img/type-curses/left.png" /></a></div>
						<div class="right-arrow"><a onclick = "fade('4_1', '4_2');"><img src="img/type-curses/right.png" /></a></div>
					</div>
					<div class="content-middle">
						<div class="blocks">
							<div class="block">
								<div class="block-header"><span>01</span></div>
								<div class="block-middle">Введение</br>в управление</br>проектами</div>
							</div>
							<div class="block">
								<div class="block-header"><span>02</span></div>
								<div class="block-middle">Деловая игра: </br>Египет бросает вызов!</div>
								<!--<div class="block-footer">Деловая игра</div>-->
							</div>
						</div>
					</div>
					<div class="content-bottom">
						<div class="time-price">
							<div>
								<img src="img/type-curses/icon2.png" />6 месяцев
							</div>
							<div>
								<img src="img/type-curses/icon2.png" />19 300 руб./23 300 руб.
							</div>
							<div>
								<img src="img/type-curses/icon3.png" />трек с сертификацией
							</div>
						</div>
					</div>
				</div>
				<!-- КУРС 4 - 2 -->
				<div class="content ver4" id = "4_2">
					<div class="content-top">
						<div class="content-top-left">
							<img src="img/type-curses/main11.png" alt="PM для менеджеров" />
						</div>
						<div class="content-top-right">
							<h2>PM для интересующихся</h2>
							<span>Эффективные инструменты РМ для достижения</br>наилучших результатов проектов</span>
							<a class="description-track" href="detail.php?course_id=4_2"><img src="img/type-curses/button5.png" alt="Полное описание трека" /></a>
						</div>
					</div>
					<div class="arrows">
						<div class="left-arrow"><a onclick = "fade('4_2', '4_1');"><img src="img/type-curses/left.png" /></a></div>
						<div class="right-arrow"><a onclick = "fade('4_2', '4_1');"><img src="img/type-curses/right.png" /></a></div>
					</div>
					<div class="content-middle">
						<div class="blocks">
							<div class="block">
								<div class="block-header"><span>01</span></div>
								<div class="block-middle">Тест-драйв:</br>Формула вашего</br>успешного проекта</div>
							</div>
							<div class="block">
								<div class="block-header"><span>02</span></div>
								<div class="block-middle">Деловая игра:</br>Блокчейн</div>
								<!--<div class="block-footer">Деловая игра</div>-->
							</div>
						</div>
					</div>
					<div class="content-bottom">
						<div class="time-price">
							<div>
								<img src="img/type-curses/icon2.png" />6 месяцев
							</div>
							<div>
								<img src="img/type-curses/icon2.png" />28 450 руб./33 150 руб.
							</div>
						</div>
					</div>
				</div>
			</div>
			
			
			<!--ОТЗЫВЫ-->
			<div id="chisel" class = "ch_1">
				<div class="chisel-top">
					<img src="img/type-curses/baranov.png" alt="Владимир Баранов" />
				</div>
				<div class="chisel-middle">
					<div class="caption">Владимир Баранов, PMP, PME, MCTS</div>
					<span>Директор Практики управления проектами</span>
				</div>
				<div class="arrows">
					<div class="left-arrow"><a onclick = "fade_chisel('ch_1', 'ch_13');"><img src="img/type-curses/left.png" /></a></div>
					<div class="right-arrow"><a onclick = "fade_chisel('ch_1', 'ch_2');"><img src="img/type-curses/right.png" /></a></div>
				</div>
				<div class="chisel-bottom">
					<div class="caption">
						 «Я начинал свою карьеру в УП с роли администратора, приходилось все осваивать самому. Наш курс построен таким образом, что за 2,5 дня вы получаете максимально полезные для роли администратора знания и навыки. Фактически вы -готовый специалист»
					</div>
				</div>
			</div>
			<div id="chisel" class = "ch_2">
				<div class="chisel-top">
					<img src="img/type-curses/kochetov.png" alt="Александр Кочетов" />
				</div>
				<div class="chisel-middle">
					<div class="caption">Александр Кочетов, PMP, PME</div>
					<span>Заместитель генерального директора</span>
				</div>
				<div class="arrows">
					<div class="left-arrow"><a onclick = "fade_chisel('ch_2', 'ch_1');"><img src="img/type-curses/left.png" /></a></div>
					<div class="right-arrow"><a onclick = "fade_chisel('ch_2', 'ch_3');"><img src="img/type-curses/right.png" /></a></div>
				</div>
				<div class="chisel-bottom">
					<div class="caption">
						«Проводя аналогию с вооруженными силами, для командира на передовой (в нашем случае Руководителя проекта) крайне важно, чтобы в штабе все было в порядке – фиксировалось продвижение войск, запасы находились в сохранности, направлялись заявки на пополнение боеприпасами, учитывалась и обрабатывалась необходимая информация. Таким штабным офицером в проекте является Администратор. Как практический руководитель проектов, я подчеркиваю важность роли Администратора для эффективной проектной работы»
					</div>
				</div>
			</div>
			<div id="chisel" class = "ch_3">
				<div class="chisel-top">
					<img src="img/type-curses/cheremisin.png" alt="Роман Черемисин" />
				</div>
				<div class="chisel-middle">
					<div class="caption">Роман Черемисин, PMSE, РМЕ</div>
					<span>Руководитель отдела строительных проектов</span>
				</div>
				<div class="arrows">
					<div class="left-arrow"><a onclick = "fade_chisel('ch_3', 'ch_2');"><img src="img/type-curses/left.png" /></a></div>
					<div class="right-arrow"><a onclick = "fade_chisel('ch_3', 'ch_4');"><img src="img/type-curses/right.png" /></a></div>
				</div>
				<div class="chisel-bottom">
					<div class="caption">
						«Я уже почти 10 лет занимаюсь управлением проектами и за это время ни разу не усомнился в полезности функции планирования. В рамках трека вы узнаете не только о том, на какие кнопки в программном обеспечении нужно нажимать, но и научитесь решать возникающие организационные вопросы на основе нашего практического опыта в проектах»
					</div>
				</div>
			</div>
			<div id="chisel" class = "ch_4">
				<div class="chisel-top">
					<img src="img/type-curses/homutinnikova.png" alt="Ксения Хомутинникова" />
				</div>
				<div class="chisel-middle">
					<div class="caption">Ксения Хомутинникова, PMP, PME, CPMA</div>
					<span>Бизнес-тренер, методолог</span>
				</div>
				<div class="arrows">
					<div class="left-arrow"><a onclick = "fade_chisel('ch_4', 'ch_3');"><img src="img/type-curses/left.png" /></a></div>
					<div class="right-arrow"><a onclick = "fade_chisel('ch_4', 'ch_5');"><img src="img/type-curses/right.png" /></a></div>
				</div>
				<div class="chisel-bottom">
					<div class="caption">
						«Как показывает практика, многие руководители постоянно наступают на одни и те же грабли. Этого можно избежать, используя накопленный и зафиксированный в стандартах опыт, однако важно, чтобы стандарт учитывал специфику российских проектов» 
					</div>
				</div>
			</div>
			<div id="chisel" class = "ch_5">
				<div class="chisel-top">
					<img src="img/type-curses/baranov.png" alt="Владимир Баранов" />
				</div>
				<div class="chisel-middle">
					<div class="caption">Владимир Баранов, PMP, PME, MCTS</div>
					<span>Директор Практики управления проектами</span>
				</div>
				<div class="arrows">
					<div class="left-arrow"><a onclick = "fade_chisel('ch_5', 'ch_4');"><img src="img/type-curses/left.png" /></a></div>
					<div class="right-arrow"><a onclick = "fade_chisel('ch_5', 'ch_6');"><img src="img/type-curses/right.png" /></a></div>
				</div>
				<div class="chisel-bottom">
					<div class="caption">
						«Обоснованные и своевременные управленческие решения – залог успеха любого проекта. При этом ввиду расширяющихся границ сегодняшних проектов одинаково важны как российский опыт, так и международная практика»
					</div>
				</div>
			</div>
			<div id="chisel" class = "ch_6">
				<div class="chisel-top">
					<img src="img/type-curses/viktorova.png" alt="Ольга Викторова" />
				</div>
				<div class="chisel-middle">
					<div class="caption">Ольга Викторова</div>
					<span>Директор по сертификации</span>
				</div>
				<div class="arrows">
					<div class="left-arrow"><a onclick = "fade_chisel('ch_6', 'ch_5');"><img src="img/type-curses/left.png" /></a></div>
					<div class="right-arrow"><a onclick = "fade_chisel('ch_6', 'ch_7');"><img src="img/type-curses/right.png" /></a></div>
				</div>
				<div class="chisel-bottom">
					<div class="caption">
						«Для успешной реализации проекта не только руководителю требуются компетенции в области управления проектами. Каждый участник команды, чтобы быть эффективным, должен обладать необходимым набором знаний и навыков в проектном управлении. В команде не должно быть слабых звеньев»
					</div>
				</div>
			</div>
			<div id="chisel" class = "ch_7">
				<div class="chisel-top">
					<img src="img/type-curses/kochetov.png" alt="Александр Кочетов" />
				</div>
				<div class="chisel-middle">
					<div class="caption">Александр Кочетов, PMP, PME</div>
					<span>Заместитель генерального директора</span>
				</div>
				<div class="arrows">
					<div class="left-arrow"><a onclick = "fade_chisel('ch_7', 'ch_6');"><img src="img/type-curses/left.png" /></a></div>
					<div class="right-arrow"><a onclick = "fade_chisel('ch_7', 'ch_8');"><img src="img/type-curses/right.png" /></a></div>
				</div>
				<div class="chisel-bottom">
					<div class="caption">
						«Управление проектами – это в первую очередь технологии, основанные на накопленном опыте. Многие ситуации и проблемы, кажущиеся уникальными, уже неоднократно испытывали на себе участники других проектов. Трек «Эксперт-практик» позволит воспользоваться опытом руководителей и команд самых разнообразных проектов. Опыт можно принимать, можно совершенствовать – но его нельзя игнорировать»
					</div>
				</div>
			</div>
			<div id="chisel" class = "ch_8">
				<div class="chisel-top">
					<img src="img/type-curses/homutinnikova.png" alt="Ксения Хомутинникова" />
				</div>
				<div class="chisel-middle">
					<div class="caption">Ксения Хомутинникова, PMP, PME, CPMA</div>
					<span>Бизнес-тренер, методолог</span>
				</div>
				<div class="arrows">
					<div class="left-arrow"><a onclick = "fade_chisel('ch_8', 'ch_7');"><img src="img/type-curses/left.png" /></a></div>
					<div class="right-arrow"><a onclick = "fade_chisel('ch_8', 'ch_9');"><img src="img/type-curses/right.png" /></a></div>
				</div>
				<div class="chisel-bottom">
					<div class="caption">
						«Управление проектным офисом - задача системного характера. Компетенции руководителя включают понимание технологий проектного управления, структуры и содержания корпоративной системы управления проектами, логики планомерного развития проектного офиса в компании. Руководитель должен знать сам и уметь донести сотрудникам разницу между проектами, комплексными проектами и программами для создания эффективных управленческих процедур. Понимание логики управления портфелем проектов - ключевой фактор высокой эффективности проектного офиса, поскольку закладывает основу достижения компанией стратегических целей»
					</div>
				</div>
			</div>
			<div id="chisel" class = "ch_9">
				<div class="chisel-top">
					<img src="img/type-curses/cheremisin.png" alt="Роман Черемисин" />
				</div>
				<div class="chisel-middle">
					<div class="caption">Роман Черемисин, PMSE, РМЕ</div>
					<span>Руководитель отдела строительных проектов</span>
				</div>
				<div class="arrows">
					<div class="left-arrow"><a onclick = "fade_chisel('ch_9', 'ch_8');"><img src="img/type-curses/left.png" /></a></div>
					<div class="right-arrow"><a onclick = "fade_chisel('ch_9', 'ch_10');"><img src="img/type-curses/right.png" /></a></div>
				</div>
				<div class="chisel-bottom">
					<div class="caption">
						«Я уже почти 10 лет занимаюсь управлением проектами и за это время ни разу не усомнился в полезности функции планирования. В рамках трека вы узнаете не только о том, на какие кнопки в программном обеспечении нужно нажимать, но и научитесь решать возникающие организационные вопросы на основе нашего практического опыта в проектах»
					</div>
				</div>
			</div>
			<div id="chisel" class = "ch_10">
				<div class="chisel-top">
					<img src="img/type-curses/smirnov.png" alt="Иван Смирнов" />
				</div>
				<div class="chisel-middle">
					<div class="caption">Иван Смирнов, PMP</div>
					<span>Директор Практики управления проектами</span>
				</div>
				<div class="arrows">
					<div class="left-arrow"><a onclick = "fade_chisel('ch_10', 'ch_9');"><img src="img/type-curses/left.png" /></a></div>
					<div class="right-arrow"><a onclick = "fade_chisel('ch_10', 'ch_11');"><img src="img/type-curses/right.png" /></a></div>
				</div>
				<div class="chisel-bottom">
					<div class="caption">
						«В строительных проектах крайне важно контролировать критический путь и технологические границы, грамотно управлять подрядчиком на основании данных из календарно-сетевой модели. Квалифицированный руководитель проекта обязан знать и использовать все возможности MS Project в своей проектной деятельности»
					</div>
				</div>
			</div>
			<div id="chisel" class = "ch_11">
				<div class="chisel-top">
					<img src="img/type-curses/lavrentiev.png" alt="Павел Лаврентьев" />
				</div>
				<div class="chisel-middle">
					<div class="caption">Павел Лаврентьев, PME</div>
					<span>Директор Практики управления проектами</span>
				</div>
				<div class="arrows">
					<div class="left-arrow"><a onclick = "fade_chisel('ch_11', 'ch_10');"><img src="img/type-curses/left.png" /></a></div>
					<div class="right-arrow"><a onclick = "fade_chisel('ch_11', 'ch_12');"><img src="img/type-curses/right.png" /></a></div>
				</div>
				<div class="chisel-bottom">
					<div class="caption">
						«По нашему опыту, именно в сфере IT наиболее часто складываются ситуации, при которых руководители проекта, чрезмерно углубляясь в детали предметной области, теряют общую картину происходящего в проекте. В результате проекты терпят неудачу. Мы понимаем, как избежать подобных ошибок, и готовы поделиться нашими знаниями»
					</div>
				</div>
			</div>
			<div id="chisel" class = "ch_12">
				<div class="chisel-top">
					<img src="img/type-curses/smirnov.png" alt="Иван Смирнов" />
				</div>
				<div class="chisel-middle">
					<div class="caption">Иван Смирнов, PMP</div>
					<span>Директор Практики управления проектами</span>
				</div>
				<div class="arrows">
					<div class="left-arrow"><a onclick = "fade_chisel('ch_12', 'ch_11');"><img src="img/type-curses/left.png" /></a></div>
					<div class="right-arrow"><a onclick = "fade_chisel('ch_12', 'ch_13');"><img src="img/type-curses/right.png" /></a></div>
				</div>
				<div class="chisel-bottom">
					<div class="caption">
						«Успех проекта напрямую зависит не только от проектной команды, но и от вовлеченности руководства и его понимания происходящих в проекте процессов»
					</div>
				</div>
			</div>
			<div id="chisel" class = "ch_13">
				<div class="chisel-top">
					<img src="img/type-curses/chemisova.png" alt="Анастасия Чемисова" />
				</div>
				<div class="chisel-middle">
					<div class="caption">Анастасия Чемисова</div>
					<span>Директор по обучению</span>
				</div>
				<div class="arrows">
					<div class="left-arrow"><a onclick = "fade_chisel('ch_13', 'ch_12');"><img src="img/type-curses/left.png" /></a></div>
					<div class="right-arrow"><a onclick = "fade_chisel('ch_13', 'ch_1');"><img src="img/type-curses/right.png" /></a></div>
				</div>
				<div class="chisel-bottom">
					<div class="caption">
						 «Вы организуете бизнес, планируете свадьбу или нестандартное путешествие? Скорость изменений в современном мире заставляет практически при любой активности работать в проектном режиме – формировать команду, распределять бюджет, закладывать сроки, ставить измеримые цели и достигать их. Трек дает возможность погрузиться в атмосферу реального проекта, где в игровом формате вы получите знания и навыки, необходимые для успешного управления проектом»
					</div>
				</div>
			</div>
			
			
			<div id="preparation">
				<div class="info">
					Мы подготовили<h2>3 000</h2>сертифицированных</br>специалистов в области</br>управления проектами
				</div>
			</div>
			<div id="trainers">
				<h1>Наши лучшие тренеры</h1>
				<div class="container">
					<div>
                        <img onclick="openDescription($(this));" src="img/type-curses/trainers1.png" alt="Роман Черемисин" />
						<h3>Роман Черемисин</h3>
						<div class="signature">PMP®, PME®, PMSE®</div>
                        <div class="description">Бизнес-тренер с богатым практическим опытом в области управления проектами, эксперт в сфере календарно-сетевого планирования и мониторинга проектов. Успешно реализовал проекты для компаний «Роснефть», «Росатом», «Росавтодор», «ТНК-ВР», «Славнефть», «Газпром нефть» «РАМПОРТ АЭРО», «Северсталь», REPSOL, «Лукойл», «ЕВРАЗ ЗСМК», «Новороссийский морской торговый порт» и др. Является руководителем отдела строительных проектов PM EXPERT, а также автором нескольких обучающих курсов. Обладает техническими знаниями в области капитального строительства, опытом разработки методологической документации, проведения коучинга специалистов в процессе реализации проектов. Владеет MS Project и Оracle Primavera на экспертном уровне. Свободно владеет английским языком.</div>
					</div>
					<div>
                        <img onclick="openDescription($(this));" src="img/type-curses/trainers2.png" alt="Ксения Хомутинникова" />
						<h3>Ксения Хомутинникова</h3>
						<div class="signature">PMP®, PME®, CPMA®</div>
                        <div class="description">Практикующий бизнес-тренер и разработчик тренингов, кейсов и деловых симуляторов PM EXPERT. Занимается управлением проектами с 2004 года, обладает богатыми знаниями в области систем проектной мотивации и методологии проектного управления. Проводит обучение проектных команд. Руководила и принимала участие в проектах для Оргкомитета «Сочи-2014», компаний TOYOTA, «ТНК-ВР», «АИЖК», «Сетевой академии Ланит», «ОКБ Сухого» и др. Является автором обучающих курсов, публикаций, докладов в рамках крупных мероприятий по тематике управления проектами. Вела преподавательскую деятельность в Высшей школе экономики и Высшей школе управления проектами. Владеет английским и немецким языками.</div>
					</div>
					<div>
                        <img onclick="openDescription($(this));" src="img/type-curses/trainers3.png" alt="Юрий Ратай" />
						<h3>Сергей Базанов</h3>
						<div class="signature">PMP®, PME®, СРП-3, член PMI®</div>
                        <div class="description">Опытный бизнес-тренер, автор обучающих программ и игровых кейсов, консультант по управлению проектами. Более 25 лет в профессии, эксперт в области методологии проектного управления, бизнес-анализа, информатизации, соавтор курсов РАНХиГС по project-менеджменту для государственных и муниципальных служащих. Владеет различными инструментами и методами проектного управления, в том числе стратегического и на основе стандартов, занимается практическим управлением рисками, заинтересованными сторонами, коммуникациями, регламентацией проектной деятельности организаций, разработкой корпоративных стандартов, моделей компетенций, систем тестирования. Реализовал проекты и обучающие программы для ГФУ Сахалинской области, Администрации Белгородской области, МЧС, Рособрназдора, РАНХиГС, Туапсинского морского порта, телеканала ТВЦ, компаний «Уолт Дисней» «ТНК-ВР», «Башнефть», «Газпромнефть», «ВТБ-24», «Росатом», Volkswagen, Yokohama, «Билайн», «Мегафон», «Йота», «Ростелеком», «Росникель», «Балтика», «Волга-Дон», «Сбербанк», «НЛМК» и др.</div>
					</div>
				</div>
				<div class="buttons">
					<a href="http://www.pmexpert.ru/services/training/trainers/"><img src="img/type-curses/button2.png" alt="Вся команда /"></a>
				</div>
				<div class="slogan">Обучение управлению</br>проектами на основе реального</br>опыта</div>
				<div class="logo">
					<img src="img/type-curses/logo2.png" alt="PM Expert">
				</div>
			</div>
		
		<div class="overlay" onclick="$('.overlay, .popup').hide();"></div>
		<div class="popup" id="popup_img">
			<span class="close" onclick = "$('.overlay, .popup').hide();">X</span>
			<a href = "img/type-curses/full_courses.jpg" target="_blank"><img src = "img/type-curses/full_courses.jpg"  width = "1000px" height = "1000px;" /></a>
		</div>
		
		</div>	
		
		
		<!-- Yandex.Metrika counter -->
		<script type="text/javascript">
		(function (d, w, c) {
			(w[c] = w[c] || []).push(function() {
				try {
					w.yaCounter26042061 = new Ya.Metrika({id:26042061,
							webvisor:true,
							clickmap:true,
							trackLinks:true,
							accurateTrackBounce:true});
				} catch(e) { }
			});

			var n = d.getElementsByTagName("script")[0],
				s = d.createElement("script"),
				f = function () { n.parentNode.insertBefore(s, n); };
			s.type = "text/javascript";
			s.async = true;
			s.src = (d.location.protocol == "https:" ? "https:" : "http:") + "//mc.yandex.ru/metrika/watch.js";

			if (w.opera == "[object Opera]") {
				d.addEventListener("DOMContentLoaded", f, false);
			} else { f(); }
		})(document, window, "yandex_metrika_callbacks");
		</script>
		<noscript><div><img src="//mc.yandex.ru/watch/26042061" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
		<!-- /Yandex.Metrika counter -->	
	</body>

</html>
