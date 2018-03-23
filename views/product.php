<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8">
    <title> Магазин игрушек</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
          integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>
<body>
<div class="container">
    <h1>Игрушки</h1>
    <div>
        <div class="product">
            <h3>
                <?= $product['name'] ?></h3>
            <em>Опубликовано: <?= $product['date'] ?></em>
            <p><?= $product['description'] ?></p>
        </div>
    </div>
    <footer>
        <p>Игрушки<br>Copyright &copy; 2017</p>
    </footer>
</div>
</body>
</html>
