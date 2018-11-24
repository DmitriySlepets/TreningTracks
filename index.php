<?php header("Content-Type: text/html;charset=windows-1251"); ?>
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
        <title>PM Expert - �������� ���������� ��������� �� ������ ��������� �����</title>
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
						�������� ���������� ���������</br>
						�� ������ ��������� �����
					</div>
					<div class="menu">
						<ul>
							<li id = "head_1" class="active"><a onclick="set_head_text(1,2);" style = "cursor: pointer;">������� �����</a></li>
							<li id = "head_2"><a onclick="set_head_text(2,1);" style = "cursor: pointer;">������������� ��������</a></li>
							<li><img src="img/type-curses/icon-menu.png" onclick="$('.mobile-menu-area').addClass('show');$(this).addClass('click')" style="cursor:pointer;" /></li>
						</ul>
					</div>
				</div>
				<div class = "header-middle">
					<div class="caption" id = "head_text">������� �������������� � ���������� ���������.</br>�������-����� ��� ������ ������:</br>�� ������� �� ������������</br>���������� �����</div>
				</div>
				<div class="header-bottom">
					<div class="title-icons">�������� ���� ����</div>
                    <div class="icons"><a style="cursor:pointer;" onclick = "$('#popup_img').show();$('.overlay').show();"><img src="img/type-curses/icon1.png" /></a></div>
					<a id = "main_scroll" onclick = "scroller_down();" style = "display:none;"></a>
				</div>
                <? include('include/mobile_menu.php'); ?>
			</header>
			<div id="advantages">
				<h1>������������ ������</h1>
				<div class="container">
					<div>
						<img src="img/type-curses/advantages1.png" alt="����������������� �������-��������" />
						<div class="signature">�����������������</br>�������-��������</div>
					</div>
					<div>
						<img src="img/type-curses/advantages2.png" alt="���������� ����������� ������������������ ���������" />
						<div class="signature">����������</br>�����������</br>������������������</br>���������</div>
					</div>
					<div>
						<img src="img/type-curses/advantages3.png" alt="� ������ ������� ����� � ���� �������� ��������" />
						<div class="signature">� ������ �������</br>����� � ����</br>�������� ��������</div>
					</div>
					<div>
						<img src="img/type-curses/advantages4.png" alt="������������ �� ������ �����" />
						<div class="signature">������������</br>�� ������ �����</div>
					</div>
					<div>
						<img src="img/type-curses/advantages5.png" alt="�������� �� 20% �� ��������� ������" />
						<div class="signature">�������� �� 20%</br>�� ��������� ������</div>
					</div>
				</div>
			</div>
			<div id="main" class = "main_menu">
				<div class="menu">
					<ul>
						<li class="active" id = "menu_li_1"><a onclick = "trecks(1);" style = "cursor: pointer;">����������</br>��������� ������</a></li>
						<li id = "menu_li_2"><a onclick = "trecks(2);" style = "cursor: pointer;">�������</br>�������������</a></li>
						<li id = "menu_li_3"><a onclick = "trecks(3);" style = "cursor: pointer;">����������</br>�����</a></li>
						<li id = "menu_li_4"><a onclick = "trecks(4);" style = "cursor: pointer;">Project management</br>��� ����</a></li>
					</ul>
				</div>
			</div>	
			<!-- ������ ���� ������ -->
			<div id="main" class = "main_1">
			<!-- ���� 1 - 1 -->
				<div class="content" id = "1_1">
					<div class="content-top">
						<div class="content-top-left">
							<img src="img/type-curses/main1.png" alt="������������� ������� PMEA�" />
						</div>
						<div class="content-top-right">
							<h2>�������������</br>������� <span>PMEA�</span></h2></a>
							<span>������� ������� � ���������� ��������� � ���������</br>����������������� ��������</span>
							<a class="description-track" href="detail.php?course_id=1_1"><img src="img/type-curses/button1.png" alt="������ �������� �����" /></a>
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
								<div class="block-middle">������������ ������</br> ���������� ����������</br> ��������</div>
							</div>
							<div class="block">
								<div class="block-header"><span>02</span></div>
								<div class="block-middle">����������</br>MS Project Professional</br>� ���������� ���������</div>
								<div class="block-footer">������� ������</div>
							</div>
							<div class="block">
								<div class="block-header"><span>03</span></div>
								<div class="block-middle">����������</br>� ��� - �������������</div>
							</div>
							<div class="block green">
								<div class="block-header"><img src="img/type-curses/sert.png" alt="���������������� �������"/></div>
								<div class="block-middle">����������������</br>�������</br>�� �������</br>PMEA�</div>
							</div>
						</div>
					</div>
					<div class="content-bottom">
						<div class="time-price">
							<div>
								<img src="img/type-curses/icon2.png" />6 �������
							</div>
							<div>
								<img src="img/type-curses/icon2.png" />19 000 ���./22 500 ���.
							</div>
							<div>
								<img src="img/type-curses/icon3.png" />���� � �������������
							</div>
						</div>
					</div>
				</div>
				<!-- ���� 1 - 2 -->
				<div class="content" id = "1_2">
					<div class="content-top">
						<div class="content-top-left">
							<img src="img/type-curses/main2.png" alt="����������� ������� PMSE�" />
						</div>
						<div class="content-top-right">
							<h2>�����������</br>������� <span>PMSE�</span></h2>
							<span>������� ���� ���� ����������-��������</br>������������ � ��������</span>
							<a class="description-track" href="detail.php?course_id=1_2"><img src="img/type-curses/button1.png" alt="������ �������� �����" /></a>
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
								<div class="block-middle">������</br>������������</br>� �����������</br>��������</div>
							</div>
							<div class="block">
								<div class="block-header"><span>02</span></div>
								<div class="block-middle">����������</br>MS Project Professional</br>� ���������� ���������</div>
								<div class="block-footer">������� ������</div>
							</div>
							<div class="block">
								<div class="block-header"><span>03</span></div>
								<div class="block-middle">����������</br>MS Project Professional</br>� ���������� ���������</div>
								<div class="block-footer">����������� ������</div>
							</div>
							<div class="block">
								<div class="block-header"><span>04</span></div>
								<div class="block-middle">������ �������,</br>��������</br>� ���������</br>�������</br>� MS Project</div>
							</div>
							<div class="block">
								<div class="block-header"><span>05</span></div>
								<div class="block-middle">���������</br>������������</br>� ��������</br>� MS Project:</br>������, ����,</br>���������</div>
							</div>
							<div class="block green">
								<div class="block-header"><img src="img/type-curses/sert.png" alt="���������������� �������"/></div>
								<div class="block-middle">����������������</br>�������</br>�� �������</br>PMSE�</div>
							</div>
						</div>
					</div>
					<div class="content-bottom">
						<div class="time-price">
							<div>
								<img src="img/type-curses/icon2.png" />6 �������
							</div>
							<div>
								<img src="img/type-curses/icon2.png" />34 000 ���./38 250 ���.
							</div>
							<div>
								<img src="img/type-curses/icon3.png" />���� � �������������
							</div>
						</div>
					</div>
				</div>
				<!-- ���� 1 - 3 -->
				<div class="content" id = "1_3">
					<div class="content-top">
						<div class="content-top-left">
							<img src="img/type-curses/main3.png" alt="������������ ������� PME�" />
						</div>
						<div class="content-top-right">
							<h2>������������</br>������� <span>PME�</span></h2>
							<span>�������� ����������� ��������� ����������</br>��������� ������ ���������</span>
							<a class="description-track" href="detail.php?course_id=1_3"><img src="img/type-curses/button1.png" alt="������ �������� �����" /></a>
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
								<div class="block-middle">����������</br>��������� ��</br>������ ���������</br>PMI PMBOK�</br>Guide 6th Edition</br>(2017)</div>
								<div class="block-footer">������� ����</div>
							</div>
							<div class="block">
								<div class="block-header"><span>02</span></div>
								<div class="block-middle">����������</br>MS Project Professional</br>� ���������� ���������</div>
								<div class="block-footer">������� ������</div>
							</div>
							<div class="block">
								<div class="block-header"><span>03</span></div>
								<div class="block-middle">������� ����:</br>������ �������</br>�����!</div>
							</div>
							<div class="block green">
								<div class="block-header"><img src="img/type-curses/sert.png" alt="���������������� �������"/></div>
								<div class="block-middle">����������������</br>�������</br>�� �������</br>PME�</div>
							</div>
						</div>
					</div>
					<div class="content-bottom">
						<div class="time-price">
							<div>
								<img src="img/type-curses/icon2.png" />6 �������
							</div>
							<div>
								<img src="img/type-curses/icon2.png" />46 300 ���./52 600 ���.
							</div>
							<div>
								<img src="img/type-curses/icon3.png" />���� � �������������
							</div>
						</div>
					</div>
				</div>
				<!-- ���� 1 - 4 -->
				<div class="content" id = "1_4">
					<div class="content-top">
						<div class="content-top-left">
							<img src="img/type-curses/main4.png" alt="������������ ������� PME� ���������� � PMP�" />
						</div>
						<div class="content-top-right">
							<h2>������������ ������� <span class="grey">PME�</span></br>���������� � <span>PMP�</span></h2>
							<span>�������� ����������� ��������� ���������� ��������� ������</br>���������, ������������� � ����� �������� PMI PMP�</span>
							<a class="description-track" href="detail.php?course_id=1_4"><img src="img/type-curses/button1.png" alt="������ �������� �����" /></a>
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
								<div class="block-middle">������ </br>���������� ��������� </br>�� ���� ��������� PMI PMBOK�</br> Guide 6th Edition</br> (2017)</div>
								<div class="block-footer">������� ����</div>
							</div>
							<div class="block">
								<div class="block-header"><span>02</span></div>
								<div class="block-middle">����������</br>� ���������</br>�� ���������</br>�������� PMP�</br>� PME�</div>
								<div class="block-footer">������� ����</div>
							</div>
							<div class="block green">
								<div class="block-header"><img src="img/type-curses/sert.png" alt="���������������� �������"/></div>
								<div class="block-middle">����������������</br>�������</br>�� �������</br>PME�</div>
							</div>
						</div>
					</div>
					<div class="content-bottom">
						<div class="time-price">
							<div>
								<img src="img/type-curses/icon2.png" />6 �������
							</div>
							<div>
								<img src="img/type-curses/icon2.png" />57 300 ���./63 850 ���.
							</div>
							<div>
								<img src="img/type-curses/icon3.png" />���� � �������������
							</div>
						</div>
					</div>
				</div>
				<!-- ���� 1 - 5-->
				 <div class="content" id = "1_5">
					<div class="content-top">
						<div class="content-top-left">
							<img src="img/type-curses/main5.png" alt="�������� ������� �������" />
						</div>
						<div class="content-top-right">
							<h2>�������� �������</br>�������</h2>
							<span>�������� ������������� ����� ������</br>� ��������</span>
							<a class="description-track" href="detail.php?course_id=1_5"><img src="img/type-curses/button1.png" alt="������ �������� �����" /></a>
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
								<div class="block-middle">����-�����:</br>�������</br>������</br>���������</br>�������</div>
							</div>
							<div class="block">
								<div class="block-header"><span>02</span></div>
								<div class="block-middle">������� ����:</br>������ �������</br>�����!</div>
							</div>
						</div>
					</div>
					<div class="content-bottom">
						<div class="time-price">
							<div>
								<img src="img/type-curses/icon2.png" />6 �������
							</div>
							<div>
								<img src="img/type-curses/icon2.png" />28 450 ���./33 150 ���.
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- ������ ���� ������ -->
			<div id="main" class = "main_2">
			<!-- ���� 2 - 1 -->
				<div class="content ver2" id = "2_1">
					<div class="content-top">
						<div class="content-top-left">
							<img src="img/type-curses/main6.png" alt="������������-������� PMEP�" />
						</div>
						<div class="content-top-right">
							<h2>�������-�������</br><span>PMEP�</span></h2>
							<span>���������� ����� ����� ��������</span>
							<a class="description-track" href="detail.php?course_id=2_1"><img src="img/type-curses/button3.png" alt="������ �������� �����" /></a>
						</div>
					</div>
					<div class="arrows">
						<div class="left-arrow"><a onclick = "fade('2_1', '2_2');"><img src="img/type-curses/left.png" /></a></div>
						<div class="right-arrow"><a onclick = "fade('2_1', '2_2');"><img src="img/type-curses/right.png" /></a></div>
					</div>
					<div class="content-middle">
                        <div class="blocks">
                            <div class="block blue">
                                <div class="block-header" style="background-color: #71D5F4;"><img src="img/type-curses/sert.png" alt="���������������� �������"/></div>
                                <div class="block-middle">����������������</br>������� �� �������</br>PME�</div>
                            </div>
                            <div class="block">
                                <div class="block-header" style="background-color: #71D5F4;"><span>01</span></div>
                                <div class="block-middle">����������� ���������� ����������� ������� ��� ������������ ��������</div>
                            </div>
                            <div class="block">
                                <div class="block-header" style = "background-color: #71D5F4;"><span>02</span></div>
                                <div class="block-middle">������������ ����������� ���������� ��������� �������</div>
                            </div>
                            <div class="block">
                                <div class="block-header" style = "background-color: #71D5F4;"><span>03</span></div>
                                <div class="block-middle">������������ ����������� ���������� �������� �������</div>
                            </div>
                            <div class="block">
                                <div class="block-header" style = "background-color: #71D5F4;"><span>04</span></div>
                                <div class="block-middle">������������ ����������� ������������ �������������� � �������</div>
                            </div>
                        </div>
                        <div class="blocks">
                            <div class="block">
                                <div class="block-header" style = "background-color: #71D5F4;"><span>05</span></div>
                                <div class="block-middle">��������� ����������� ����������������� ��������� �������</div>
                            </div>
                            <div class="block">
                                <div class="block-header" style = "background-color: #71D5F4;"><span>06</span></div>
                                <div class="block-middle">������������ ������ ������������ ���������� ������� � ��������</div>
                            </div>
                            <div class="block">
                                <div class="block-header" style = "background-color: #71D5F4;"><span>07</span></div>
                                <div class="block-middle">������-����� �� �������� � ���������� ���������</div>
                            </div>
                            <div class="block blue">
                                <div class="block-header" style = "background-color: #71D5F4;"><img src="img/type-curses/sert.png" alt="���������������� �������"/></div>
                                <div class="block-middle">����������������</br>������� �� �������</br>PMEP�</div>
                            </div>
                        </div>
					</div>
					<div class="content-bottom">
						<div class="time-price">
							<div>
								<img src="img/type-curses/icon2.png" />1 ���
							</div>
							<div>
								<img src="img/type-curses/icon2.png" />96 850 ���./106 700 ���.
							</div>
							<div>
								<img src="img/type-curses/icon3.png" />���� � �������������
							</div>
						</div>
					</div>
				</div>
				<!-- ���� 2 - 2 -->
				<div class="content ver2" id = "2_2">
					<div class="content-top">
						<div class="content-top-left">
							<img src="img/type-curses/main7.png" alt="������������ ���������� ����� PRIME�" />
						</div>
						<div class="content-top-right">
							<h2>������������ ����������</br>����� <span>PRIME�</span></h2>
							<span>���������� ��������� ������������� ��������,</br>���������� ����������� � ���������� ��������</span>
							<a class="description-track" href="detail.php?course_id=2_2"><img src="img/type-curses/button3.png" alt="������ �������� �����" /></a>
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
                                <div class="block-middle">������������� ������� ���������� ���������: ��������������, ����������, ��������</div>
                            </div>
                            <div class="block">
                                <div class="block-header" style = "background-color: #71D5F4;"><span>02</span></div>
                                <div class="block-middle">��������� ����: ������� ��������, �������� �������</div>
                            </div>
                            <div class="block">
                                <div class="block-header" style = "background-color: #71D5F4;"><span>03</span></div>
                                <div class="block-middle">��������</br>�����������</br>����������</br>������������</br>���������</div>
                            </div>
                            <div class="block">
                                <div class="block-header" style = "background-color: #71D5F4;"><span>04</span></div>
                                <div class="block-middle">���������� ����������� ��������</div>
                            </div>
                        </div>
                        <div class="blocks">
                            <div class="block">
                                <div class="block-header" style = "background-color: #71D5F4;"><span>05</span></div>
                                <div class="block-middle">���������� ���������� ��������</div>
                            </div>
                            <div class="block">
                                <div class="block-header" style = "background-color: #71D5F4;"><span>06</span></div>
                                <div class="block-middle">������� ���� �������� ��������</div>
                            </div>
                            <div class="block blue">
                                <div class="block-header" style = "background-color: #71D5F4;"><img src="img/type-curses/sert.png" alt="���������������� �������"/></div>
                                <div class="block-middle">����������������</br>�������</br>�� �������</br>PRIME�</div>
                            </div>
                        </div>
					</div>
					<div class="content-bottom">
						<div class="time-price">
							<div>
								<img src="img/type-curses/icon2.png" />1 ���
							</div>
							<div>
								<img src="img/type-curses/icon2.png" />81 650 ���./89 350 ���.
							</div>
							<div>
								<img src="img/type-curses/icon3.png" />���� � �������������
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- ������ ���� ������ -->
			<div id="main" class = "main_3">
				<!-- ���� 3 - 3 -->
				<div class="content ver3" id = "3_3">
					<div class="content-top">
						<div class="content-top-left">
							<img src="img/type-curses/main12.png" alt="����������� ������������ �������� PMSE�" />
						</div>
						<div class="content-top-right">
							<h2>�����������</br>������������ �������� <span>PMSE</span></h2>
							<span>������� ���� ���� ����������-��������</br> ������������ � ������������ ��������</span>
							<a class="description-track" href="detail.php?course_id=3_3"><img src="img/type-curses/button4.png" alt="������ �������� �����" /></a>
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
								<div class="block-middle">������</br>������������</br>� �����������</br>��������</div>
							</div>
							<div class="block">
								<div class="block-header"><span>02</span></div>
								<div class="block-middle">����������</br>MS Project Professional</br>� ���������� ���������</div>
								<div class="block-footer">������� ������</div>
							</div>
							<div class="block">
								<div class="block-header"><span>03</span></div>
								<div class="block-middle">����������</br>MS Project Professional</br>� ���������� ���������</div>
								<div class="block-footer">����������� ������</div>
							</div>
							<div class="block">
								<div class="block-header"><span>04</span></div>
								<div class="block-middle">������ �������,</br>��������</br>� ���������</br>�������</br>� MS Project</div>
							</div>
							<div class="block">
								<div class="block-header"><span>05</span></div>
								<div class="block-middle">����������</br> Microsoft </br>Project</br> Professional �</br> ����������</br> �������������</br> ���������</div>
							</div>
							<div class="block" style = "background-color: #FFB800;">
								<div class="block-header"><img src="img/type-curses/sert.png" alt="���������������� �������"/></div>
								<div class="block-middle">����������������</br>�������</br>�� �������</br>PMSE�</div>
							</div>
						</div>
					</div>
					<div class="content-bottom">
						<div class="time-price">
							<div>
								<img src="img/type-curses/icon2.png" />6 �������
							</div>
							<div>
								<img src="img/type-curses/icon2.png" />34 000 ���./38 250 ���.
							</div>
							<div>
								<img src="img/type-curses/icon3.png" />���� � �������������
							</div>
						</div>
					</div>
				</div>
				<!-- ���� 3 - 1 -->
				<div class="content ver3" id = "3_1">
					<div class="content-top">
						<div class="content-top-left">
							<img src="img/type-curses/main8.png" alt="������������ ������������ ��������" />
						</div>
						<div class="content-top-right">
							<h2>������������ ������������ </br>��������</h2>
							<span>������� ��������� ����������</br>��������� � ��������</span>
							<a class="description-track" href="detail.php?course_id=3_1"><img src="img/type-curses/button4.png" alt="������ �������� �����" /></a>
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
                                <div class="block-middle">����������</br>���������</br>������������� ��</br>���������������� ��������</div>
                            </div>
                            <div class="block">
                                <div class="block-header" style = "background-color: #FFB800;"><span>02</span></div>
                                <div class="block-middle">����������</br>MS Project Professional</br>� ����������</br>���������</div>
                                <div class="block-footer">������� ������</div>
                            </div>
                            <div class="block">
                                <div class="block-header" style = "background-color: #FFB800;"><span>03</span></div>
                                <div class="block-middle">������ �������,</br>�������� � ���������</br>�������</br>� Microsoft Project</div>
                            </div>
                            <div class="block">
                                <div class="block-header" style = "background-color: #FFB800;"><span>04</span></div>
                                <div class="block-middle">������� ����:</br>������ �������</br>�����!</div>
                            </div>
                        </div>
					</div>
					<div class="content-bottom">
						<div class="time-price">
							<div>
								<img src="img/type-curses/icon2.png" />6 �������
							</div>
							<div>
								<img src="img/type-curses/icon2.png" />44 600 ���./51 000 ���.
							</div>
							<div>
								<img src="img/type-curses/icon3.png" />���� � �������������
							</div>
						</div>
					</div>
				</div>
				<!-- ���� 3 - 2 -->
				<div class="content ver3" id = "3_2">
					<div class="content-top">
						<div class="content-top-left">
							<img src="img/type-curses/main9.png" alt="������������ ������� � IT" />
						</div>
						<div class="content-top-right">
							<h2>������������</br>������� � IT</h2>
							<span>������� ��������� ����������</br>��������� � ��</span>
							<a class="description-track" href="detail.php?course_id=3_2"><img src="img/type-curses/button4.png" alt="������ �������� �����" /></a>
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
								<div class="block-middle">����������</br>IT-���������</div>
							</div>
							<div class="block">
								<div class="block-header"><span>02</span></div>
								<div class="block-middle">�����������</br>Scrum ���</br>����������</br>��������� ��</br>���������� ��</div>
							</div>
							<div class="block">
								<div class="block-header"><span>03</span></div>
								<div class="block-middle">����������� ��������� ������������ � ������ ��������</div>
							</div>
						</div>
					</div>
					<div class="content-bottom">
						<div class="time-price">
							<div>
								<img src="img/type-curses/icon2.png" />6 �������
							</div>
							<div>
								<img src="img/type-curses/icon2.png" />57 350 ���./65 900 ���.
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- ��������� ���� ������ -->
			<div id="main" class = "main_4">
				<!-- ���� 4 - 1 -->
				<div class="content ver4" id = "4_1">
					<div class="content-top">
						<div class="content-top-left">
							<img src="img/type-curses/main10.png" alt="PM ��� �������������� �������������" />
						</div>
						<div class="content-top-right">
							<h2>PM ��� ��������������</br>�������������</h2>
							<span>����������� ����������� �� ��� ����������</br>��������� ����������� ����� ��������</span>
							<a class="description-track" href="detail.php?course_id=4_1"><img src="img/type-curses/button5.png" alt="������ �������� �����" /></a>
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
								<div class="block-middle">��������</br>� ����������</br>���������</div>
							</div>
							<div class="block">
								<div class="block-header"><span>02</span></div>
								<div class="block-middle">������� ����: </br>������ ������� �����!</div>
								<!--<div class="block-footer">������� ����</div>-->
							</div>
						</div>
					</div>
					<div class="content-bottom">
						<div class="time-price">
							<div>
								<img src="img/type-curses/icon2.png" />6 �������
							</div>
							<div>
								<img src="img/type-curses/icon2.png" />19 300 ���./23 300 ���.
							</div>
							<div>
								<img src="img/type-curses/icon3.png" />���� � �������������
							</div>
						</div>
					</div>
				</div>
				<!-- ���� 4 - 2 -->
				<div class="content ver4" id = "4_2">
					<div class="content-top">
						<div class="content-top-left">
							<img src="img/type-curses/main11.png" alt="PM ��� ����������" />
						</div>
						<div class="content-top-right">
							<h2>PM ��� ��������������</h2>
							<span>����������� ����������� �� ��� ����������</br>��������� ����������� ��������</span>
							<a class="description-track" href="detail.php?course_id=4_2"><img src="img/type-curses/button5.png" alt="������ �������� �����" /></a>
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
								<div class="block-middle">����-�����:</br>������� ������</br>��������� �������</div>
							</div>
							<div class="block">
								<div class="block-header"><span>02</span></div>
								<div class="block-middle">������� ����:</br>��������</div>
								<!--<div class="block-footer">������� ����</div>-->
							</div>
						</div>
					</div>
					<div class="content-bottom">
						<div class="time-price">
							<div>
								<img src="img/type-curses/icon2.png" />6 �������
							</div>
							<div>
								<img src="img/type-curses/icon2.png" />28 450 ���./33 150 ���.
							</div>
						</div>
					</div>
				</div>
			</div>
			
			
			<!--������-->
			<div id="chisel" class = "ch_1">
				<div class="chisel-top">
					<img src="img/type-curses/baranov.png" alt="�������� �������" />
				</div>
				<div class="chisel-middle">
					<div class="caption">�������� �������, PMP, PME, MCTS</div>
					<span>�������� �������� ���������� ���������</span>
				</div>
				<div class="arrows">
					<div class="left-arrow"><a onclick = "fade_chisel('ch_1', 'ch_13');"><img src="img/type-curses/left.png" /></a></div>
					<div class="right-arrow"><a onclick = "fade_chisel('ch_1', 'ch_2');"><img src="img/type-curses/right.png" /></a></div>
				</div>
				<div class="chisel-bottom">
					<div class="caption">
						 �� ������� ���� ������� � �� � ���� ��������������, ����������� ��� ��������� ������. ��� ���� �������� ����� �������, ��� �� 2,5 ��� �� ��������� ����������� �������� ��� ���� �������������� ������ � ������. ���������� �� -������� ����������
					</div>
				</div>
			</div>
			<div id="chisel" class = "ch_2">
				<div class="chisel-top">
					<img src="img/type-curses/kochetov.png" alt="��������� �������" />
				</div>
				<div class="chisel-middle">
					<div class="caption">��������� �������, PMP, PME</div>
					<span>����������� ������������ ���������</span>
				</div>
				<div class="arrows">
					<div class="left-arrow"><a onclick = "fade_chisel('ch_2', 'ch_1');"><img src="img/type-curses/left.png" /></a></div>
					<div class="right-arrow"><a onclick = "fade_chisel('ch_2', 'ch_3');"><img src="img/type-curses/right.png" /></a></div>
				</div>
				<div class="chisel-bottom">
					<div class="caption">
						�������� �������� � ������������ ������, ��� ��������� �� ��������� (� ����� ������ ������������ �������) ������ �����, ����� � ����� ��� ���� � ������� � ������������� ����������� �����, ������ ���������� � �����������, ������������ ������ �� ���������� ������������, ����������� � �������������� ����������� ����������. ����� ������� �������� � ������� �������� �������������. ��� ������������ ������������ ��������, � ����������� �������� ���� �������������� ��� ����������� ��������� �������
					</div>
				</div>
			</div>
			<div id="chisel" class = "ch_3">
				<div class="chisel-top">
					<img src="img/type-curses/cheremisin.png" alt="����� ���������" />
				</div>
				<div class="chisel-middle">
					<div class="caption">����� ���������, PMSE, ���</div>
					<span>������������ ������ ������������ ��������</span>
				</div>
				<div class="arrows">
					<div class="left-arrow"><a onclick = "fade_chisel('ch_3', 'ch_2');"><img src="img/type-curses/left.png" /></a></div>
					<div class="right-arrow"><a onclick = "fade_chisel('ch_3', 'ch_4');"><img src="img/type-curses/right.png" /></a></div>
				</div>
				<div class="chisel-bottom">
					<div class="caption">
						�� ��� ����� 10 ��� ��������� ����������� ��������� � �� ��� ����� �� ���� �� ��������� � ���������� ������� ������������. � ������ ����� �� ������� �� ������ � ���, �� ����� ������ � ����������� ����������� ����� ��������, �� � ��������� ������ ����������� ��������������� ������� �� ������ ������ ������������� ����� � ���������
					</div>
				</div>
			</div>
			<div id="chisel" class = "ch_4">
				<div class="chisel-top">
					<img src="img/type-curses/homutinnikova.png" alt="������ �������������" />
				</div>
				<div class="chisel-middle">
					<div class="caption">������ �������������, PMP, PME, CPMA</div>
					<span>������-������, ���������</span>
				</div>
				<div class="arrows">
					<div class="left-arrow"><a onclick = "fade_chisel('ch_4', 'ch_3');"><img src="img/type-curses/left.png" /></a></div>
					<div class="right-arrow"><a onclick = "fade_chisel('ch_4', 'ch_5');"><img src="img/type-curses/right.png" /></a></div>
				</div>
				<div class="chisel-bottom">
					<div class="caption">
						���� ���������� ��������, ������ ������������ ��������� ��������� �� ���� � �� �� ������. ����� ����� ��������, ��������� ����������� � ��������������� � ���������� ����, ������ �����, ����� �������� �������� ��������� ���������� �������� 
					</div>
				</div>
			</div>
			<div id="chisel" class = "ch_5">
				<div class="chisel-top">
					<img src="img/type-curses/baranov.png" alt="�������� �������" />
				</div>
				<div class="chisel-middle">
					<div class="caption">�������� �������, PMP, PME, MCTS</div>
					<span>�������� �������� ���������� ���������</span>
				</div>
				<div class="arrows">
					<div class="left-arrow"><a onclick = "fade_chisel('ch_5', 'ch_4');"><img src="img/type-curses/left.png" /></a></div>
					<div class="right-arrow"><a onclick = "fade_chisel('ch_5', 'ch_6');"><img src="img/type-curses/right.png" /></a></div>
				</div>
				<div class="chisel-bottom">
					<div class="caption">
						������������� � ������������� �������������� ������� � ����� ������ ������ �������. ��� ���� ����� ������������� ������ ����������� �������� ��������� ����� ��� ���������� ����, ��� � ������������� ��������
					</div>
				</div>
			</div>
			<div id="chisel" class = "ch_6">
				<div class="chisel-top">
					<img src="img/type-curses/viktorova.png" alt="����� ���������" />
				</div>
				<div class="chisel-middle">
					<div class="caption">����� ���������</div>
					<span>�������� �� ������������</span>
				</div>
				<div class="arrows">
					<div class="left-arrow"><a onclick = "fade_chisel('ch_6', 'ch_5');"><img src="img/type-curses/left.png" /></a></div>
					<div class="right-arrow"><a onclick = "fade_chisel('ch_6', 'ch_7');"><img src="img/type-curses/right.png" /></a></div>
				</div>
				<div class="chisel-bottom">
					<div class="caption">
						���� �������� ���������� ������� �� ������ ������������ ��������� ����������� � ������� ���������� ���������. ������ �������� �������, ����� ���� �����������, ������ �������� ����������� ������� ������ � ������� � ��������� ����������. � ������� �� ������ ���� ������ �������
					</div>
				</div>
			</div>
			<div id="chisel" class = "ch_7">
				<div class="chisel-top">
					<img src="img/type-curses/kochetov.png" alt="��������� �������" />
				</div>
				<div class="chisel-middle">
					<div class="caption">��������� �������, PMP, PME</div>
					<span>����������� ������������ ���������</span>
				</div>
				<div class="arrows">
					<div class="left-arrow"><a onclick = "fade_chisel('ch_7', 'ch_6');"><img src="img/type-curses/left.png" /></a></div>
					<div class="right-arrow"><a onclick = "fade_chisel('ch_7', 'ch_8');"><img src="img/type-curses/right.png" /></a></div>
				</div>
				<div class="chisel-bottom">
					<div class="caption">
						����������� ��������� � ��� � ������ ������� ����������, ���������� �� ����������� �����. ������ �������� � ��������, ��������� �����������, ��� ������������ ���������� �� ���� ��������� ������ ��������. ���� ��������-������� �������� ��������������� ������ ������������� � ������ ����� ������������� ��������. ���� ����� ���������, ����� ���������������� � �� ��� ������ �������������
					</div>
				</div>
			</div>
			<div id="chisel" class = "ch_8">
				<div class="chisel-top">
					<img src="img/type-curses/homutinnikova.png" alt="������ �������������" />
				</div>
				<div class="chisel-middle">
					<div class="caption">������ �������������, PMP, PME, CPMA</div>
					<span>������-������, ���������</span>
				</div>
				<div class="arrows">
					<div class="left-arrow"><a onclick = "fade_chisel('ch_8', 'ch_7');"><img src="img/type-curses/left.png" /></a></div>
					<div class="right-arrow"><a onclick = "fade_chisel('ch_8', 'ch_9');"><img src="img/type-curses/right.png" /></a></div>
				</div>
				<div class="chisel-bottom">
					<div class="caption">
						����������� ��������� ������ - ������ ���������� ���������. ����������� ������������ �������� ��������� ���������� ���������� ����������, ��������� � ���������� ������������� ������� ���������� ���������, ������ ������������ �������� ���������� ����� � ��������. ������������ ������ ����� ��� � ����� ������� ����������� ������� ����� ���������, ������������ ��������� � ����������� ��� �������� ����������� �������������� ��������. ��������� ������ ���������� ��������� �������� - �������� ������ ������� ������������� ���������� �����, ��������� ����������� ������ ���������� ��������� �������������� �����
					</div>
				</div>
			</div>
			<div id="chisel" class = "ch_9">
				<div class="chisel-top">
					<img src="img/type-curses/cheremisin.png" alt="����� ���������" />
				</div>
				<div class="chisel-middle">
					<div class="caption">����� ���������, PMSE, ���</div>
					<span>������������ ������ ������������ ��������</span>
				</div>
				<div class="arrows">
					<div class="left-arrow"><a onclick = "fade_chisel('ch_9', 'ch_8');"><img src="img/type-curses/left.png" /></a></div>
					<div class="right-arrow"><a onclick = "fade_chisel('ch_9', 'ch_10');"><img src="img/type-curses/right.png" /></a></div>
				</div>
				<div class="chisel-bottom">
					<div class="caption">
						�� ��� ����� 10 ��� ��������� ����������� ��������� � �� ��� ����� �� ���� �� ��������� � ���������� ������� ������������. � ������ ����� �� ������� �� ������ � ���, �� ����� ������ � ����������� ����������� ����� ��������, �� � ��������� ������ ����������� ��������������� ������� �� ������ ������ ������������� ����� � ���������
					</div>
				</div>
			</div>
			<div id="chisel" class = "ch_10">
				<div class="chisel-top">
					<img src="img/type-curses/smirnov.png" alt="���� �������" />
				</div>
				<div class="chisel-middle">
					<div class="caption">���� �������, PMP</div>
					<span>�������� �������� ���������� ���������</span>
				</div>
				<div class="arrows">
					<div class="left-arrow"><a onclick = "fade_chisel('ch_10', 'ch_9');"><img src="img/type-curses/left.png" /></a></div>
					<div class="right-arrow"><a onclick = "fade_chisel('ch_10', 'ch_11');"><img src="img/type-curses/right.png" /></a></div>
				</div>
				<div class="chisel-bottom">
					<div class="caption">
						�� ������������ �������� ������ ����� �������������� ����������� ���� � ��������������� �������, �������� ��������� ����������� �� ��������� ������ �� ����������-������� ������. ����������������� ������������ ������� ������ ����� � ������������ ��� ����������� MS Project � ����� ��������� ������������
					</div>
				</div>
			</div>
			<div id="chisel" class = "ch_11">
				<div class="chisel-top">
					<img src="img/type-curses/lavrentiev.png" alt="����� ����������" />
				</div>
				<div class="chisel-middle">
					<div class="caption">����� ����������, PME</div>
					<span>�������� �������� ���������� ���������</span>
				</div>
				<div class="arrows">
					<div class="left-arrow"><a onclick = "fade_chisel('ch_11', 'ch_10');"><img src="img/type-curses/left.png" /></a></div>
					<div class="right-arrow"><a onclick = "fade_chisel('ch_11', 'ch_12');"><img src="img/type-curses/right.png" /></a></div>
				</div>
				<div class="chisel-bottom">
					<div class="caption">
						��� ������ �����, ������ � ����� IT �������� ����� ������������ ��������, ��� ������� ������������ �������, ��������� ���������� � ������ ���������� �������, ������ ����� ������� ������������� � �������. � ���������� ������� ������ �������. �� ��������, ��� �������� �������� ������, � ������ ���������� ������ ��������
					</div>
				</div>
			</div>
			<div id="chisel" class = "ch_12">
				<div class="chisel-top">
					<img src="img/type-curses/smirnov.png" alt="���� �������" />
				</div>
				<div class="chisel-middle">
					<div class="caption">���� �������, PMP</div>
					<span>�������� �������� ���������� ���������</span>
				</div>
				<div class="arrows">
					<div class="left-arrow"><a onclick = "fade_chisel('ch_12', 'ch_11');"><img src="img/type-curses/left.png" /></a></div>
					<div class="right-arrow"><a onclick = "fade_chisel('ch_12', 'ch_13');"><img src="img/type-curses/right.png" /></a></div>
				</div>
				<div class="chisel-bottom">
					<div class="caption">
						������ ������� �������� ������� �� ������ �� ��������� �������, �� � �� ������������� ����������� � ��� ��������� ������������ � ������� ���������
					</div>
				</div>
			</div>
			<div id="chisel" class = "ch_13">
				<div class="chisel-top">
					<img src="img/type-curses/chemisova.png" alt="��������� ��������" />
				</div>
				<div class="chisel-middle">
					<div class="caption">��������� ��������</div>
					<span>�������� �� ��������</span>
				</div>
				<div class="arrows">
					<div class="left-arrow"><a onclick = "fade_chisel('ch_13', 'ch_12');"><img src="img/type-curses/left.png" /></a></div>
					<div class="right-arrow"><a onclick = "fade_chisel('ch_13', 'ch_1');"><img src="img/type-curses/right.png" /></a></div>
				</div>
				<div class="chisel-bottom">
					<div class="caption">
						 ��� ����������� ������, ���������� ������� ��� ������������� �����������? �������� ��������� � ����������� ���� ���������� ����������� ��� ����� ���������� �������� � ��������� ������ � ����������� �������, ������������ ������, ����������� �����, ������� ��������� ���� � ��������� ��. ���� ���� ����������� ����������� � ��������� ��������� �������, ��� � ������� ������� �� �������� ������ � ������, ����������� ��� ��������� ���������� ��������
					</div>
				</div>
			</div>
			
			
			<div id="preparation">
				<div class="info">
					�� �����������<h2>3 000</h2>�����������������</br>������������ � �������</br>���������� ���������
				</div>
			</div>
			<div id="trainers">
				<h1>���� ������ �������</h1>
				<div class="container">
					<div>
                        <img onclick="openDescription($(this));" src="img/type-curses/trainers1.png" alt="����� ���������" />
						<h3>����� ���������</h3>
						<div class="signature">PMP�, PME�, PMSE�</div>
                        <div class="description">������-������ � ������� ������������ ������ � ������� ���������� ���������, ������� � ����� ����������-�������� ������������ � ����������� ��������. ������� ���������� ������� ��� �������� ����������, ��������, �����������, ����-�л, �����������, �������� ������ �������� ���λ, ������������, REPSOL, �������, ������ ���ʻ, ��������������� ������� �������� ���� � ��. �������� ������������� ������ ������������ �������� PM EXPERT, � ����� ������� ���������� ��������� ������. �������� ������������ �������� � ������� ������������ �������������, ������ ���������� ���������������� ������������, ���������� �������� ������������ � �������� ���������� ��������. ������� MS Project � �racle Primavera �� ���������� ������. �������� ������� ���������� ������.</div>
					</div>
					<div>
                        <img onclick="openDescription($(this));" src="img/type-curses/trainers2.png" alt="������ �������������" />
						<h3>������ �������������</h3>
						<div class="signature">PMP�, PME�, CPMA�</div>
                        <div class="description">������������ ������-������ � ����������� ���������, ������ � ������� ����������� PM EXPERT. ���������� ����������� ��������� � 2004 ����, �������� �������� �������� � ������� ������ ��������� ��������� � ����������� ���������� ����������. �������� �������� ��������� ������. ���������� � ��������� ������� � �������� ��� ����������� �����-2014�, �������� TOYOTA, ����-�л, ����ʻ, �������� �������� �����, ���� ������ � ��. �������� ������� ��������� ������, ����������, �������� � ������ ������� ����������� �� �������� ���������� ���������. ���� ����������������� ������������ � ������ ����� ��������� � ������ ����� ���������� ���������. ������� ���������� � �������� �������.</div>
					</div>
					<div>
                        <img onclick="openDescription($(this));" src="img/type-curses/trainers3.png" alt="���� �����" />
						<h3>������ �������</h3>
						<div class="signature">PMP�, PME�, ���-3, ���� PMI�</div>
                        <div class="description">������� ������-������, ����� ��������� �������� � ������� ������, ����������� �� ���������� ���������. ����� 25 ��� � ���������, ������� � ������� ����������� ���������� ����������, ������-�������, ��������������, ������� ������ ������� �� project-����������� ��� ��������������� � ������������� ��������. ������� ���������� ������������� � �������� ���������� ����������, � ��� ����� ��������������� � �� ������ ����������, ���������� ������������ ����������� �������, ����������������� ���������, ��������������, �������������� ��������� ������������ �����������, ����������� ������������� ����������, ������� �����������, ������ ������������. ���������� ������� � ��������� ��������� ��� ��� ����������� �������, ������������� ������������ �������, ���, �������������, �������, ������������ �������� �����, ���������� ���, �������� ����� ������ ����-�л, ����������, ��������������, ����-24�, ��������, Volkswagen, Yokohama, �������, ��������, �����, �����������, �����������, ��������, ������-���, ���������, ����ʻ � ��.</div>
					</div>
				</div>
				<div class="buttons">
					<a href="http://www.pmexpert.ru/services/training/trainers/"><img src="img/type-curses/button2.png" alt="��� ������� /"></a>
				</div>
				<div class="slogan">�������� ����������</br>��������� �� ������ ���������</br>�����</div>
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
