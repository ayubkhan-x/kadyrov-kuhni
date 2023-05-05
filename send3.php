<?php

$phone = $_POST['phone'];

$phone = htmlspecialchars($phone);

$phone = urldecode($phone);



$phone = trim($phone);

$subject = $_POST['subject'];





if (
    mail(
        "kuchendorf@rambler.ru",
        "Новое письмо с сайта", 
        "Оставили заявку на: " . $subject . "\n" .
        "Телефон номер: " . $phone . "\n" .
        "От: https://kadyrov.site \r\n"
    )
) {
    header('Location: https://kadyrov.site/final.html');
} else {
    echo ('Error');
}
?>