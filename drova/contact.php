<?php
$errors = '';
$myemail = 'ciro19999@icloud.com';

if (empty($_POST['goods']) ||
    empty($_POST['location'])||
    empty($_POST['phone'])) {
    $errors .= "\n Введите все поля!";
}

if (empty($errors)) {
    $to = $myemail;
    $email_subject = "Заказ от ". date("d.m.y H:i");
    $email_body = '<h3>Новый заказ от ' . date("d.m.y H:i") .
        '</h3>
        <table width="100%" border="1" cellspacing="1" cellpadding="1">
        <tr><td style="padding:10px;">Что доставить: </td><td style="padding:10px;">' . $_POST['goods'] . '</td></tr>
        <tr><td style="padding:10px;">Куда доставить: </td><td style="padding:10px;">' . $_POST['location'] . '</td></tr>
        <tr><td style="padding:10px;">Телефон: </td><td style="padding:10px;">' . $_POST['phone'] . '</td></tr>
        </table>';

    $headers = "From: " . 'order@drova.spb.ru' . "\r\n";
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-Type: text/html; charset=UTF-8\r\n";

    mail($to, $email_subject, $email_body, $headers);

    $ch = curl_init("https://sms.ru/sms/send");
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_TIMEOUT, 30);
    curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query(array(
        "api_id" => "69237EA2-2B7F-041D-87F1-295EF709BDB7",
        "from" => "DROVA",
        "to" => "79516498582", // До 100 штук до разэ
        "msg" => 'Что: '. $_POST['goods']  .' Куда: '. $_POST['location'] .' Телефон: '. $_POST['phone'],
        "json" => 1

    )));
    $body = curl_exec($ch);
    curl_close($ch);

    print_r($body);

}
?>