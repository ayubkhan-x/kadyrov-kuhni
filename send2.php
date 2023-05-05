<?php

$contact = $_POST['contact'];
$phone = $_POST['phone'];

$contact = htmlspecialchars($contact);
$phone = htmlspecialchars($phone);

$contact = urldecode($contact);
$phone = urldecode($phone);



$contact = trim($contact);
$phone = trim($phone);





if (
    mail(
        "kuchendorf@rambler.ru",
        "Новое письмо с сайта",
        "Удобная получения результата: " . $contact . "\n" .
        "Телефон номер: " . $phone . "\n" .
        "От: https://kadyrov.site Каталог\r\n",
    )
) {
    header('Location: https://kadyrov.site/final.html');
} else {
    echo ('Error');
}
?>