<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<ul>
    <li>Имя: <?=$_POST['name'];?></li>
    <li>Телефон: <?=$_POST['tel'];?></li>
    <?php if (isset($_POST['email'])): ?>
        <li>Почта: <?=$_POST['email'];?></li>
    <?php endif; ?>
</ul>
<?php
isset($_POST['adv1']) == true ? $adv1 = 'Да' : $adv1 = 'Нет';
isset($_POST['adv2']) == true ? $adv2 = 'Да' : $adv2 = 'Нет';
isset($_POST['adv3']) == true ? $adv3 = 'Да' : $adv3 = 'Нет';
isset($_POST['adv4']) == true ? $adv4 = 'Да' : $adv4 = 'Нет';
isset($_POST['adv5']) == true ? $adv5 = 'Да' : $adv5 = 'Нет';
isset($_POST['adv6']) == true ? $adv6 = 'Да' : $adv6 = 'Нет';
isset($_POST['adv7']) == true ? $adv7 = 'Да' : $adv7 = 'Нет';
if (isset($_POST['type_product'])) {
    switch ($_POST['type_product']) {
        case 1:
            $type_product = 'Изделие из МДФ';
            break;
        case 2:
            $type_product = 'Массив дерева';
            break;
        case 3:
            $type_product = 'Шпон';
            break;
        case 4:
            $type_product = 'Дверной блок';
            break;
        case 5:
            $type_product = 'Оконный блок';
            break;
        case 6:
            $type_product = 'Столешница';
            break;
        case 7:
            $type_product = 'Подоконник';
            break;
        case 8:
            $type_product = 'Паркетная доска';
            break;
        case 9:
            $type_product = 'Жалюзийная дверца';
            break;
    }
}
if (isset($_POST['type_cover'])) {
    switch ($_POST['type_cover']) {
        case 1:
            $type_cover = 'Матовая эмаль';
            break;
        case 2:
            $type_cover = 'Полуматовая эмаль';
            break;
        case 3:
            $type_cover = 'Глянцевая эмаль';
            break;
        case 4:
            $type_cover = 'Высокий глянец (полировка)';
            break;
        case 5:
            $type_cover = 'Высокий глянец и лак (полировка)';
            break;
        case 6:
            $type_cover = 'Лак';
            break;
        case 7:
            $type_cover = 'Масло';
            break;
        case 8:
            $type_cover = 'Заливка смолой';
            break;
        case 9:
            $type_cover = 'Масло с твердым воском';
            break;
    }
}
$_POST['sqm']
?>
<table style="border: 1px solid #ddd; border-collapse: collapse; width: 100%;">
    <thead>
        <tr style="background: #f9f9f9;">
            <th style="padding: 8px; border: 1px solid #ddd;">Наименование</th>
            <th style="padding: 8px; border: 1px solid #ddd;">Что выбрано</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td style="padding: 8px; border: 1px solid #ddd;">Тип изделия</td>
            <td style="padding: 8px; border: 1px solid #ddd;"><?=$type_product;?></td>
        </tr>
        <tr>
            <td style="padding: 8px; border: 1px solid #ddd;">Тип покрытия</td>
            <td style="padding: 8px; border: 1px solid #ddd;"><?=$type_cover;?></td>
        </tr>
        <tr>
            <td style="padding: 8px; border: 1px solid #ddd;">Количество кв.м.</td>
            <td style="padding: 8px; border: 1px solid #ddd;"><?=$_POST['sqm'];?></td>
        </tr>
        <tr>
            <td style="padding: 8px; border: 1px solid #ddd;">Дополнительная информация</td>
            <td style="padding: 8px; border: 1px solid #ddd;"><?=$_POST['note'];?></td>
        </tr>
        <tr>
            <td style="padding: 8px; border: 1px solid #ddd;">упаковка</td>
            <td style="padding: 8px; border: 1px solid #ddd;"><?=$adv1;?></td>
        </tr>
        <tr>
            <td style="padding: 8px; border: 1px solid #ddd;">шпаклевка</td>
            <td style="padding: 8px; border: 1px solid #ddd;"><?=$adv2;?></td>
        </tr>
        <tr>
            <td style="padding: 8px; border: 1px solid #ddd;">удаление сколов</td>
            <td style="padding: 8px; border: 1px solid #ddd;"><?=$adv3;?></td>
        </tr>
        <tr>
            <td style="padding: 8px; border: 1px solid #ddd;">удаление старого покрытия</td>
            <td style="padding: 8px; border: 1px solid #ddd;"><?=$adv4;?></td>
        </tr>
        <tr>
            <td style="padding: 8px; border: 1px solid #ddd;">разборка/сборка изделий</td>
            <td style="padding: 8px; border: 1px solid #ddd;"><?=$adv5;?></td>
        </tr>
        <tr>
            <td style="padding: 8px; border: 1px solid #ddd;">снятие фурнитуры</td>
            <td style="padding: 8px; border: 1px solid #ddd;"><?=$adv6;?></td>
        </tr>
        <tr>
            <td style="padding: 8px; border: 1px solid #ddd;">подбор цвета по образцу</td>
            <td style="padding: 8px; border: 1px solid #ddd;"><?=$adv7;?></td>
        </tr>
    </tbody>
</table>

</body>
</html>