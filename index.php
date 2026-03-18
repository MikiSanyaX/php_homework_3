<?php
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

$surnameLower = mb_strtolower($surname);
$nameLower = mb_strtolower($name);
$patronymicLower = mb_strtolower($patronymic);

$surnameFormatted = mb_strtoupper(mb_substr($surnameLower, 0, 1)) . mb_substr($surnameLower, 1);
$nameFormatted = mb_strtoupper(mb_substr($nameLower, 0, 1)) . mb_substr($nameLower, 1);
$patronymicFormatted = mb_strtoupper(mb_substr($patronymicLower, 0, 1)) . mb_substr($patronymicLower, 1);

$fullName = $surnameFormatted . ' ' . $nameFormatted . ' ' . $patronymicFormatted;

$surnameAndInitials = $surnameFormatted . ' ' . mb_substr($nameFormatted, 0, 1) . '.' . mb_substr($patronymicFormatted, 0, 1) . '.';

$fio = mb_substr($surnameFormatted, 0, 1) . mb_substr($nameFormatted, 0, 1) . mb_substr($patronymicFormatted, 0, 1);

echo "\nПолное имя: '" . $fullName . "'\n";
echo "Фамилия и инициалы: '" . $surnameAndInitials . "'\n";
echo "Аббревиатура: '" . $fio . "'\n";
?>
