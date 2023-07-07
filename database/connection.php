<?php

//получаем данные из формы
$FIO = filter_var(trim($_POST['FIO']), FILTER_UNSAFE_RAW);
$datetime = filter_var(trim($_POST['datetime']), FILTER_UNSAFE_RAW);
$number = filter_var(trim($_POST['phone']), FILTER_UNSAFE_RAW);
$email = filter_var(trim($_POST['email']), FILTER_UNSAFE_RAW);

if(mb_strlen($FIO) < 0 || mb_strlen($FIO) > 100) {
    echo "Заполните ФИО";
    exit();
} else if(mb_strlen($datetime) < 0 || mb_strlen($datetime) > 100) {
    echo "Укажите желаему дату";
    exit();
} else if(mb_strlen($number) < 0 || mb_strlen($number) > 100) {
    echo "Укажите свой номер";
    exit();
} else if(mb_strlen($email) < 0 || mb_strlen($email) > 100) {
    echo "Укажите свой e-mail";
    exit();
}

//подключение к базе данных
$mysqli = new mysqli('jt3101ji.beget.tech', 'jt3101ji_result', 'result2023!', 'jt3101ji_result');

//проверка соединения с базой
if ($mysqli -> connect_errno) {
    echo "Подключение невозможно: " . $mysqli -> connect_errno;
    exit();
}

//внесем данные в таблицу из формы
$mysqli->query("INSERT INTO `Bron` (`FIO`, `date`, `telephone`, `email`)
VALUES('$FIO', '$datetime', '$number', '$email')");

//закрываем соединение с базой данной
$mysqli->close();

//переход на главную страницу после отправки формы
header('Location:/')

?>