<?php header("Content-Type: text/html;charset=windows-1251"); ?>
<!DOCTYPE html>
<html>
    <head>
        <title>PM Expert - �������� ���������� ��������� �� ������ ��������� �����</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="format-detection" content="telephone=no">
        <meta http-equiv="Cache-Control" content="no-cache">
        <?php //require($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/prolog_before.php"); ?>
        <link rel="stylesheet" href="css/style.css" />
		
		<!-- ���������� ������ �������� -->
		<!-- ������� ����� -->
		<link rel="stylesheet" href="OwlCarousel/OwlCarousel2-develop/dist/assets/owl.carousel.min.css">
		<!-- ���� �� ��������� -->
		<link rel="stylesheet" href="OwlCarousel/OwlCarousel2-develop/dist/assets/owl.theme.default.min.css">
		<!-- JQuery --> 
		<script src="js/jquery.min.js"></script>
		<!-- ��� ������ JS -->
		<script src="OwlCarousel/OwlCarousel2-develop/dist/owl.carousel.min.js"></script>
		
		<script type = "text/javascript">
			function set_head_text(first, second){
				var classname = document.getElementById("head_" + String(first)).className;
				if(classname == "active"){return;}
				document.getElementById("head_" + String(first)).className = "active";
				document.getElementById("head_" + String(second)).className = "";
				if(first == 1){//������� ������
					document.getElementById("head_text").innerHTML = "�������-���� �������� ����</br>������ ������� ���������</br>� ����� ���������� ���������";
				}else{//������������� ������
					document.getElementById("head_text").innerHTML = "����������� �������-�����</br>��� �������� ��������</br>����������� � ����� ����������</br>���������";
				}	
			}
			function trecks(number){
				//������ ���� ������
				document.getElementsByClassName("main_1")[0].style.display = "none"; document.getElementsByClassName("main_2")[0].style.display = "none";
				document.getElementsByClassName("main_3")[0].style.display = "none"; document.getElementsByClassName("main_4")[0].style.display = "none";
				document.getElementsByClassName("main_" + String(number))[0].style.display = "block";
				//������ ����� ������
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
                    �������� ���������� ���������</br>
                    �� ������ ��������� �����
                </div>
                <div class="menu">
                    <ul>
                        <li id = "head_1" class="active"><a onclick="set_head_text(1,2);" style = "cursor: pointer;">������� �����</a></li>
                        <li id = "head_2"><a onclick="set_head_text(2,1);" style = "cursor: pointer;">������������� ��������</a></li>
                        <li><img src="/img/type-curses/icon-menu.png" /></li>
                    </ul>
                </div>
            </div>
            <div class = "header-middle">
                <div class="caption" id = "head_text">�������-���� �������� ����</br>������ ������� ���������</br>
                    � ����� ���������� ���������</div>
            </div>
            <div class="header-bottom">
                <div class="title-icons">�������� ���� ����</div>
                <div class="icons"><a href = "#main"><img src="/img/type-curses/icon1.png" /></a></div>
            </div>

        </header>
        <div id="advantages">
            <h1>������������ ������</h1>
            <div class="container">
                <div>
                    <img src="/img/type-curses/advantages1.png" alt="����������������� �������-��������" />
                    <div class="signature">�����������������</br>�������-��������</div>
                </div>
                <div>
                    <img src="/img/type-curses/advantages2.png" alt="���������� ����������� ������������������ ���������" />
                    <div class="signature">����������</br>�����������</br>������������������</br>���������</div>
                </div>
                <div>
                    <img src="/img/type-curses/advantages3.png" alt="� ������ ������� ����� � ���� �������� ��������" />
                    <div class="signature">� ������ �������</br>����� � ����</br>�������� ��������</div>
                </div>
                <div>
                    <img src="/img/type-curses/advantages4.png" alt="������������ �� ������ �����" />
                    <div class="signature">������������</br>�� ������ �����</div>
                </div>
                <div>
                    <img src="/img/type-curses/advantages5.png" alt="�������� �� 20% �� ��������� ������" />
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
                        <img src="/img/type-curses/main1.png" alt="������������� ������� PMEA�" />
                    </div>
                    <div class="content-top-right">
                        <h2>�������������</br>������� <span>PMEA�</span></h2>
                        <span>������� ������� � ���������� ��������� � ���������</br>����������������� ��������</span>
                        <a class="description-track" href="#"><img src="/img/type-curses/button1.png" alt="������ �������� �����" /></a>
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
                            <div class="block-middle">��������</br>� ����������</br>���������</div>
                        </div>
                        <div class="block">
                            <div class="block-header"><span>02</span></div>
                            <div class="block-middle">����������</br>MS Project Professional</br>� ���������� ���������</div>
                            <div class="block-footer">������� ������</div>
                        </div>
                        <div class="block">
                            <div class="block-header"><span>03</span></div>
                            <div class="block-middle">����������</br>� ���</div>
                        </div>
                        <div class="block green">
                            <div class="block-header"><img src="/img/type-curses/sert.png" alt="���������������� �������"/></div>
                            <div class="block-middle">����������������</br>�������</br>�� �������</br>PMEA�</div>
                        </div>
                    </div>
                </div>
                <div class="content-bottom">
                    <div class="time-price">
                        <div>
                            <img src="/img/type-curses/icon2.png" />15 �����
                        </div>
                        <div>
                            <img src="/img/type-curses/icon2.png" />14 500 ���.
                        </div>
                        <div>
                            <img src="/img/type-curses/icon3.png" />���� � �������������
                        </div>
                    </div>
                </div>
            </div>
			<!-- ���� 1 - 2 -->
			<div class="content" id = "1_2">
                <div class="content-top">
                    <div class="content-top-left">
                        <img src="/img/type-curses/main2.png" alt="����������� ������� PMSE�" />
                    </div>
                    <div class="content-top-right">
                        <h2>�����������</br>������� <span>PMSE�</span></h2>
                        <span>������� ���� ���� ����������-��������</br>������������ � ��������</span>
                        <a class="description-track" href="#"><img src="/img/type-curses/button1.png" alt="������ �������� �����" /></a>
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
                            <div class="block-header"><img src="/img/type-curses/sert.png" alt="���������������� �������"/></div>
                            <div class="block-middle">����������������</br>�������</br>�� �������</br>PMSE�</div>
                        </div>
                    </div>
                </div>
                <div class="content-bottom">
                    <div class="time-price">
                        <div>
                            <img src="/img/type-curses/icon2.png" />15 �����
                        </div>
                        <div>
                            <img src="/img/type-curses/icon2.png" />14 500 ���.
                        </div>
                        <div>
                            <img src="/img/type-curses/icon3.png" />���� � �������������
                        </div>
                    </div>
                </div>
            </div>
			<!-- ���� 1 - 3 -->
			<div class="content" id = "1_3">
                <div class="content-top">
                    <div class="content-top-left">
                        <img src="/img/type-curses/main3.png" alt="������������ ������� PME�" />
                    </div>
                    <div class="content-top-right">
                        <h2>������������</br>������� <span>PME�</span></h2>
                        <span>�������� ����������� ��������� ����������</br>��������� ������ ���������</span>
                        <a class="description-track" href="#"><img src="/img/type-curses/button1.png" alt="������ �������� �����" /></a>
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
                            <div class="block-header"><img src="/img/type-curses/sert.png" alt="���������������� �������"/></div>
                            <div class="block-middle">����������������</br>�������</br>�� �������</br>PME�</div>
                        </div>
                    </div>
                </div>
                <div class="content-bottom">
                    <div class="time-price">
                        <div>
                            <img src="/img/type-curses/icon2.png" />15 �����
                        </div>
                        <div>
                            <img src="/img/type-curses/icon2.png" />14 500 ���.
                        </div>
                        <div>
                            <img src="/img/type-curses/icon3.png" />���� � �������������
                        </div>
                    </div>
                </div>
            </div>
			<!-- ���� 1 - 4 -->
			<div class="content" id = "1_4">
                <div class="content-top">
                    <div class="content-top-left">
                        <img src="/img/type-curses/main4.png" alt="������������ ������� PME� ���������� � PMP�" />
                    </div>
                    <div class="content-top-right">
                        <h2>������������ ������� <span class="grey">PME�</span></br>���������� � <span>PMP�</span></h2>
                        <span>�������� ����������� ��������� ���������� ��������� ������</br>���������, ������������� � ����� �������� PMI PMP�</span>
                        <a class="description-track" href="#"><img src="/img/type-curses/button1.png" alt="������ �������� �����" /></a>
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
                            <div class="block-middle">����������</br>��������� ��</br>������ ���������</br>PMI PMBOK�</br>Guide 6th Edition</br>(2017)</div>
                            <div class="block-footer">������� ����</div>
                        </div>
                        <div class="block">
                            <div class="block-header"><span>02</span></div>
                            <div class="block-middle">����������</br>� ���������</br>�� ���������</br>�������� PMP�</br>� PME�</div>
                            <div class="block-footer">������� ����</div>
                        </div>
                        <div class="block green">
                            <div class="block-header"><img src="/img/type-curses/sert.png" alt="���������������� �������"/></div>
                            <div class="block-middle">����������������</br>�������</br>�� �������</br>PME�</div>
                        </div>
                    </div>
                </div>
                <div class="content-bottom">
                    <div class="time-price">
                        <div>
                            <img src="/img/type-curses/icon2.png" />15 �����
                        </div>
                        <div>
                            <img src="/img/type-curses/icon2.png" />14 500 ���.
                        </div>
                        <div>
                            <img src="/img/type-curses/icon3.png" />���� � �������������
                        </div>
                    </div>
                </div>
            </div>
			<!-- ���� 1 - 5-->
			 <div class="content" id = "1_5">
                <div class="content-top">
                    <div class="content-top-left">
                        <img src="/img/type-curses/main5.png" alt="�������� ������� �������" />
                    </div>
                    <div class="content-top-right">
                        <h2>�������� �������</br>�������</h2>
                        <span>�������� ������������� ����� ������</br>� ��������</span>
                        <a class="description-track" href="#"><img src="/img/type-curses/button1.png" alt="������ �������� �����" /></a>
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
                            <img src="/img/type-curses/icon2.png" />15 �����
                        </div>
                        <div>
                            <img src="/img/type-curses/icon2.png" />14 500 ���.
                        </div>
                        <div>
                            <img src="/img/type-curses/icon3.png" />���� � �������������
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
						<img src="/img/type-curses/main6.png" alt="������������-������� PMEP�" />
					</div>
					<div class="content-top-right">
						<h2>������������-�������</br><span>PMEP�</span></h2>
						<span>���������� ����� ����� ��������</span>
						<a class="description-track" href="#"><img src="/img/type-curses/button3.png" alt="������ �������� �����" /></a>
					</div>
				</div>
				<div class="arrows">
					<div class="left-arrow"><a onclick = "fade('2_1', '2_2');"><img src="/img/type-curses/left.png" /></a></div>
					<div class="right-arrow"><a onclick = "fade('2_1', '2_2');"><img src="/img/type-curses/right.png" /></a></div>
				</div>
				<div class="content-middle">
					<div class="blocks">
						<div class="block blue">
							<div class="block-header"><img src="/img/type-curses/sert.png" alt="���������������� �������"/></div>
							<div class="block-middle">����������������</br>�������</br>�� �������</br>PME�</div>
						</div>
						<div class="block">
							<div class="block-header"><span>01</span></div>
							<div class="block-middle">�����������</br>� �����������</br>������ ���</br>� ��������</br>����������</br>�������</div>
						</div>
						<div class="block">
							<div class="block-header"><span>02</span></div>
							<div class="block-middle">������������</br>������</br>������������</br>����������</br>����������</div>
						</div>
						<div class="block">
							<div class="block-header"><span>03</span></div>
							<div class="block-middle">����������</br>����������</br>�������</div>
						</div>
						<div class="block">
							<div class="block-header"><span>04</span></div>
							<div class="block-middle">������������</br>� �������</div>
						</div>
						<div class="block">
							<div class="block-header"><span>05</span></div>
							<div class="block-middle">����������</br>��������������</br>��� ���������</br>�������</div>
							<div class="block-footer">���������</div>
						</div>
					</div>
					<div class="blocks">
						<div class="block">
							<div class="block-header"><span>06</span></div>
							<div class="block-middle">������������</br>������</br>����������</br>�������</div>
						</div>
						<div class="block">
							<div class="block-header"><span>07</span></div>
							<div class="block-middle">������ �������,</br>��������</br>� ���������</br>�������</br>� MS Project</div>
						</div>
						<div class="block">
							<div class="block-header"><span>08</span></div>
							<div class="block-middle">���������</br>������������</br>� ��������:</br>������, ����,</br>���������</br>� MS Project</div>
						</div>
						<div class="block">
							<div class="block-header"><span>09</span></div>
							<div class="block-middle">��� ��������</br>��������</br>� �������</div>
							<div class="block-footer">������-�����</br>��������</div>
							<div class="block-photo"><img src="/img/type-curses/photo1.png" alt="������-����� ��������" /></div>
						</div>
						<div class="block blue">
							<div class="block-header"><img src="/img/type-curses/sert.png" alt="���������������� �������"/></div>
							<div class="block-middle">����������������</br>�������</br>�� �������</br>PMEA�</div>
						</div>
					</div>
				</div>
				<div class="content-bottom">
					<div class="time-price">
						<div>
							<img src="/img/type-curses/icon2.png" />15 �����
						</div>
						<div>
							<img src="/img/type-curses/icon2.png" />14 500 ���.
						</div>
						<div>
							<img src="/img/type-curses/icon3.png" />���� � �������������
						</div>
					</div>
				</div>
			</div>
			<!-- ���� 2 - 2 -->
			<div class="content ver2" id = "2_2">
				<div class="content-top">
					<div class="content-top-left">
						<img src="/img/type-curses/main7.png" alt="������������ ���������� ����� PRIME�" />
					</div>
					<div class="content-top-right">
						<h2>������������ ����������</br>����� <span>PRIME�</span></h2>
						<span>���������� ��������� ������������� ��������,</br>���������� ����������� � ���������� ��������</span>
						<a class="description-track" href="#"><img src="/img/type-curses/button3.png" alt="������ �������� �����" /></a>
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
								<div>��������������� ����</div>
							</div>
							<div class="block-left">
								<div class="block-middle">����������</br>�����������</br>� ����������</br>��������</div>
								<div class="block-footer">������-�����</br>������</div>
								<div class="block-photo"><img src="/img/type-curses/photo1.png" alt="������-����� ��������" /></div>
							</div>
							<div class="block-right">
								<div class="block-middle">������� ����:</br>�������� ��������</div>
							</div>
						</div>
						<div class="block">
							<div class="block-header"><span>02</span></div>
							<div class="block-middle">��������</br>�����������</br>����������</br>������������</br>���������</div>
						</div>
						<div class="block">
							<div class="block-header"><span>03</span></div>
							<div class="block-middle">�������������</br>�������</br>����������</br>���������:</br>��������������,</br>����������,</br>��������</div>
						</div>
						<div class="block">
							<div class="block-header"><span>04</span></div>
							<div class="block-middle">��������� ����:</br>������� ��������,</br>��������</br>�������</div>
						</div>
						<div class="block blue">
							<div class="block-header"><img src="/img/type-curses/sert.png" alt="���������������� �������"/></div>
							<div class="block-middle">����������������</br>�������</br>�� �������</br>PMEA�</div>
						</div>
					</div>
				</div>
				<div class="content-bottom">
					<div class="time-price">
						<div>
							<img src="/img/type-curses/icon2.png" />15 �����
						</div>
						<div>
							<img src="/img/type-curses/icon2.png" />14 500 ���.
						</div>
						<div>
							<img src="/img/type-curses/icon3.png" />���� � �������������
						</div>
					</div>
				</div>
			</div>
        </div>
		<!-- ������ ���� ������ -->
		<div id="main" class = "main_3">
			<!-- ���� 3 - 1 -->
			<div class="content ver3" id = "3_1">
				<div class="content-top">
					<div class="content-top-left">
						<img src="/img/type-curses/main9.png" alt="������������ ������� � ��������" />
					</div>
					<div class="content-top-right">
						<h2>������������ �������</br>� ��������</h2>
						<span>������� ��������� ����������</br>��������� � ��������</span>
						<a class="description-track" href="#"><img src="/img/type-curses/button4.png" alt="������ �������� �����" /></a>
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
							<div class="block-middle">����������</br>�������������</br>���������</div>
						</div>
						<div class="block">
							<div class="block-header"><span>02</span></div>
							<div class="block-middle">������������</br>� ����������</br>������������</br>��������</br>� ��������������</br>MS Project</div>
						</div>
						<div class="block">
							<div class="block-header"><span>03</span></div>
							<div class="block-middle">������� ����:</br>������ �������</br>�����!</div>
						</div>
					</div>
				</div>
				<div class="content-bottom">
					<div class="time-price">
						<div>
							<img src="/img/type-curses/icon2.png" />15 �����
						</div>
						<div>
							<img src="/img/type-curses/icon2.png" />14 500 ���.
						</div>
						<div>
							<img src="/img/type-curses/icon3.png" />���� � �������������
						</div>
					</div>
				</div>
			</div>
			<!-- ���� 3 - 2 -->
			<div class="content ver3" id = "3_2">
				<div class="content-top">
					<div class="content-top-left">
						<img src="/img/type-curses/main8.png" alt="������������ ������� � IT" />
					</div>
					<div class="content-top-right">
						<h2>������������</br>������� � IT</h2>
						<span>������� ��������� ����������</br>��������� � ��</span>
						<a class="description-track" href="#"><img src="/img/type-curses/button4.png" alt="������ �������� �����" /></a>
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
							<div class="block-middle">����������</br>IT-���������</div>
						</div>
						<div class="block">
							<div class="block-header"><span>02</span></div>
							<div class="block-middle">�����������</br>Scrum ���</br>����������</br>��������� ��</br>���������� ��</div>
						</div>
						<div class="block">
							<div class="block-header"><span>03</span></div>
							<div class="block-middle">����������</br>����������</br>�������</div>
						</div>
					</div>
				</div>
				<div class="content-bottom">
					<div class="time-price">
						<div>
							<img src="/img/type-curses/icon2.png" />15 �����
						</div>
						<div>
							<img src="/img/type-curses/icon2.png" />14 500 ���.
						</div>
						<div>
							<img src="/img/type-curses/icon3.png" />���� � �������������
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
						<img src="/img/type-curses/main10.png" alt="PM ��� �������������� �������������" />
					</div>
					<div class="content-top-right">
						<h2>PM ��� ��������������</br>�������������</h2>
						<span>����������� ����������� �� ��� ����������</br>��������� ����������� ����� ��������</span>
						<a class="description-track" href="#"><img src="/img/type-curses/button5.png" alt="������ �������� �����" /></a>
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
							<div class="block-middle">����������</br>���������:</br>Agile vs</br>��������</div>
						</div>
						<div class="block">
							<div class="block-header"><span>02</span></div>
							<div class="block-middle">������ ��</br>��������.</br>����������</br>�������������</br>��������</div>
							<div class="block-footer">������� ����</div>
						</div>
					</div>
				</div>
				<div class="content-bottom">
					<div class="time-price">
						<div>
							<img src="/img/type-curses/icon2.png" />15 �����
						</div>
						<div>
							<img src="/img/type-curses/icon2.png" />14 500 ���.
						</div>
						<div>
							<img src="/img/type-curses/icon3.png" />���� � �������������
						</div>
					</div>
				</div>
			</div>
			<!-- ���� 4 - 2 -->
			<div class="content ver4" id = "4_2">
				<div class="content-top">
					<div class="content-top-left">
						<img src="/img/type-curses/main11.png" alt="PM ��� ����������" />
					</div>
					<div class="content-top-right">
						<h2>PM ��� ����������</h2>
						<span>����������� ����������� �� ��� ����������</br>��������� ����������� ����� ��������</span>
						<a class="description-track" href="#"><img src="/img/type-curses/button5.png" alt="������ �������� �����" /></a>
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
							<div class="block-middle">����������</br>���������:</br>Agile vs</br>��������</div>
						</div>
						<div class="block">
							<div class="block-header"><span>02</span></div>
							<div class="block-middle">������ ��</br>��������.</br>����������</br>�������������</br>��������</div>
							<div class="block-footer">������� ����</div>
						</div>
					</div>
				</div>
				<div class="content-bottom">
					<div class="time-price">
						<div>
							<img src="/img/type-curses/icon2.png" />15 �����
						</div>
						<div>
							<img src="/img/type-curses/icon2.png" />14 500 ���.
						</div>
						<div>
							<img src="/img/type-curses/icon3.png" />���� � �������������
						</div>
					</div>
				</div>
			</div>
		</div>
		<div id="reviews">
            <img src="/img/type-curses/icon4.png" alt="������ � �������-������" />
            <h1>�� �������� 268 �������������</br>������� � �������-������</h1>
        </div>
        <div id="chisel" class = "ch_1">
            <div class="chisel-top">
                <img src="/img/type-curses/chisel1.png" alt="������ ���������" />
            </div>
            <div class="chisel-middle">
                <div class="caption">������ ���������</div>
                <span>������������ ��������</br>� ���������������� ��������</span>
            </div>
            <div class="arrows">
                <div class="left-arrow"><a onclick = "fade_chisel('ch_1', 'ch_2');"><img src="/img/type-curses/left.png" /></a></div>
                <div class="right-arrow"><a onclick = "fade_chisel('ch_1', 'ch_2');"><img src="/img/type-curses/right.png" /></a></div>
            </div>
            <div class="chisel-bottom">
                <div class="caption">
                    ��� ������ � ������� �� �������</br>�������������� ��� ���� �����. ��������� ��,</br>��� ����� ��� ���������� ����, � �� ���</br>������� ����������.</br>�������� ����� � �������� �� 20%!
                </div>
            </div>
        </div>
		<div id="chisel" class = "ch_2">
            <div class="chisel-top">
                <img src="/img/type-curses/chisel1.png" alt="������ ���������" />
            </div>
            <div class="chisel-middle">
                <div class="caption">����� ���������</div>
                <span>PME, ������������ ������</br>������������ ��������,</br>13 ��� �����</span>
            </div>
            <div class="arrows">
                <div class="left-arrow"><a onclick = "fade_chisel('ch_2', 'ch_1');"><img src="/img/type-curses/left.png" /></a></div>
                <div class="right-arrow"><a onclick = "fade_chisel('ch_2', 'ch_1');"><img src="/img/type-curses/right.png" /></a></div>
            </div>
            <div class="chisel-bottom">
                <div class="caption">
                    ��� ����������� �����</br>���������� 5000 ������</br>� ����� ������ ������������
                </div>
            </div>
        </div>
        <div id="preparation">
            <div class="info">
                �� �����������<h2>3 000</h2>�����������������</br>������������ � �������</br>����������
            </div>
        </div>
        <div id="trainers">
            <h1>���� ������ �������:</h1>
            <div class="container">
                <div>
                    <img src="/img/type-curses/trainers1.png" alt="����� ���������" />
                    <h3>����� ���������</h3>
                    <div class="signature">���, ������������ ������</br>������������ ��������,</br>13 ��� �����</div>
                </div>
                <div>
                    <img src="/img/type-curses/trainers2.png" alt="������ �������������" />
                    <h3>������ �������������</h3>
                    <div class="signature">���, ������������ ������</br>������������ ��������,</br>13 ��� �����</div>
                </div>
                <div>
                    <img src="/img/type-curses/trainers3.png" alt="���� �����" />
                    <h3>���� �����</h3>
                    <div class="signature">���, ������������ ������</br>������������ ��������,</br>13 ��� �����</div>
                </div>
            </div>
            <div class="buttons">
                <a href="#"><img src="/img/type-curses/button2.png" alt="��� ������� /"></a>
            </div>
            <div class="slogan">�������� ����������</br>��������� �� ������ ���������</br>�����</div>
            <div class="logo">
                <img src="/img/type-curses/logo2.png" alt="PM Expert">
            </div>
        </div>
    </body>

</html>
