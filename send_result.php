<?php header("Content-Type: text/html;charset=windows-1251"); ?>
<?
	$errors = "";

    $form_course  = iconv('utf-8','windows-1251',$_POST['form_course']);
    $form_name  = iconv('utf-8','windows-1251',$_POST['form_name']);
    $form_phone = iconv('utf-8','windows-1251',$_POST['form_phone']);
    $form_mail = iconv('utf-8','windows-1251',$_POST['form_mail']);
    $form_company = iconv('utf-8','windows-1251',$_POST['form_company']);
    $form_position = iconv('utf-8','windows-1251',$_POST['form_position']);
    $form_capcha = iconv('utf-8','windows-1251',$_POST['form_position']);

    if(empty($form_course)){
        $errors .= '�� ��������� ������������ �����!' . '</br>';
    }
    if(empty($form_name)){
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

        if ($_POST["g-recaptcha-response"]) {
            $response = $reCaptcha->verifyResponse(
                $_SERVER["REMOTE_ADDR"],
                $_POST["g-recaptcha-response"]
            );
        }

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
        $headers_mail .= "Reply-To: info@pmexpert.ru\r\n";

        //$mail_text  = "����: ���������� ������������ �� ����� <br/><br/>";
        $mail_text = "";
        $mail_text .= '������ ' . $form_name . ' ��������� �� ���� - ' . $form_course . '<br/><br/>';
        $mail_text .= "E-mail: $form_mail <br/> �������: $form_phone <br/> �������� : $form_company <br/> ��������� : $form_position <br/>";

        mail("info@pmexpert.ru", "������ �� ����", $mail_text, $headers_mail);
        //mail("dimaski@inbox.ru", "������ �� ����", $mail_text, $headers_mail);
        echo '������� �� �����������!';
    }else{
	    echo $errors;
	}
	
	
?>