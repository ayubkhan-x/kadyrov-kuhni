<?php
$q_form = $_POST['q_form'];
$q_size = $_POST['q_size'];

$quiz_a = $_POST['quiz_a'];
$quiz_b = $_POST['quiz_b'];
$quiz_c = $_POST['quiz_c'];
$quiz_len = $_POST['quiz_len'];

$q_add_moyka = $_POST['q_add_moyka'];
$q_add2 = $_POST['q_add2'];
$q_add3 = $_POST['q_add3'];
$q_add4 = $_POST['q_add4'];
$q_mat = $_POST['q_mat'];
$q_table = $_POST['q_table'];
$q_furn = $_POST['q_furn'];

$q_extra1 = $_POST['q_extra1'];
$q_extra2 = $_POST['q_extra2'];
$q_extra3 = $_POST['q_extra3'];
$q_extra4 = $_POST['q_extra4'];

$q_gift = $_POST['q_gift'];
$contact = $_POST['contact'];
$phone = $_POST['phone'];


$q_form = htmlspecialchars($q_form);
$q_size = htmlspecialchars($q_size);

$quiz_a = htmlspecialchars($quiz_a);
$quiz_b = htmlspecialchars($quiz_b);
$quiz_c = htmlspecialchars($quiz_c);
$quiz_len = htmlspecialchars($quiz_len);

$q_add_moyka = htmlspecialchars($q_add_moyka);
$q_add2 = htmlspecialchars($q_add2);
$q_add3 = htmlspecialchars($q_add3);
$q_add4 = htmlspecialchars($q_add4);

$q_mat = htmlspecialchars($q_mat);
$q_table = htmlspecialchars($q_table);
$q_furn = htmlspecialchars($q_furn);
$q_extra1 = htmlspecialchars($q_extra1);
$q_extra2 = htmlspecialchars($q_extra2);
$q_extra3 = htmlspecialchars($q_extra3);
$q_extra4 = htmlspecialchars($q_extra4);
$q_gift = htmlspecialchars($q_gift);
$contact = htmlspecialchars($contact);
$phone = htmlspecialchars($phone);



$q_form = urldecode($q_form);
$q_size = urldecode($q_size);
$quiz_a = urldecode($quiz_a);
$quiz_b = urldecode($quiz_b);
$quiz_c = urldecode($quiz_c);
$quiz_len = urldecode($quiz_len);
$q_add_moyka = urldecode($q_add_moyka);
$q_add2 = urldecode($q_add2);
$q_add3 = urldecode($q_add3);
$q_add4 = urldecode($q_add4);
$q_mat = urldecode($q_mat);
$q_table = urldecode($q_table);
$q_furn = urldecode($q_furn);
$q_extra1 = urldecode($q_extra1);
$q_extra2 = urldecode($q_extra2);
$q_extra3 = urldecode($q_extra3);
$q_extra4 = urldecode($q_extra4);
$q_gift = urldecode($q_gift);
$contact = urldecode($contact);
$phone = urldecode($phone);





$tel = trim($tel);
$q_form = trim($q_form);
$q_size = trim($q_size);
$quiz_a = trim($quiz_a);
$quiz_b = trim($quiz_b);
$quiz_c = trim($quiz_c);
$quiz_len = trim($quiz_len);
$q_add_moyka = trim($q_add_moyka);
$q_add2 = trim($q_add2);
$q_add3 = trim($q_add3);
$q_add4 = trim($q_add4);

$q_mat = trim($q_mat);
$q_table = trim($q_table);
$q_furn = trim($q_furn);
$q_extra1 = trim($q_extra1);
$q_extra2 = trim($q_extra2);
$q_extra3 = trim($q_extra3);
$q_extra4 = trim($q_extra4);
$q_gift = trim($q_gift);
$contact = trim($contact);
$phone = trim($phone);





if (
    mail(
        "kuchendorf@rambler.ru",
        "Новое письмо с сайта",
        "Форм кухни: " . $q_form . "\n" .
        "Размер: " . $q_size . "\n" .
        "Сторона А: " . $quiz_a . "\n" .
        "Сторона B: " . $quiz_b . "\n" .
        "Сторона C: " . $quiz_c . "\n" .
        "Длина: " . $quiz_len . "\n" .
        "Дополнительный конструктив: " . $q_add_moyka . ' '. $q_add2 . ' '. $q_add3 . ' '.  $q_add4 . "\n" .
        "Материал фасадов: " . $q_mat . "\n" .
        "Материал столешницы: " . $q_table . "\n" .
        "Тип фурнитуры: " . $q_furn . "\n" .
        "Дополнительные опции кухни: " . $q_extra1 . ' '. $q_extra2 . ' '. $q_extra3 . ' '.$q_extra4 . "\n" .
        "Подарок в случае заказа кухни: " . $q_gift . "\n" .
        "Удобная получения результата: " . $contact . "\n" .
        "Телефон номер: " . $phone . "\n" .
        "От: https://kadyrov.site \r\n"
    )
) {
    header('Location: https://kadyrov.site/final.html');
} else {
    echo ('Error');
}
?>