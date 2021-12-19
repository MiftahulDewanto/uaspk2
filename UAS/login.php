<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="login.css">
    <title>Halaman Login</title>
    
<body>
    <div id="card">
        <div id="card-content">
            <div id="card-title">
              <h2>LOGIN</h2>
              <div class="underline-title"></div>
            </div>
        </div>
        <form method="post" class="form" action="index.php">
            <label for="user-email" style="padding: top 22px"> &nbsp;Username</label>
            <input type="text" id="username" class="form-content" type="username" name="username" autocomplete="on" required>
            <div class="form-border"></div>
            <label for="user-password" style="padding-top:22px">&nbsp;Password</label>
            <input id="user-password" class="form-content" type="password" name="password" required>
            <div class="form-border"></div>
            <br>
            <input type="submit" value="Login" id="login">
            <br>
            <p>Belum Terdaftar? Daftar <a href="regis.php">Di Sini</a></p>
        </form>
    </div>
    
</body>
</html>
