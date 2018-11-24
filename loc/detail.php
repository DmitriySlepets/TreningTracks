<?php header("Content-Type: text/html;charset=windows-1251"); ?>

<?php
	$course = $_GET['course_id'];
	if(empty($course)){
		$course = "1_1";
	}

    $nameCourse = "";
    if($course == "1_1"){ $nameCourse = "Администратор проекта PMEA®"; }
    if($course == "1_2"){ $nameCourse = "Планировщик проекта PMSE®"; }
    if($course == "1_3"){ $nameCourse = "Руководитель проекта PME®"; }
    if($course == "1_4"){ $nameCourse = "Руководитель проекта PME®. Подготовка к PMP®."; }
    if($course == "1_5"){ $nameCourse = "Участник команды проекта"; }

    if($course == "2_1"){ $nameCourse = "Руководитель-эксперт PMEP®"; }
    if($course == "2_2"){ $nameCourse = "Руководитель проектного офиса PRIME®"; }

    if($course == "3_1"){ $nameCourse = "Руководитель проекта в капстрое"; }
    if($course == "3_2"){ $nameCourse = "Руководитель проекта в IT"; }
	if($course == "3_3"){ $nameCourse = "Планировщик строительных проектов PMSE®"; }

    if($course == "4_1"){ $nameCourse = "PM для функциональных руководителей"; }
    if($course == "4_2"){ $nameCourse = "PM для менеджеров"; }
?>

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
        <title>PM Expert - <?php echo $nameCourse; ?></title>
		<!--<title>PM Expert - Обучение управлению проектами на основе реального опыта</title>-->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="format-detection" content="telephone=no">
        <meta http-equiv="Cache-Control" content="no-cache">
        <?php //require($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/prolog_before.php"); ?>
        <link rel="stylesheet" href="css/detail.css" />
        <!-- JQuery -->
        <script src="js/jquery.min.js"></script>
        <script src="js/detail.js"></script>
        <script src="js/jquery.mask.js"></script>
    </head>
    <body>
        <div class = "page" id="all">
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
                            <li><img src="/img/detail-curses/icon-menu.png" onclick="$('.mobile-menu-area').addClass('show');$(this).addClass('click')" style="cursor:pointer;"/></li>
                        </ul>
                    </div>
                </div>
                <div class="header-bottom">
                    <div class="breadcrumbs">
                        <ul> <!-- Хлебные крошки -->
                            <li class="old"><a href="/index.php">Главная</a></li>
							<!-- Треки проектных команд-->
							<?if($course == "1_1"){?>
								<li class="old"><a href="/index.php?trecks=1">Треки для участников проектных команд</a></li>
								<li>Администратор проекта PMEA®</li>
							<?}?>
							<?if($course == "1_2"){?>
								<li class="old"><a href="/index.php?trecks=1">Треки для участников проектных команд</a></li>
								<li>Планировщик проекта PMSE®</li>
							<?}?>
							<?if($course == "1_3"){?>
								<li class="old"><a href="/index.php?trecks=1">Треки для участников проектных команд</a></li>
								<li>Руководитель проекта PME®</li>
							<?}?>
							<?if($course == "1_4"){?>
								<li class="old"><a href="/index.php?trecks=1">Треки для участников проектных команд</a></li>
								<li>Руководитель проекта PME®. Подготовка к PMP®</li>
							<?}?>
							<?if($course == "1_5"){?>
								<li class="old"><a href="/index.php?trecks=1">Треки для участников проектных команд</a></li>
								<li>Участник команды проекта</li>
							<?}?>
							
							<?if($course == "2_1"){?>
								<li class="old"><a href="/index.php?trecks=2">Треки для опытных руководителей</a></li>
								<li>Руководитель-эксперт PMEP®</li>
							<?}?>
							<?if($course == "2_2"){?>
								<li class="old"><a href="/index.php?trecks=2">Треки для опытных руководителей</a></li>
								<li>Руководитель проектного офиса PRIME®</li>
							<?}?>
							
							<?if($course == "3_1"){?>
								<li class="old"><a href="/index.php?trecks=3">Отраслевые треки</a></li>
								<li>Руководитель проекта в капстрое</li>
							<?}?>
							<?if($course == "3_2"){?>
								<li class="old"><a href="/index.php?trecks=3">Отраслевые треки</a></li>
								<li>Руководитель проекта в IT</li>
							<?}?>
							<?if($course == "3_3"){?>
								<li class="old"><a href="/index.php?trecks=3">Отраслевые треки</a></li>
								<li>Планировщик строительных проектов PMSE®</li>
							<?}?>
							
							<?if($course == "4_1"){?>
								<li class="old"><a href="/index.php?trecks=4">Project management для всех</a></li>
								<li>PM для функциональных руководителей</li>
							<?}?>
							<?if($course == "4_2"){?>
								<li class="old"><a href="/index.php?trecks=4">Project management для всех</a></li>
								<li>PM для менеджеров</li>
							<?}?>
							
                        </ul>
                    </div>
                </div>
                <? include('include/mobile_menu.php'); ?>
            </header>
            <div id="main">
                <?if($course == "1_1"){?><div class="content"><?}?>
				<?if($course == "1_2"){?><div class="content"><?}?>
                <?if($course == "1_3"){?><div class="content"><?}?>
                <?if($course == "1_4"){?><div class="content"><?}?>
                <?if($course == "1_5"){?><div class="content"><?}?>
                
				<?if($course == "2_1"){?><div class="content ver2"><?}?>
                <?if($course == "2_2"){?><div class="content ver2"><?}?>
                
				<?if($course == "3_1"){?><div class="content ver3"><?}?>
                <?if($course == "3_2"){?><div class="content ver3"><?}?>
                <?if($course == "3_3"){?><div class="content ver3"><?}?>
                
                <?if($course == "4_1"){?><div class="content ver4"><?}?>
                <?if($course == "4_2"){?><div class="content ver4"><?}?>
                
					<div class="content-top">
                        <div class="content-top-left"> <!-- img courses -->
						    <?if($course == "1_1"){?><img src="/img/type-curses/main1.png" alt="Администратор проекта PMEA®"><?}?>
                            <?if($course == "1_2"){?><img src="/img/type-curses/main2.png" alt="Планировщик проекта PMSE®"><?}?>
                            <?if($course == "1_3"){?><img src="/img/type-curses/main3.png" alt="Руководитель проекта PME®"><?}?>
                            <?if($course == "1_4"){?><img src="/img/type-curses/main4.png" alt="Руководитель проекта PME® подготовка к PMP®"><?}?>
                        	<?if($course == "1_5"){?><img src="/img/type-curses/main5.png" alt="Участник команды проекта"><?}?>
							
							<?if($course == "2_1"){?><img src="/img/type-curses/main6.png" alt="Руководитель-эксперт PMEP®"><?}?>
							<?if($course == "2_2"){?><img src="/img/type-curses/main7.png" alt="Руководитель проектного офиса PRIME®"><?}?>
							
							<?if($course == "3_1"){?><img src="/img/type-curses/main8.png" alt="Руководитель проекта в капстрое"><?}?>
							<?if($course == "3_2"){?><img src="/img/type-curses/main9.png" alt="Руководитель проекта в IT"><?}?>
							<?if($course == "3_3"){?><img src="/img/type-curses/main12.png" alt="Планировщик строительных проектов PMSE®"><?}?>
							
							<?if($course == "4_1"){?><img src="/img/type-curses/main10.png" alt="PM для функциональных руководителей"><?}?>
							<?if($course == "4_2"){?><img src="/img/type-curses/main11.png" alt="PM для менеджеров"><?}?>
						</div>
						<? include('include/headers_courses.php'); ?>
                    </div><!--.content-top-->
                    <div class="content-middle">
                        <? include('include/for_what_is_responsible.php');?>
                    </div><!--.content-middle-->
                    <div class="content-bottom">
                        <? include('include/what_will_you learn.php'); ?>
                    </div><!--.content-bottom-->
                </div><!--.content-->
            </div><!--main-->
            <div id="program">
                <? include('include/programs.php');?>
            </div><!--program-->
            <div id="advantages">
                <h1>Кому подходит трек</h1>
				<? include('include/who_is_suitable.php');?>
				<br/><br/><br/>
				<?if($course == "1_2"){?><iframe width="852" height="405" src="https://www.youtube.com/embed/nw2ZW5xoyns" frameborder="0" allowfullscreen></iframe><?}?>
				<?if($course == "3_3"){?><iframe width="852" height="405" src="https://www.youtube.com/embed/HMCLADyBhyA" frameborder="0" allowfullscreen></iframe><?}?>
			</div><!--advantages-->
            <!--<div id="info">
                <div class="banner">
                    <span>Как обосновать</br>применение</br>календарно-сетевого</br>планирования</br>в компании?</span>
                </div>
            </div>--><!--info-->
            <div id="totals">
                <h1>Итоги обучения</h1>
                <div class="banner">
                    <div class="banner-left">
                        <img src="/img/detail-curses/icon3.png" alt="Сертификат" />
                    </div>
                    <div class="banner-right">
                        <h3>Свидетельство о повышении квалификации</h3>
                        <!--<ul>
                            <li><div>Стажировка в</br>реальных проектах</div></li>
                            <li><div><span>40</span> Contact</br>hours PDU</div></li>
                            <li><div><span>90 000 руб.</span></br>среднюю зарплату</div></li>
                        </ul>-->
                    </div>
                </div>
            </div><!--totals-->
			<?include('include/chisel.php');?>
            <div id="footer">
                <?if($course == "1_1"){?><h1>Стань сертифицированным</br>администратором проекта</h1><?}?>
				<?if($course == "1_2"){?><h1>Стань сертифицированным</br>планировщиком проекта</h1><?}?>
				<?if($course == "1_3"){?><h1>Стань сертифицированным</br>руководителем проекта</h1><?}?>
				<?if($course == "1_4"){?><h1>Станьте сертифицированным</br> руководителем проекта, подготовьтесь</br> к сдаче экзамена на степень PMP®</h1><?}?>
				<?if($course == "1_5"){?><h1>Стань эффективным</br> членом команды проекта</h1><?}?>
				
				<?if($course == "2_1"){?><h1>Станьте сертифицированным</br> экспертом-практиком в </br>управлении проектами</h1><?}?>
				<?if($course == "2_2"){?><h1>Станьте сертифицированным</br> руководителем проектного офиса</h1><?}?>
				
				<?if($course == "3_1"){?><h1>Управляйте строительными</br> проектами профессионально</h1><?}?>
				<?if($course == "3_2"){?><h1>Управляйте IT-проектами</br> профессионально</h1><?}?>
				<?if($course == "3_3"){?><h1>Стань сертифицированным</br> планировщиком строительных</br> проектов</h1><?}?>
				
				<?if($course == "4_1"){?><h1></h1><?}?>
				<?if($course == "4_2"){?><h1>Узнайте больше о </br>проектном управлении</h1><?}?>
				
                <!--<div class="banner">
                    <div class="banner-left">
                        <img src="/img/detail-curses/icon4.png" alt="Форма" />
                    </div>
                    <div class="banner-right">
                        <h3>Стоимость обучения</h3>
                        <a class="description-track" onclick = "scroller_down();"><img src="/img/detail-curses/button1.png" alt="Записаться на трек"  /></a>
                    </div>
                </div>-->

                <div class="form-block">
                    <div class="title-section white">Забронируйте место на курсе прямо сейчас</div>
                    <form class="feedback-form" action="javascript:void(0);">
                        <div class="form-group">
                            <input type="text" name="form_course" class="input-rectangle form-control form_course" placeholder="Курс"  required="" value="<?php echo $nameCourse; ?>" readonly />
                            <input type="text" name="form_name" class="input-rectangle form-control form_name" placeholder="Ф.И.О"  required="" />
                            <input type="phone" name="form_phone" class="input-rectangle form-control form_phone"  placeholder="+7" required="" />
                            <div class="tips">Мы пришлем SMS с напоминанием о курсе</div>
                            <input type="email" name="form_mail" class="input-rectangle form-control form_mail"  placeholder="E-mail" required="" />
                            <div class="tips">Мы пришлем письмо с подтверждением регистрации</div>
                            <input type="text" name="form_company" class="form-control form_company"  placeholder="Компания" />
                            <input type="text" name="form_position" class="input-rectangle form-control form_position" placeholder="Должность" />
                        </div>

                        <div class="desc">Нажимая кнопку Отправить заявку, Вы даете <a href="http://www.pmexpert.ru/popd/" style="color: #828282;" >согласие на обработку своих персональных данных</a>.</div>
                        <button class="btn-red submit-form" onclick="add_to_cart_pme()" style="margin-top: 40px;">Отправить заявку</button>
                    </form>
                </div><!--.form-block-->

                <div class="logo">
                    <img src="/img/type-curses/logo2.png" alt="PM Expert">
                </div>
            </div><!--#footer-->
        </div><!--all-->
    </body>
</html>