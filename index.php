<?php
    $json = file_get_contents(__DIR__.'/newjson.json');
    $data = json_decode($json, true);
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>PHP_Lesson_2.1</title>
        <link rel="stylesheet" href="styles.css"/>
    </head>
    <body>
        <h1>PHP_Lesson_2.1</h1>
        <h2>Чтение данных из файла json</h2>
        <table>
            <thead>
                <tr>
                    <td>Имя</td>
                    <td>Фамилия</td>
                    <td>Адрес</td>
                    <td>Телефон</td>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($data as $item) { ?>
                <tr>
                    <td><?php echo $item['firstName']?></td>
                    <td><?php echo $item['lastName']?></td>
                    <td><?php echo $item['address']?></td>
                    <td><?php echo $item['phoneNumber']?></td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
    </body>
</html>
