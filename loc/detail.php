<?php header("Content-Type: text/html;charset=windows-1251"); ?>

<?php
	$course = $_GET['course_id'];
	if(empty($course)){
		$course = "1_1";
	}

    $nameCourse = "";
    if($course == "1_1"){ $nameCourse = "������������� ������� PMEA�"; }
    if($course == "1_2"){ $nameCourse = "����������� ������� PMSE�"; }
    if($course == "1_3"){ $nameCourse = "������������ ������� PME�"; }
    if($course == "1_4"){ $nameCourse = "������������ ������� PME�. ���������� � PMP�."; }
    if($course == "1_5"){ $nameCourse = "�������� ������� �������"; }

    if($course == "2_1"){ $nameCourse = "������������-������� PMEP�"; }
    if($course == "2_2"){ $nameCourse = "������������ ���������� ����� PRIME�"; }

    if($course == "3_1"){ $nameCourse = "������������ ������� � ��������"; }
    if($course == "3_2"){ $nameCourse = "������������ ������� � IT"; }
	if($course == "3_3"){ $nameCourse = "����������� ������������ �������� PMSE�"; }

    if($course == "4_1"){ $nameCourse = "PM ��� �������������� �������������"; }
    if($course == "4_2"){ $nameCourse = "PM ��� ����������"; }
?>

<!DOCTYPE html>
<html>
    <head>
		<meta name="keywords" content="���������� ���������, ���������� ��������, �������� ���������� ���������, ���������� ��������� ��������
		����� �� ���������� ���������, ���������� ��������� �����, pmi, pmp, pme, ��������� ������� ����������
		��������, ���������, ���� �������, ������� ���������� ���������, ��������� ����, pmbok, pmbok-5
		project management, microsoft project, oracle primavera, primavera, ���������� ��������� ��������
		project management body of knowledge, ���������� pmp, ������������ pmp, ���������� pme
		������������ pme, ���������� ���������� ���������, ��������� ��������
		primavera ���������, ����� �� ���������� ��������� � ������, �����������
		������������ ��������, ���������� ��������� �������, ��������� �������, ������� �������
		���������� ��������� �������, ��������� ��������� ���������� ���������, ������������� �������
		�� ������, ����� ������� ������, agile, ����������� ������������, ����������-������� ������������
		����, ���� �������, ������� ���������� ���������
		��������� ����������, ��������� ���������� ����� ���������� ���������, ���������� �������
		����� ���������� ���������, ������ ���������� �������� ��������� � �������� ��������, ���������� ������������� ���������
		���������� IT ���������, microsoft office project ���������� �������, ����� �������, ����������� ���������� ���������
		�������� ���������� ���������, ����� ������� ��� ������ ����������, ��������� ���� �������
		���������� ������, ����������� ������� ���� �������, pmp certification, ������������� ��������� �����
		primavera ��������� ���������� ���������, ��������� �������� ��������� ������������ ���������� ���������, ������������� ��������� ����� �������
		��������� ������������ ���������� ���������, ���������� ������� ���������� ����������� �������, ������� �������
		���� ������ �� ���������� ���������, ��������� ������� �������� pmi, ��������� ����, ������������ ��������, ���������� ���������� ��������
		���������� ��������� ���, ���� ������� ���, ��������� ���� � ��� �������� �������
		���� ���������� ��������, ������� �������, ����������� ���������� ���������, ������������ �������
		���������� ��������� ������ ������������ ���������� �����, �������� ��������, ��������� ���� � ��� �������� �������
		��������������� ��������� �������, ���������� ����������������� ���������, ������������� ������� ���������� ���������
		��-������, ������������ ������, �������� �������, ������� ����, ���� �������, ��������� �������, �������� pmbok
		������-����������, ���������� ��������� �������, ����������� ������, ��������������� ������, ������������� �������
		�������-�����, ������� ����, ����� �������, ���������� ������� �������, ���������� �������, ������ �������, ����� �������,
		���������� �������� ���������� ��������� ���, ���, ����������-������� ������, �� �������, ������������ ������, �� �������, pm expert" />
		<meta name="description" content="�������� ���������� ��������� - �� ������� �� ������������ ���������� �����, ���������������� ������������, ������������� � ��������� ������������. ������� �������������� � ��������� ����������."> 
        <title>PM Expert - <?php echo $nameCourse; ?></title>
		<!--<title>PM Expert - �������� ���������� ��������� �� ������ ��������� �����</title>-->
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
                        �������� ���������� ���������</br>
                        �� ������ ��������� �����
                    </div>
                    <div class="menu">
                        <ul>
                            <li><img src="/img/detail-curses/icon-menu.png" onclick="$('.mobile-menu-area').addClass('show');$(this).addClass('click')" style="cursor:pointer;"/></li>
                        </ul>
                    </div>
                </div>
                <div class="header-bottom">
                    <div class="breadcrumbs">
                        <ul> <!-- ������� ������ -->
                            <li class="old"><a href="/index.php">�������</a></li>
							<!-- ����� ��������� ������-->
							<?if($course == "1_1"){?>
								<li class="old"><a href="/index.php?trecks=1">����� ��� ���������� ��������� ������</a></li>
								<li>������������� ������� PMEA�</li>
							<?}?>
							<?if($course == "1_2"){?>
								<li class="old"><a href="/index.php?trecks=1">����� ��� ���������� ��������� ������</a></li>
								<li>����������� ������� PMSE�</li>
							<?}?>
							<?if($course == "1_3"){?>
								<li class="old"><a href="/index.php?trecks=1">����� ��� ���������� ��������� ������</a></li>
								<li>������������ ������� PME�</li>
							<?}?>
							<?if($course == "1_4"){?>
								<li class="old"><a href="/index.php?trecks=1">����� ��� ���������� ��������� ������</a></li>
								<li>������������ ������� PME�. ���������� � PMP�</li>
							<?}?>
							<?if($course == "1_5"){?>
								<li class="old"><a href="/index.php?trecks=1">����� ��� ���������� ��������� ������</a></li>
								<li>�������� ������� �������</li>
							<?}?>
							
							<?if($course == "2_1"){?>
								<li class="old"><a href="/index.php?trecks=2">����� ��� ������� �������������</a></li>
								<li>������������-������� PMEP�</li>
							<?}?>
							<?if($course == "2_2"){?>
								<li class="old"><a href="/index.php?trecks=2">����� ��� ������� �������������</a></li>
								<li>������������ ���������� ����� PRIME�</li>
							<?}?>
							
							<?if($course == "3_1"){?>
								<li class="old"><a href="/index.php?trecks=3">���������� �����</a></li>
								<li>������������ ������� � ��������</li>
							<?}?>
							<?if($course == "3_2"){?>
								<li class="old"><a href="/index.php?trecks=3">���������� �����</a></li>
								<li>������������ ������� � IT</li>
							<?}?>
							<?if($course == "3_3"){?>
								<li class="old"><a href="/index.php?trecks=3">���������� �����</a></li>
								<li>����������� ������������ �������� PMSE�</li>
							<?}?>
							
							<?if($course == "4_1"){?>
								<li class="old"><a href="/index.php?trecks=4">Project management ��� ����</a></li>
								<li>PM ��� �������������� �������������</li>
							<?}?>
							<?if($course == "4_2"){?>
								<li class="old"><a href="/index.php?trecks=4">Project management ��� ����</a></li>
								<li>PM ��� ����������</li>
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
						    <?if($course == "1_1"){?><img src="/img/type-curses/main1.png" alt="������������� ������� PMEA�"><?}?>
                            <?if($course == "1_2"){?><img src="/img/type-curses/main2.png" alt="����������� ������� PMSE�"><?}?>
                            <?if($course == "1_3"){?><img src="/img/type-curses/main3.png" alt="������������ ������� PME�"><?}?>
                            <?if($course == "1_4"){?><img src="/img/type-curses/main4.png" alt="������������ ������� PME� ���������� � PMP�"><?}?>
                        	<?if($course == "1_5"){?><img src="/img/type-curses/main5.png" alt="�������� ������� �������"><?}?>
							
							<?if($course == "2_1"){?><img src="/img/type-curses/main6.png" alt="������������-������� PMEP�"><?}?>
							<?if($course == "2_2"){?><img src="/img/type-curses/main7.png" alt="������������ ���������� ����� PRIME�"><?}?>
							
							<?if($course == "3_1"){?><img src="/img/type-curses/main8.png" alt="������������ ������� � ��������"><?}?>
							<?if($course == "3_2"){?><img src="/img/type-curses/main9.png" alt="������������ ������� � IT"><?}?>
							<?if($course == "3_3"){?><img src="/img/type-curses/main12.png" alt="����������� ������������ �������� PMSE�"><?}?>
							
							<?if($course == "4_1"){?><img src="/img/type-curses/main10.png" alt="PM ��� �������������� �������������"><?}?>
							<?if($course == "4_2"){?><img src="/img/type-curses/main11.png" alt="PM ��� ����������"><?}?>
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
                <h1>���� �������� ����</h1>
				<? include('include/who_is_suitable.php');?>
				<br/><br/><br/>
				<?if($course == "1_2"){?><iframe width="852" height="405" src="https://www.youtube.com/embed/nw2ZW5xoyns" frameborder="0" allowfullscreen></iframe><?}?>
				<?if($course == "3_3"){?><iframe width="852" height="405" src="https://www.youtube.com/embed/HMCLADyBhyA" frameborder="0" allowfullscreen></iframe><?}?>
			</div><!--advantages-->
            <!--<div id="info">
                <div class="banner">
                    <span>��� ����������</br>����������</br>����������-��������</br>������������</br>� ��������?</span>
                </div>
            </div>--><!--info-->
            <div id="totals">
                <h1>����� ��������</h1>
                <div class="banner">
                    <div class="banner-left">
                        <img src="/img/detail-curses/icon3.png" alt="����������" />
                    </div>
                    <div class="banner-right">
                        <h3>������������� � ��������� ������������</h3>
                        <!--<ul>
                            <li><div>���������� �</br>�������� ��������</div></li>
                            <li><div><span>40</span> Contact</br>hours PDU</div></li>
                            <li><div><span>90 000 ���.</span></br>������� ��������</div></li>
                        </ul>-->
                    </div>
                </div>
            </div><!--totals-->
			<?include('include/chisel.php');?>
            <div id="footer">
                <?if($course == "1_1"){?><h1>����� �����������������</br>��������������� �������</h1><?}?>
				<?if($course == "1_2"){?><h1>����� �����������������</br>������������� �������</h1><?}?>
				<?if($course == "1_3"){?><h1>����� �����������������</br>������������� �������</h1><?}?>
				<?if($course == "1_4"){?><h1>������� �����������������</br> ������������� �������, �������������</br> � ����� �������� �� ������� PMP�</h1><?}?>
				<?if($course == "1_5"){?><h1>����� �����������</br> ������ ������� �������</h1><?}?>
				
				<?if($course == "2_1"){?><h1>������� �����������������</br> ���������-��������� � </br>���������� ���������</h1><?}?>
				<?if($course == "2_2"){?><h1>������� �����������������</br> ������������� ���������� �����</h1><?}?>
				
				<?if($course == "3_1"){?><h1>���������� �������������</br> ��������� ���������������</h1><?}?>
				<?if($course == "3_2"){?><h1>���������� IT-���������</br> ���������������</h1><?}?>
				<?if($course == "3_3"){?><h1>����� �����������������</br> ������������� ������������</br> ��������</h1><?}?>
				
				<?if($course == "4_1"){?><h1></h1><?}?>
				<?if($course == "4_2"){?><h1>������� ������ � </br>��������� ����������</h1><?}?>
				
                <!--<div class="banner">
                    <div class="banner-left">
                        <img src="/img/detail-curses/icon4.png" alt="�����" />
                    </div>
                    <div class="banner-right">
                        <h3>��������� ��������</h3>
                        <a class="description-track" onclick = "scroller_down();"><img src="/img/detail-curses/button1.png" alt="���������� �� ����"  /></a>
                    </div>
                </div>-->

                <div class="form-block">
                    <div class="title-section white">������������ ����� �� ����� ����� ������</div>
                    <form class="feedback-form" action="javascript:void(0);">
                        <div class="form-group">
                            <input type="text" name="form_course" class="input-rectangle form-control form_course" placeholder="����"  required="" value="<?php echo $nameCourse; ?>" readonly />
                            <input type="text" name="form_name" class="input-rectangle form-control form_name" placeholder="�.�.�"  required="" />
                            <input type="phone" name="form_phone" class="input-rectangle form-control form_phone"  placeholder="+7" required="" />
                            <div class="tips">�� ������� SMS � ������������ � �����</div>
                            <input type="email" name="form_mail" class="input-rectangle form-control form_mail"  placeholder="E-mail" required="" />
                            <div class="tips">�� ������� ������ � �������������� �����������</div>
                            <input type="text" name="form_company" class="form-control form_company"  placeholder="��������" />
                            <input type="text" name="form_position" class="input-rectangle form-control form_position" placeholder="���������" />
                        </div>

                        <div class="desc">������� ������ ��������� ������, �� ����� <a href="http://www.pmexpert.ru/popd/" style="color: #828282;" >�������� �� ��������� ����� ������������ ������</a>.</div>
                        <button class="btn-red submit-form" onclick="add_to_cart_pme()" style="margin-top: 40px;">��������� ������</button>
                    </form>
                </div><!--.form-block-->

                <div class="logo">
                    <img src="/img/type-curses/logo2.png" alt="PM Expert">
                </div>
            </div><!--#footer-->
        </div><!--all-->
    </body>
</html>