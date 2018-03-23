<?php include 'includes/header.php' ?>

    <div class="container">
        <h1>Личный кабинет</h1>
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
            <?php } else include 'personal/profile.php'; ?>
        </div>
        <hr>
    </div>


<?php include 'includes/footer.php' ?>