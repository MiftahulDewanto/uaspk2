<?php 
?>
<link rel="stylesheet" href="regis.css">
<body>
    <div id="card">
        <div id="card-content">
            <form method="post" action="adduser.php">
                <div id="card-title">
                <h2>REGISTRASI AKUN</h2>
                </div>
                <label>Username :</label>
                <input type="text" id="username" name="username" required>
                <br>
                <br>
                <label>Email :</label>
                <input type="text" id="email" name="email" required>
                <br>
                <br>
                <label>Nama :</label>
                <input type="text" id="nama" name="nama" required>
                <br>
                <br>
                <label>Password :</label>
                <input type="password" id="password" name="password" required>
                <br>
                <br>
                <input type="submit" value="Daftar" id="daftar">
            </form>
    </div>
</body>
