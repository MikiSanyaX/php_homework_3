<?php
$encoding = 'UTF-8';

echo "Введите фамилию: ";
$surname = trim(fgets(STDIN));

echo "Введите имя: ";
$name = trim(fgets(STDIN));

echo "Введите отчество: ";
$patronymic = trim(fgets(STDIN));

if (empty($surname) || empty($name) || empty($patronymic)) {
    echo "Ошибка: все поля должны быть заполнены!\n";
    exit(1);
}

$surnameFormatted = mb_convert_case($surname, MB_CASE_TITLE, $encoding);
$nameFormatted = mb_convert_case($name, MB_CASE_TITLE, $encoding);
$patronymicFormatted = mb_convert_case($patronymic, MB_CASE_TITLE, $encoding);

$fullName = $surnameFormatted . ' ' . $nameFormatted . ' ' . $patronymicFormatted;

$surnameAndInitials = $surnameFormatted . ' ' 
                    . mb_substr($nameFormatted, 0, 1, $encoding) . '.' 
                    . mb_substr($patronymicFormatted, 0, 1, $encoding) . '.';

$fio = mb_substr($surnameFormatted, 0, 1, $encoding)
     . mb_substr($nameFormatted, 0, 1, $encoding)
     . mb_substr($patronymicFormatted, 0, 1, $encoding);

echo "\nПолное имя: '" . $fullName . "'\n";
echo "Фамилия и инициалы: '" . $surnameAndInitials . "'\n";
echo "Аббревиатура: '" . $fio . "'\n";
?>
