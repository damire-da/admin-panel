<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post" action="admin.php?
    action=<?=$_GET['action']?>&id=<?=$_GET['id']?>">
        <div class="field">
            <label for="last_name">Фамилия</label>
            <input type="text" id="last_name" name="last_name" 
            value="<?= $student['last_name']?>">
        </div>
        <div class="field">
            <label for="birthday">Дата рождения</label>
            <input type="date" id="birthday" name="birthday" 
            value="<?=$student['birthday']?>">
        </div>
        <div class="field">
            <label for="gender">Пол</label>
            <input type="text" id="gender" name="gender" 
            value="<?=$student['gender']?>">
        </div>
        <div class="field">
            <label for="team">Группа</label>
            <input type="text" id="team" name="team" 
            value="<?=$student['team']?>">
        </div>
        <div class="field">
            <label for="facult">Факультет</label>
            <input type="text" id="facult" name="facult" 
            value="<?=$student['facult']?>">
        </div>
        <div class="field">
            <label for="place_work">Место работы</label>
            <input type="text" id="place_work" name="place_work" 
            value="<?=$student['place_work']?>">
        </div>
        <div class="field">
            <label for="city">Город</label>
            <input type="text" id="city" name="city" 
            value="<?=$student['city']?>">
        </div>
        <div class="field">
            <input type="submit" value="Сохранить">
        </div>

    </form>
</body>
</html>