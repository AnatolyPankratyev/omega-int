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
<table style="border: 1px solid #ddd; border-collapse: collapse; width: 100%;">
    <thead>
    <tr style="background: #f9f9f9;">
        <th style="padding: 8px; border: 1px solid #ddd;">Наименование</th>
        <th style="padding: 8px; border: 1px solid #ddd;">Что выбрано</th>
    </tr>
    </thead>
    <tbody>
    <tr>
        <td style="padding: 8px; border: 1px solid #ddd;">Ширина</td>
        <td style="padding: 8px; border: 1px solid #ddd;"><?=$_POST['width'];?></td>
    </tr>
    <tr>
        <td style="padding: 8px; border: 1px solid #ddd;">Высота</td>
        <td style="padding: 8px; border: 1px solid #ddd;"><?=$_POST['height'];?></td>
    </tr>
    </tbody>
</table>

</body>
</html>