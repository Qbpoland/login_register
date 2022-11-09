<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style_login.css">
    <title>Logowanie</title>
</head>
<body>
    <?php





?>
    <div id="login">
        <h1>Zaloguj się</h1>
        <form action="index.php" method="post">
            <label for="emailInput">Email:</label>
            <input type="email" name="email" id="emailInput">
            <br>
            <label for="passwordInput">Hasło:</label>
            <input type="password" name="password" id="passwordInput">
            <input type="hidden" name="action" value="login">
            <input type="submit" value="Zaloguj">
            <br>
            <br>
            
        </form>
        <a href="register.php">Zarejestruj się </a>


    </div>
</body>
</html>