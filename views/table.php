<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../project/css/style.css">
</head>
<body>
    <a href="admin.php?action=add">Добавить студента</a>
    <table class="admin-table">
        <tr>
            <th>Фамилия</th>
            <th>Дата рождения</th>
            <th>Пол</th>
            <th>Группа</th>
            <th>Факультет</th>
            <th>Место работы</th>
            <th>Город</th>
        </tr>
        <?php foreach($students as $s): ?>
            <tr>
            <td><?=$s['last_name']?></td>
            <td><?=$s['birthday']?></td>
            <td><?=$s['gender']?></td>
            <td><?=$s['team']?></td>
            <td><?=$s['facult']?></td>
            <td><?=$s['place_work']?></td>
            <td><?=$s['city']?></td>
            <td>
                <a href="admin.php?action=edit&id=<?=$s['id']?>">Редактировать</a>    
            </td>
            <td>
                <a href="admin.php?action=remove&id=<?=$s['id']?>">Удалить</a>
            </td>
        </tr>
        <?php endforeach ?>
    </table>
</body>
</html>




