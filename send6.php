<?php

$phone = $_POST['phone'];

$phone = htmlspecialchars($phone);

$phone = urldecode($phone);



$phone = trim($phone);





if (
    mail(
        "kuchendorf@rambler.ru",
        "Новое письмо с сайта", 
        "Телефон номер: " . $phone . "\n" .
        "От: https://kadyrov.site  Пригласить домой\r\n"
    )
) {
    header('Location: https://kadyrov.site/final.html');
} else {
    echo ('Error');
}
?>