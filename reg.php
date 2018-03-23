<?php include 'includes/header.php' ?>

    <div class="container">
        <h1>Регистрация</h1>
        <form action="models/auth.php" method="post" class="form-group col-sm-4">
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
            <button type="submit" class="btn btn-default">Регистрация</button>
        </form>
    </div>


<?php include 'includes/footer.php' ?>