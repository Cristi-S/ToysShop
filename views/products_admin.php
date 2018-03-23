<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8">
    <title> Магазин игрушек</title>
    <link rel="stylesheet" href="../style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
          integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>
<body>
<div class="container">
    <h1>Игрушки</h1>
    <div>
        <a href="index.php?action=add">Добавить товар </a>
        <table class="admin-table">
            <tr>
                <th> ДАТА</th>
                <th> ЗАГОЛОВОК</th>
                <th></th>
                <th></th>
            </tr>
            <?php foreach ($products as $a): ?>
                <tr>
                    <td> <?= $a['date'] ?> </td>
                    <td> <?= $a['name'] ?></td>
                    <td><a href="index.php?action=edit&id=<?= $a['id'] ?>"> Редактировать </a></td>
                    <td><a href="index.php?action=delete&id=<?= $a['id'] ?>"> Удалить </a></td>
                </tr>
            <?php endforeach ?>
        </table>
    </div>
    <footer>
        <p>Игрушки<br>Copyright &copy; 2017</p>
    </footer>
</div>
</body>
</html>
