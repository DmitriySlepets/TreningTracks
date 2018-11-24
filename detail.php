<?php header("Content-Type: text/html;charset=windows-1251"); ?>
<?php require_once "recaptchalib.php"; ?>
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

    if($course == "3_1"){ $nameCourse = "������������ ������������ ��������"; }
    if($course == "3_2"){ $nameCourse = "������������ ������� � IT"; }
	if($course == "3_3"){ $nameCourse = "����������� ������������ �������� PMSE�"; }

    if($course == "4_1"){ $nameCourse = "PM ��� �������������� �������������"; }
    if($course == "4_2"){ $nameCourse = "PM ��� ��������������"; }
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
        <link rel="stylesheet" href="css/detail.css?ver=5" />
        <!-- JQuery -->
        <script src="js/jquery.min.js"></script>
        <script src="js/detail.js?ver=4"></script>
        <script src="js/jquery.mask.js"></script>
        <script src='https://www.google.com/recaptcha/api.js'></script>
    </head>
    <body>
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
                            <li><img src="img/detail-curses/icon-menu.png" onclick="$('.mobile-menu-area').addClass('show');$(this).addClass('click')" style="cursor:pointer;"/></li>
                        </ul>
                    </div>
                </div>
                <div class="header-bottom">
                    <div class="breadcrumbs">
                        <ul> <!-- ������� ������ -->
                            <li class="old"><a href="/trening-tracks/">�������</a></li>
							<!-- ����� ��������� ������-->
							<?if($course == "1_1"){?>
								<li class="old"><a href="index.php?trecks=1">����� ��� ���������� ��������� ������</a></li>
								<li>������������� ������� PMEA�</li>
							<?}?>
							<?if($course == "1_2"){?>
								<li class="old"><a href="index.php?trecks=1">����� ��� ���������� ��������� ������</a></li>
								<li>����������� ������� PMSE�</li>
							<?}?>
							<?if($course == "1_3"){?>
								<li class="old"><a href="index.php?trecks=1">����� ��� ���������� ��������� ������</a></li>
								<li>������������ ������� PME�</li>
							<?}?>
							<?if($course == "1_4"){?>
								<li class="old"><a href="index.php?trecks=1">����� ��� ���������� ��������� ������</a></li>
								<li>������������ ������� PME�. ���������� � PMP�</li>
							<?}?>
							<?if($course == "1_5"){?>
								<li class="old"><a href="index.php?trecks=1">����� ��� ���������� ��������� ������</a></li>
								<li>�������� ������� �������</li>
							<?}?>
							
							<?if($course == "2_1"){?>
								<li class="old"><a href="index.php?trecks=2">����� ��� ������� �������������</a></li>
								<li>������������-������� PMEP�</li>
							<?}?>
							<?if($course == "2_2"){?>
								<li class="old"><a href="index.php?trecks=2">����� ��� ������� �������������</a></li>
								<li>������������ ���������� ����� PRIME�</li>
							<?}?>
							
							<?if($course == "3_1"){?>
								<li class="old"><a href="index.php?trecks=3">���������� �����</a></li>
								<li>������������ ������������ ��������</li>
							<?}?>
							<?if($course == "3_2"){?>
								<li class="old"><a href="index.php?trecks=3">���������� �����</a></li>
								<li>������������ ������� � IT</li>
							<?}?>
							<?if($course == "3_3"){?>
								<li class="old"><a href="index.php?trecks=3">���������� �����</a></li>
								<li>����������� ������������ �������� PMSE�</li>
							<?}?>
							
							<?if($course == "4_1"){?>
								<li class="old"><a href="index.php?trecks=4">Project management ��� ����</a></li>
								<li>PM ��� �������������� �������������</li>
							<?}?>
							<?if($course == "4_2"){?>
								<li class="old"><a href="index.php?trecks=4">Project management ��� ����</a></li>
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
						    <?if($course == "1_1"){?><img src="img/type-curses/main1.png" alt="������������� ������� PMEA�"><?}?>
                            <?if($course == "1_2"){?><img src="img/type-curses/main2.png" alt="����������� ������� PMSE�"><?}?>
                            <?if($course == "1_3"){?><img src="img/type-curses/main3.png" alt="������������ ������� PME�"><?}?>
                            <?if($course == "1_4"){?><img src="img/type-curses/main4.png" alt="������������ ������� PME� ���������� � PMP�"><?}?>
                        	<?if($course == "1_5"){?><img src="img/type-curses/main5.png" alt="�������� ������� �������"><?}?>
							
							<?if($course == "2_1"){?><img src="img/type-curses/main6.png" alt="������������-������� PMEP�"><?}?>
							<?if($course == "2_2"){?><img src="img/type-curses/main7.png" alt="������������ ���������� ����� PRIME�"><?}?>
							
							<?if($course == "3_1"){?><img src="img/type-curses/main8.png" alt="������������ ������������ ��������"><?}?>
							<?if($course == "3_2"){?><img src="img/type-curses/main9.png" alt="������������ ������� � IT"><?}?>
							<?if($course == "3_3"){?><img src="img/type-curses/main12.png" alt="����������� ������������ �������� PMSE�"><?}?>
							
							<?if($course == "4_1"){?><img src="img/type-curses/main10.png" alt="PM ��� �������������� �������������"><?}?>
							<?if($course == "4_2"){?><img src="img/type-curses/main11.png" alt="PM ��� ����������"><?}?>
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
                        <img src="img/sert/<? echo $course;?>.jpg" width = "800px;" alt="����������" />
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
                        <img src="img/detail-curses/icon4.png" alt="�����" />
                    </div>
                    <div class="banner-right">
                        <h3>��������� ��������</h3>
                        <a class="description-track" onclick = "scroller_down();"><img src="img/detail-curses/button1.png" alt="���������� �� ����"  /></a>
                    </div>
                </div>-->

                <div class="form-block" id="form_send">
                    <?php
                    if (!empty($_POST)) {
                        $errors = "";
                        $form_fio  = trim($_POST['form_fio']);
                        $form_phone = $_POST['form_phone'];
                        $form_mail = trim($_POST['form_mail']);
                        $form_company = trim($_POST['form_company']);
                        $form_position = trim($_POST['form_position']);
                        $form_capcha = $_POST['g-recaptcha-response'];

                        if(empty($form_fio)){
                            $errors .= '�� ��������� ���!' . '</br>';
                        }
                        if(empty($form_phone)){
                            $errors .= '�� �������� ����� ��������!' . '</br>';
                        }
                        if(empty($form_mail)){
                            $errors .= '�� ��������� ���� Email!' . '</br>';
                        }
                        if(empty($form_capcha)){
                            $errors .= '�� ����� �������?' . '</br>';
                        }else{
                            //��������� ����
                            $secret = "6LeIKnwUAAAAAG6vYSCX6tqNEirf3j-TziHyRgv2";
                            //�����
                            $response = null;
                            //�������� ���������� �����
                            $reCaptcha = new ReCaptcha($secret);

                            $response = $reCaptcha->verifyResponse($_SERVER["REMOTE_ADDR"], $_POST["g-recaptcha-response"]);

                            if ($response != null && $response->success) {
                                //echo "��� ������.";
                            } else {
                                $errors .= '�� ����� �������?' . '</br>';
                            }

                        }

                        //����������� �����
                        if(strlen($errors)==0) {
                            //������ �������
                            /* $headers_mail = "Content-type: text/html; charset=Windows-1251 \r\n";
                             $headers_mail .= "From: admin-pmexpert.ru@pmexpert.ru\r\n";
                             $headers_mail .= "Reply-To: admin-pmexpert.ru@pmexpert.ru\r\n";*/

                            $headers_mail = "Content-type: text/html; charset=Windows-1251 \r\n";
                            $headers_mail .= "From: info@pmexpert.ru\r\n";
                            //$headers_mail .= "Reply-To: info@pmexpert.ru\r\n";
                            //$headers_mail .= "To: slepec_do@codeking.ru\r\n";
                            $headers_mail .= "To: info@pmexpert.ru\r\n";

                            //$mail_text  = "����: ���������� ������������ �� ����� <br/><br/>";
                            $mail_text = "";
                            $mail_text .= '������ ' . $form_fio . ' ��������� �� ���� - ' . $nameCourse . '<br/><br/>';
                            $mail_text .= "E-mail: $form_mail <br/> �������: $form_phone <br/> �������� : $form_company <br/> ��������� : $form_position <br/>";

                            mail("info@pmexpert.ru", "������ �� ����", $mail_text, $headers_mail);
                            //mail("dimaski@inbox.ru", "������ �� ����", $mail_text, $headers_mail);
                            echo '<div style="color:green;text-align: center;">������� �� �����������!</div>';
                        }else{
                            echo '<div style="color:red;text-align: center;">' . $errors . '</div>';
                        }
                    }
                    ?>
                    <div class="title-section white">������������ ����� �� ����� ����� ������</div>
                    <form class="feedback-form" method="post" action="<?php echo $_SERVER['REQUEST_URI']; ?>#form_send">
                        <div class="form-group">
                            <input type="text" name="form_course" class="input-rectangle form-control form_course" placeholder="����"  required="" value="<?php echo $nameCourse; ?>" readonly />
                            <input type="text" name="form_fio" class="input-rectangle form-control form_name" placeholder="�.�.�"  value="<?php if(!empty($form_fio)) echo $form_fio; ?>" required="" />
                            <input type="phone" name="form_phone" class="input-rectangle form-control form_phone"  placeholder="+7" value="<?php if(!empty($form_phone)) echo $form_phone; ?>" required="" />
                            <div class="tips">�� ������� SMS � ������������ � �����</div>
                            <input type="email" name="form_mail" class="input-rectangle form-control form_mail"  placeholder="E-mail" value="<?php if(!empty($form_mail)) echo $form_mail; ?>" required="" />
                            <div class="tips">�� ������� ������ � �������������� �����������</div>
                            <input type="text" name="form_company" class="form-control form_company"  value="<?php if(!empty($form_company)) echo $form_company; ?>" placeholder="��������" />
                            <input type="text" name="form_position" class="input-rectangle form-control form_position" value="<?php if(!empty($form_position)) echo $form_position; ?>" placeholder="���������" />
                        </div>
                        <div class="g-recaptcha" data-sitekey="6LeIKnwUAAAAAD5OjPCMyNGg9ZzdA0YcdPN5O625"></div>
                        <div class="desc">������� ������ ��������� ������, �� ����� <a href="http://www.pmexpert.ru/popd/" style="color: #828282;" >�������� �� ��������� ����� ������������ ������</a>.</div>
                        <button class="btn-red submit-form" style="margin-top: 40px;">��������� ������</button>
                    </form>
                </div><!--.form-block-->

                <div class="logo">
                    <img src="img/type-curses/logo2.png" alt="PM Expert">
                </div>
            </div><!--#footer-->
        </div><!--all-->
		
		
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