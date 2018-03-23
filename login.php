<?php include 'includes/header.php' ?>

    <div class="container">
        <h1>Авторизация</h1>
        <hr>
        <div class="row">
            <?php if (!$_SESSION['auth']) { ?>
                <form action="auth.php" method="post" class="form-group col-sm-4">
                    <input placeholder="Логин"
                           class="form-control"
                           type="text"
                           name="login"
                           required>
                    <br>
                    <input placeholder="Пароль"
                           class="form-control"
                           type="text"
                           name="password"
                           required>
                    <br>
                    <button type="submit" class="btn btn-default">Авторизация</button>
                </form>
                <a href="reg.php">Регистрация</a>
            <?php } else { ?>
                <a href="logout.php" class="btn btn-default">Выйти</a>
            <?php } ?>
        </div>
        <hr>

        <?php
        //    $_SESSION['param'] = 'value';
        //    $_SESSION['param2'] = 'value2';
        //    $_SESSION['param3'] = 'value3';
        echo '<pre>' . print_r($_SESSION, true) . '</pre>';
        ?>
    </div>


<?php include 'includes/footer.php' ?>